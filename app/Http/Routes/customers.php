<?php

$router->group(['middleware' => ['auth:web_customers']], function ($router) {
    $router->get('/', [
        'uses' => 'CustomersController@index',
        'as' => 'customers.index',
    ]);
});

$router->get('entrar', [
    'uses' => 'AuthController@index',
    'as' => 'customers.auth.index',
]);

$router->post('entrar', [
    'uses' => 'AuthController@login',
    'as' => 'customers.auth.login',
]);

$router->get('sair', [
    'uses' => 'AuthController@logout',
    'as' => 'customers.auth.logout',
]);
