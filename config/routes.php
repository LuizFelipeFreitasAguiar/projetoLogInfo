<?php

use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;


//venda
Router::scope('/vendas', function ($routes) {
    $routes->connect('/', ['controller' => 'Vendas', 'action' => 'index']);
});

Router::scope('/vendas', function ($routes) {
    $routes->connect('/criar', ['controller' => 'Vendas', 'action' => 'add']);
});

Router::scope('/vendas', function ($routes) {
    $routes->connect('/visualizar/:id', ['controller' => 'Vendas', 'action' => 'view'])
        ->setPass(['id'])
        ->setPatterns(['id' => '\d+']);
});

Router::scope('/vendas', function ($routes) {
    $routes->connect('/editar/:id', ['controller' => 'Vendas', 'action' => 'edit'])
        ->setPass(['id'])
        ->setPatterns(['id' => '\d+']);
});

Router::scope('/vendas', function ($routes) {
    $routes->connect('/excluir/:id', ['controller' => 'Vendas', 'action' => 'delete'])
        ->setPass(['id'])
        ->setPatterns(['id' => '\d+']);
});

$routes->connect('/vendas/relatorio-periodo', ['controller' => 'Vendas', 'action' => 'relatorioPeriodo']);

//pessoas

Router::scope('/pessoa', function ($routes) {
    $routes->connect('/', ['controller' => 'Pessoa', 'action' => 'index']);
});

Router::scope('/pessoa', function ($routes) {
    $routes->connect('/criar', ['controller' => 'Pessoa', 'action' => 'add']);
});

Router::scope('/pessoa', function ($routes) {
    $routes->connect('/visualizar/:id', ['controller' => 'Pessoa', 'action' => 'view'])
        ->setPass(['id'])
        ->setPatterns(['id' => '\d+']);
});

Router::scope('/pessoa', function ($routes) {
    $routes->connect('/editar/:id', ['controller' => 'Pessoa', 'action' => 'edit'])
        ->setPass(['id'])
        ->setPatterns(['id' => '\d+']);
});

Router::scope('/pessoa', function ($routes) {
    $routes->connect('/excluir/:id', ['controller' => 'Pessoa', 'action' => 'delete'])
        ->setPass(['id'])
        ->setPatterns(['id' => '\d+']);
});

//item
Router::scope('/item', function ($routes) {
    $routes->connect('/', ['controller' => 'Item', 'action' => 'index']);
});

Router::scope('/item', function ($routes) {
    $routes->connect('/criar', ['controller' => 'Item', 'action' => 'add']);
});

Router::scope('/item', function ($routes) {
    $routes->connect('/visualizar/:id', ['controller' => 'Item', 'action' => 'view'])
        ->setPass(['id'])
        ->setPatterns(['id' => '\d+']);
});

Router::scope('/item', function ($routes) {
    $routes->connect('/editar/:id', ['controller' => 'Item', 'action' => 'edit'])
        ->setPass(['id'])
        ->setPatterns(['id' => '\d+']);
});

Router::scope('/item', function ($routes) {
    $routes->connect('/excluir/:id', ['controller' => 'Item', 'action' => 'delete'])
        ->setPass(['id'])
        ->setPatterns(['id' => '\d+']);
});
