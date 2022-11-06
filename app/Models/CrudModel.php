<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class CrudModel extends Model
{
    
    protected $table = 'imovel';
    // allowed fields to manage
    protected $allowedFields = ['tamquarto', 'tam_imovel', 'qtd_ban', 'qtd_pessoas','bairro', 'inst_prox', 'tipo', 'foto', 'contato', 'cidade', 'estado', 'descricao' ];
    
   
    

}