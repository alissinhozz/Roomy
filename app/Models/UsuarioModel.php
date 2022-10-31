<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'usuario';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nome','email','data_nas','num_tel','genero','desccricao','senha','tipo','fotoUser'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'nome'  => 'required',
        'email' => 'required|is_unique[usuario.email]',
        //'data_nas' => 'required',
        //'num_tel' => 'required',
        //'genero' => 'required',
        //'descricao' => 'required',
        'senha' => 'required',
        //'tipo' => 'required',
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['hashSenha'];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    protected function hashSenha($data) {
        $data['data']['senha'] = password_hash($data['data']['senha'], PASSWORD_DEFAULT);
        return $data;
    }

    public function check($email, $senha) {
        //busca o usuario
        $buscaEmail = $this->where('email', $email)->first();
        if(is_null($buscaEmail)) {
            return false;
        }

        //validar senha
        if(! password_verify($senha, $buscaEmail->senha)) {
            return false;
        }
        
        return $buscaEmail;
    }
}
