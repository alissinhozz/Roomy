<?php

namespace App\Controllers;
use App\Models\SingleImoveisModel;

class Home extends BaseController
{
    public function index()
    {
       
        $singleImoveisModel = new SingleImoveisModel();
        $dados = [
            'imoveis' => $singleImoveisModel->findAll()
        ];
        return view('index', $dados);
        
    }
    public function store(){
        $imovel = new Imovel();
        $file = $this->request->getFile('foto');
       if( $file->iSValid() && ! $file->hasMoved())
       {
        $imageName=$file->getRandomName();
        $file->move('uploads/', $imageName);
       }
       $data = [
        'name' => $this->request->getPost('name'),
        'description'
       ];
       
       return redirect()->to('product');
     }
   
}
