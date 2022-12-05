<?php
//defined('BASEPATH') OR exit ('No direct script acess allowed');
namespace App\Models;
use CodeIgniter\Model;

class UsuarioModels extends Model{
    protected $table = 'usuario';
    protected $primaryKey = 'id';


    protected $allowedFields = ['nome', 'email', 'senha', 'foto', 'genero', 'num_tel', 'data_nas', 'tipo', 'descricao'];
}

class UsuarioModel extends Model
{
    function inserir($nome, $login,$senha)
    {
        $sql = "INSERT INTO";
    }
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

}
