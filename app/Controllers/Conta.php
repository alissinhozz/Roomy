<?php

namespace App\Controllers;
use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Conta extends Controller
{
    public function index()
    {
        //só listar
        $usuarioModel = new UsuarioModel();
        $data['usuario'] = $usuarioModel->orderBy('idUsuario', 'DESC')->findAll();
        return view('minhaconta', $data);
    }
    //show single user
    public function singleUser($idUsuario = null)
    {
        //uma tentativa de edit
        $usuarioModel = new UsuarioModel();
        $data['user_obj'] = $usuarioModel->where('idUsuario', $idUsuario)->first();
        return view('editusuario', $data);
    }
    //update user data
    public function update(){
        $usuarioModel = new UsuarioModel();
        $idUsuario = $this->request->getVar('idUsuario');
        $data = [
            'nome' => $this->request->getVar('nome'),
            'email'  => $this->request->getVar('email'),
            'num_tel'  => $this->request->getVar('num_tel'),
            'descricao'  => $this->request->getVar('descricao'),
            'senha'  => $this->request->getVar('senha'),
            'tipo'  => $this->request->getVar('tipo'),
            'fotoUser'  => $this->request->getVar('fotoUser'),
        ];
        $usuarioModel->update($idUsuario, $data);
        return $this->response->redirect(site_url('/users-list'));
    }
    // delete user
   // public function delete($id = null){
    //    $usuarioModel = new UsuarioModel();
    //    $data['usuario'] = $usuarioModel->where('idUsuario', $idUsuario)->delete($idUsuario);
    //    return $this->response->redirect(site_url('/users-list'));
  //  }   
}
