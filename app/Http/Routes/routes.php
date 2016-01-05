<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$router->get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

$router->group(['middleware' => ['web']], function ($router) {
    $router->group(['prefix' => 'vendedor', 'namespace' => 'Sellers'], function ($router) {
        require app_path('Http/Routes/sellers.php');
    });

    $router->group(['prefix' => 'comprador', 'namespace' => 'Customers'], function ($router) {
        require app_path('Http/Routes/customers.php');
    });
});
