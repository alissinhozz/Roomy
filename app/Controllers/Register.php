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
			'senha' 		=> 'required|min_length[6]|max_length[200]',
			'confsenha' 	=> 'matches[senha]',
		];

		if($this->validate($rules)){
			$model = new UserModel();
			$data = [
				'nome' 	=> $this->request->getVar('nome'),
				'email' 	=> $this->request->getVar('email'),
				'senha' => password_hash($this->request->getVar('senha'), PASSWORD_DEFAULT),
				/*'telefone' 	=> $this->request->getVar('telefone'),
				'nascimento' 	=> $this->request->getVar('nascimento'),
				'genero' 	=> $this->request->getVar('genero'),
				'tipo' 	=> $this->request->getVar('tipo'),
				'descricao' 	=> $this->request->getVar('descricao'),
				'foto' 	=> $this->request->getVar('foto'),
				*/
			];
			$model->save($data);
			return redirect()->to('/login');
		}else{
			$data['validation'] = $this->validator;
			echo view('register', $data);
		}
		
	}

}