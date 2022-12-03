<?php
namespace App\Controllers;

class Conta extends BaseController
{
    public function index()
    {
        echo view('minhaconta');
    }


    function alterar dados()
    {
        $dados_cabecalho['titulo'] = "Alterar dados";
        $this->load->view('template/cabecalho');
        $this->load->view('template/rodape');
    }
}
