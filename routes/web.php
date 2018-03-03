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
    return $router->app->version();
});

//Author
$router->post('api/v1/author', [
    'as' => 'authors_create', 'uses' => 'AuthorController@create'
]);

//Article
$router->post('api/v1/article', [
    'as' => 'article_create', 'uses' => 'ArticleController@create'
]);

$router->put('api/v1/article/{id}', [
    'as' => 'article_update', 'uses' => 'ArticleController@update'
]);

$router->get('api/v1/article/all', [
    'as' => 'article_all', 'uses' => 'ArticleController@all'
]);