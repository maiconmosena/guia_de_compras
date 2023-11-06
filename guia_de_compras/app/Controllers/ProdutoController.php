<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Services\ProdutoServices;

class ProdutoController extends BaseController
{
    protected $produtoServices;

    public function __construct()
    {
        $this->produtoServices = new ProdutoServices();
    }

    public function index()
    {
        $data = [ 
           'produtos' =>  $this->produtoServices->getProdutos(),
        ];

        echo view('produtos/listar', $data);
    }

    // essas iformações nao deveriam estar no Service?
}
