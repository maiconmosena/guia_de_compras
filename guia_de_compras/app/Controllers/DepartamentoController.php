<?php
//controller departamento
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Services\DepartamentoServices;

class DepartamentoController extends BaseController
{
    protected $departamentoServices;

    public function __construct()
    {
        $this->departamentoServices = new DepartamentoServices();          
    }
    
    public function index()
    {
        $data = [ 
            'departamento' =>  $this->departamentoServices->getDepartamento(),
         ];
 
         echo view('departamento/listar', $data);  
       
    }
}
