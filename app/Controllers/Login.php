<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login');
    } 

    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $senha = $this->request->getVar('senha');
        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['senha'];
            $verify_pass = password_verify($senha, $pass);
            if($verify_pass){
                $ses_data = [
                    'id'       => $data['id'],
                    'nome'     => $data['nome'],
                    'email'    => $data['email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                echo 'oiii';
                return redirect()->to('/');
            }else{
                $session->setFlashdata('msg', 'Senha incorreta');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'E-mail não cadastrado');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
} 