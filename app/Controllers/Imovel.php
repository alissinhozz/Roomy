<?php

namespace App\Controllers;
use App\Models\SingleImoveisModel;

class Imovel extends BaseController
{
    public function index($id)
    {
       $singleImoveisModel = new SingleImoveisModel();
       $dados =[
        'imovel'=> $singleImoveisModel->find($id)
       ];
       return view('imovel', $dados);
    }
}
