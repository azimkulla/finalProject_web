<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['uses' => 'ActionController@index']);

Route::get('/category/create', ['uses' => 'ActionController@createCategory']);

Route::get('/categories', ['uses' => 'ActionController@categories']);

Route::post('/category/store', ['uses' => 'ActionController@storeCategory']);

Route::post('/category/delete/{id}', ['uses' => 'ActionController@deleteCategory']);


Route::get('/item/create', ['uses' => 'ActionController@createItem']);

Route::post('/item/store', ['uses' => 'ActionController@storeItem']);

Route::post('/item/delete/{id}', ['uses' => 'ActionController@deleteItem']);
