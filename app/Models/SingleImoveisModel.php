<?php namespace App\Models;

use CodeIgniter\Model;

class SingleImoveisModel extends Model
{
    protected $table = 'imovell';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id',
        'bairro',
        'cidade',
        'estado',
        'foto',
        'inst_prox',
        'contato',
        'descricao',
        'tipo',
        'qtd_pessoas',
        'qtd_ban',
        'tam_imovel',
        'tamquarto'

    ];
    

}