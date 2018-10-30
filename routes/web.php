<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return str_random(32);
});

$router->group(
    [
        'prefix' => '/users'
    ], function ($router) {
        $router->get('/', 'UserController@index');
        $router->post('/', 'UserController@store');
        $router->get('/{id}', 'UserController@show');
        $router->put('/{id}', 'UserController@update');
        $router->delete('/{id}', 'UserController@delete');
    }
);

$router->group(['middleware' => 'jwt_auth'], function() use ($router) {
    $router->get('users', function() {
        $users = \App\User::all();
        return response()->json($users);
    });
});

// Accepts credentials and return a token for us
$router->post(
    'auth/login', 
    [
       'uses' => 'AuthController@authenticate'
    ]
);

$router->group(
    [
        'prefix' => '/restuarant'
    ], function ($router) {
        $router->get('/', 'RestuarantController@index');
        $router->post('/', 'RestuarantController@store');
        $router->get('/{id}', 'RestuarantController@show');
        $router->put('/{id}', 'RestuarantController@update');
        $router->delete('/{id}', 'RestuarantController@delete');
    }
);

$router->post(
    'restuarants/{restuarant}/reviews', 
    'ReviewController@store'
);

