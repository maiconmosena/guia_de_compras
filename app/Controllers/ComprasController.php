<?php
//controller compras
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Services\ComprasServices;

class ComprasController extends BaseController
{
    protected $comprasServices;

    public function __construct()
    {
        $this->comprasServices = new ComprasServices();
    }
    
    public function index()
    {
        $data = [ 
            'compras' =>  $this->comprasServices->getCompras(),
         ];
 
         echo view('compras/listar', $data);  // 1 a pasta depois, 2 o metodo, 
                                            // segue criar outros echos para cada 
    }
}
