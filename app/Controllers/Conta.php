<?php

namespace App\Controllers;
use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Conta extends Controller
{
    public function index()
    {
        //só listar
        $usuarioModel = new UsuarioModel();
        $data['usuario'] = $usuarioModel->orderBy('id', 'DESC')->findAll();
        return view('minhaconta', $data);
    }
    //show single user
    public function singleUser($id = null)
    {
        //uma tentativa de edit
        $usuarioModel = new UsuarioModel();
        $data['user_obj'] = $usuarioModel->where('id', $id)->first();
        return view('editusuario', $data);
    }
    //update user data
    public function update(){
        $usuarioModel = new UsuarioModel();
        $id = $this->request->getVar('id');
        $data = [
            'nome' => $this->request->getVar('nome'),
            'email'  => $this->request->getVar('email'),
            'senha'  => $this->request->getVar('senha'),
            'num_tel'  => $this->request->getVar('num_tel'),
            'tipo'  => $this->request->getVar('tipo'),
            'descricao'  => $this->request->getVar('descricao'),            
            //'fotoUser'  => $this->request->getVar('fotoUser'),
        ];
        $usuarioModel->update($id, $data);
        return $this->response->redirect(site_url('/users-list'));
    }
    // delete user
   public function delete($id = null){
    $usuarioModel = new UsuarioModel();
    $data['usuario'] = $usuarioModel->where('id', $id)->delete($id);
     return $this->response->redirect(site_url('cadastro'));
  }  
}
