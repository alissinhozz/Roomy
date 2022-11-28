<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'usuario';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome','email','senha'];
}