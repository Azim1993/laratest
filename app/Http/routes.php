<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::auth();
Route::get('/','ProductController@index');
Route::get('products','ProductController@index');
Route::get('product/{id}', 'ProductController@show');
Route::get('createProduct',['uses' => 'ProductController@create', 'middleware' => 'auth']);
Route::patch('updateProduct/{id}',['before' => 'csrf', 'uses' => 'ProductController@update', 'middleware' => 'auth']);
Route::post('addProduct',['before' => 'csrf', 'uses' => 'ProductController@store', 'middleware' => 'auth']);
Route::get('product/{id}/edit',['uses' => 'ProductController@edit', 'middleware' => 'auth']);
Route::get('product/{id}/delete',['uses' => 'ProductController@delete', 'middleware' => 'auth']);
