<?php
namespace App\Models;
use CodeIgniter\Model;
class UsuarioModel extends Model{
    protected $table = 'usuario';
    protected $primaryKey = 'idUsuario';

    protected $allowFields = ['nome', 'email', 'data_nas', 'num_tel', 'genero', 'descricao', 'senha', 'tipo', 'fotoUser'];
}