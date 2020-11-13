<?php
use App\Http\Controllers\BookController;

/** @var \Laravel\Lumen\Routing\Router $router */
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

$router->get('/book/create/' , 'BookController@new_book');

$router->get('/book/delete/' , 'BookController@delete_book');

$router->get('/', function () use ($router) {
    return $router->app->version();    
});

$router->post('/register','UserController@register');
