<?php

namespace Config;
//teria que chamar o use?
 
$routes = Services::routes();


$routes->get('/', 'login::index');
$routes->get('/produtos', 'ProdutoController::index');
$routes->get('/departamento', 'DepartamentoController::index');
$routes->get('/compras', 'ComprasController::index');
$routes->post('');
$routes->get('logout', 'Auth::logout');
$routes->get('create', 'Auth::create');
$routes->get('register', 'Auth::register');
$routes->post('createUser', 'Auth::createUser');

$routes->get('dashboard', 'Home::index', ['filter'=>'auth']);


$routes->get('language/{locale}', 'LanguageController::setLanguage');

// conferir as rotas com o professor


