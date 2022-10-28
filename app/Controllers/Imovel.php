<?php

namespace App\Controllers;

class Imovel extends BaseController
{
    public function index($id_imovel = null)
    {
        echo view('imovel');
    }
}
