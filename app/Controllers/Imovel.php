<?php

namespace App\Controllers;

class Imovel extends BaseController
{
    public function index($idImovel)
    {
        echo view ('imovel');
    }
}
