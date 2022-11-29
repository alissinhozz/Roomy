<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends Controller
{
	public function index()
	{
		//include helper form
		helper(['form']);
		$data = [];
		echo view('register', $data);
	}

	public function save()
	{
		//include helper form
		helper(['form']);
		//set rules validation form
		$rules = [
			'nome' 			=> 'required|min_length[3]|max_length[20]',
			'email' 		=> 'required|min_length[6]|max_length[50]|valid_email|is_unique[usuario.email]',
			'num_tel' 			=> 'required|min_length[9]|max_length[20]',
			'senha' 		=> 'required|min_length[6]|max_length[200]',

			'confsenha' 	=> 'matches[senha]'

		];

		if($this->validate($rules)){
			$model = new UserModel();
			$data = [
				'nome' 	=> $this->request->getVar('nome'),
				'email' 	=> $this->request->getVar('email'),
				'descricao' 	=> $this->request->getVar('descricao'),
				'genero' 	=> $this->request->getVar('genero'),
				'num_tel' 	=> $this->request->getVar('num_tel'),
				'data_nas' 	=> $this->request->getVar('data_nas'),
				'tipo' 	=> $this->request->getVar('tipo'),
				'senha' => password_hash($this->request->getVar('senha'), PASSWORD_DEFAULT)
			];
			$model->save($data);
			return redirect()->to('/login');
		}else{
			$data['validation'] = $this->validator;
			echo view('register', $data);
		}
		
	}

}