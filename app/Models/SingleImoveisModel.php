<?php namespace App\Models;

use CodeIgniter\Model;

class SingleImoveisModel extends Model
{
    protected $table = 'imovel';
    protected $primaryKey = 'idImovel';
    protected $allowedFields = [
        'idImovel',
        'bairro',
        'cidade',
        'estado',
        'foto',
        'inst_prox',
    ];
    

}