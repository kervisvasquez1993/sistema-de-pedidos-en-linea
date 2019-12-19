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

Route::get('/', 'testController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/product', 'ProductController@index'); // listar
Route::get('/admin/products/create', 'ProductController@create'); // crear
Route::post('/admin/products', 'ProductController@store'); // guardar los datos del usuario
