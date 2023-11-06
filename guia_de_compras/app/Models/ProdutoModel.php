<?php

namespace App\Models;

use App\Entities\Produto;
use CodeIgniter\Model;


class ProdutoModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'produtos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = Produto::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    // Campos que você vai poder manipular
    //seria interessante inserir lagum metodo para fazer os chamados aqui
    protected $allowedFields    = ['departamento_id', 'categoria', 'nome','quantidade', 'valor', 'data_validade', 'data_compra', 'descricao'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}
