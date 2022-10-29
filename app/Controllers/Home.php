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
}
