<?php

namespace Config;


$routes = Services::routes();


$routes->get('/', 'Auth::index');
$routes->get('/produtos', 'ProdutoController::index');
$routes->post('authenticate', 'Auth::authenticate');
$routes->get('logout', 'Auth::logout');
$routes->get('create', 'Auth::create');
$routes->get('register', 'Auth::register');
$routes->post('createUser', 'Auth::createUser');

$routes->get('dashboard', 'Home::index', ['filter'=>'auth']);


$routes->get('language/{locale}', 'LanguageController::setLanguage');

// conferir as rotas com o professor


