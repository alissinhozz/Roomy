<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class CrudModel extends Model
{
    
    protected $table = 'imovell';
    // allowed fields to manage
    protected $allowedFields = ['tamquarto', 'tam_imovel', 'qtd_ban', 'qtd_pessoas','bairro', 'inst_prox', 'tipo', 'foto', 'contatoUser', 'cidade', 'estado', 'descricao' ];
    
   
    

}