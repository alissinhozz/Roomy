<?php namespace App\Models;

use CodeIgniter\Model;

class Busca_model extends Model
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