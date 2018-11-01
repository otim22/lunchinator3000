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
    return "Welcome to lunchinator";
});

$router->group(['prefix' => 'api/'], function () use ($router) {
    
    // Accepts credentials and return a token for us
    $router->post('auth/login', ['uses' => 'AuthController@authenticate']);
    $router->get('/users', 'UserController@index');
    $router->post('/users', 'UserController@store');
    $router->get('/users/{id}', 'UserController@show');

    $router->get('/ballot', 'BallotController@index');
    $router->post('/ballot', 'BallotController@store');
    $router->get('/ballot/{id}', 'BallotController@show');

    $router->post('/vote', 'VoteController@store');
    // $router->group(['middleware' => 'jwt_auth'], function () use ($router) {
    // });

});





