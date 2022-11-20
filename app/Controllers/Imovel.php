<?php

namespace App\Controllers;
use App\Models\SingleImoveisModel;

class Imovel extends BaseController
{
    public function index($idImovel)
    {
       $singleImoveisModel = new SingleImoveisModel();
       $dados =[
        'imovel'=> $singleImoveisModel->find($idImovel)
       ];
       return view('imovel', $dados);
    }
}
