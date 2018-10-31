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

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    
    // Accepts credentials and return a token for us
    $router->post('auth/login', ['uses' => 'AuthController@authenticate']);

    $router->group(['middleware' => 'jwt_auth'], function () use ($router) {

        $router->get('/users', 'UserController@index');
        $router->post('/users', 'UserController@store');
        $router->get('/users/{id}', 'UserController@show');

        $router->get('/restuarant', 'RestuarantController@index');
        $router->get('/restuarant/{id}', 'RestuarantController@show');
        $router->post('restuarants/{restuarant}/reviews', 'ReviewController@store');

        $router->get('/ballot', 'BallotController@index');
        $router->post('/ballot', 'BallotController@show');
        $router->get('/ballot/{id}', 'BallotController@show');

        $router->post('/vote', 'VoteController@show');

        
    });

});





