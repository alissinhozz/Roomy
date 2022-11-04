<?php

namespace App\Controllers;

class Pesquisa extends BaseController
{
    public function index()
    {
        $this->load->model('busca_model');
        
    }
}
