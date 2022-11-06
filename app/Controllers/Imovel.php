<?php

namespace App\Controllers;
use App\Models\SingleImoveisModel;

class Imovel extends BaseController
{
    public function index()
    {
       return view(imovel);
    }
}
