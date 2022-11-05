<?php

namespace App\Controllers;
use App\Models\Busca_model;
class Pesquisa extends BaseController
{
    public function index()
    {
        $buscaModel = new Busca_model();
        $inputName=$this->request->getPost('inputName');
        if(!empty($inputName)){
            $cidade=$buscaModel->like(['cidade' => '%'.$inputName.'%'])->findAll();
          
            return view('pesquisa', ['cidade'=>$cidade]);
        }
        return view('pesquisa');

    }
}
