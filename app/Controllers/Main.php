<?php
 
namespace App\Controllers;
 
use App\Models\CrudModel;
 
class Main extends BaseController
{
    // Session
    protected $session;
    // Data
    protected $data;
    // Model
    protected $crud_model;

    public function __construct(){
        $this->crud_model = new CrudModel();
        $this->session= \Config\Services::session();
        $this->data['session'] = $this->session;
    }
 
    public function create(){
        $this->data['page_title'] = "Add New";
        $this->data['request'] = $this->request;
        echo view('templates/header', $this->data);
        echo view('crud/create', $this->data);
    
    }
    public function save(){
        $this->data['request'] = $this->request;
        $post = [
            
           
            'contatoUser' => $this->request->getPost('contatoUser'),
            'estado' => $this->request->getPost('estado'),
            'tamquarto' => $this->request->getPost('tamquarto'),
            'tam_imovel' => $this->request->getPost('tam_imovel'),
            'qtd_ban' => $this->request->getPost('qtd_ban'),
            'qtd_pessoas' => $this->request->getPost('qtd_pessoas'),
            'bairro' => $this->request->getPost('bairro'),
            'inst_prox' => $this->request->getPost('inst_prox'),
            'tipo' => $this->request->getPost('tipo'),
            'cidade' => $this->request->getPost('cidade'),
            'descricao' => $this->request->getPost('descricao')        

        ];
        if(!empty($this->request->getPost('id')))
            $save = $this->crud_model->where(['id'=>$this->request->getPost('id')])->set($post)->update();
        else
            $save = $this->crud_model->insert($post);
        if($save){
            if(!empty($this->request->getPost('id')))
            $this->session->setFlashdata('success_message','Imóvel editado com sucesso') ;
            else
            $this->session->setFlashdata('success_message','Imóvel cadastrado com sucesso') ;
            $id =!empty($this->request->getPost('id')) ? $this->request->getPost('id') : $save;
            return redirect()->to('/main/view_details/'.$id);
        }else{
            echo view('templates/header', $this->data);
            echo view('crud/create', $this->data);
            
        }
    }
 
  
    // List Page

    public function list(){
       
        
        $this->data['page_title'] = "List of Contacts";
        $this->data['list'] = $this->crud_model->orderBy('id ASC')->select('*')->get()->getResult();
        echo view('templates/header', $this->data);
        echo view('crud/list', $this->data);
    }
 
    // Edit Form Page
    public function edit($id=''){
        if(empty($id)){
            $this->session->setFlashdata('error_message','Unknown Data ID.') ;
            return redirect()->to('/main/list');
        }
        $this->data['page_title'] = "Editar Imóvel";
        $qry= $this->crud_model->select('*')->where(['id'=>$id]);
        $this->data['data'] = $qry->first();
        echo view('templates/header', $this->data);
        echo view('crud/edit', $this->data);
       
    }
 
    // Delete Data
    public function delete($id=''){
        if(empty($id)){
            $this->session->setFlashdata('error_message','Unknown Data ID.') ;
            return redirect()->to('/main/list');
        }
        $delete = $this->crud_model->delete($id);
        if($delete){
            $this->session->setFlashdata('success_message','Imóvel excluído com sucesso.') ;
            return redirect()->to('/main/list');
        }
    }
 
    // View Data
    public function view_details($id=''){
        if(empty($id)){
            $this->session->setFlashdata('error_message','Unknown Data ID.') ;
            return redirect()->to('/main/list');
        }
        $this->data['page_title'] = "View Contact Details";
        $qry= $this->crud_model->select("*")->where(['id'=>$id]);
        $this->data['data'] = $qry->first();
       echo view('templates/header', $this->data);
        echo view('crud/view', $this->data);
    
    }
 

       
}