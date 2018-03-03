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
//Create article
$router->post('api/v1/article', [
    'as' => 'article_create', 'uses' => 'ArticleController@create'
]);

//Update article by id
$router->put('api/v1/article/{id}', [
    'as' => 'article_update', 'uses' => 'ArticleController@update'
]);

//Show all articles
$router->get('api/v1/article/all', [
    'as' => 'article_all', 'uses' => 'ArticleController@all'
]);

//Show article by id
$router->get('api/v1/article/show/{id}', [
    'as' => 'article_show', 'uses' => 'ArticleController@show'
]);

//Delete article by id
$router->delete('api/v1/article/{id}', [
    'as' => 'article_delete', 'uses' => 'ArticleController@delete'
]);