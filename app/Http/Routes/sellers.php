<?php

$router->group(['middleware' => ['auth:web_sellers']], function ($router) {
    $router->get('/', [
        'uses' => 'SellersController@index',
        'as' => 'sellers.index',
    ]);
});

$router->get('entrar', [
    'uses' => 'AuthController@index',
    'as' => 'sellers.auth.index',
]);

$router->post('entrar', [
    'uses' => 'AuthController@login',
    'as' => 'sellers.auth.login',
]);

$router->get('sair', [
    'uses' => 'AuthController@logout',
    'as' => 'sellers.auth.logout',
]);
