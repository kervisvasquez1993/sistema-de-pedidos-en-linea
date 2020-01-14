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
    Route::get('/products/{id}', 'ProductController@show'); // mostrar producto productos
    Route::get('/categories/{categories}', 'CategoryController@show');
    Route::post('/cart', 'CartDetailController@store');
    Route::delete('/cart', 'CartDetailController@destroy');
    Route::post('/order', 'CartController@update');

    // router para el administrador

    Route::middleware(['auth','admin'])->prefix('admin')->namespace('Admin')->group(function (){
    Route::get('/products', 'ProductController@index'); // listar
    Route::get('/products/create', 'ProductController@create'); //  formulario
    Route::post('/products', 'ProductController@store'); //  registrar producto
    Route::get('/products/{id}/edit', 'ProductController@edit'); //formulario de edicion
    Route::post('/products/{id}/edit', 'ProductController@update'); // actualizar
    Route::delete('/products/{id}', 'ProductController@destroy'); // eliminar

    Route::get('/products/{id}/images', 'ImageController@index'); //listado
    Route::post('/products/{id}/images', 'ImageController@store'); // registro
    Route::delete('products/{id}/images' , 'ImageController@destroy'); // eliminar images
    Route::get('/products/{id}/images/select/{image}', 'ImageController@select'); //destacada

        Route::get('/categories', 'CategoryController@index'); // LISTADO DE CATEGORIA
        Route::get('/categories/create', 'CategoryController@create'); //  formulario FORMULARIO PARA CREAR NUEVAS CATEGORIAS
        Route::post('/categories', 'CategoryController@store'); //  registrar REGISTRAR NUEVAS CATEGORIAS
        Route::get('/categories/{category}/edit', 'CategoryController@edit'); //formulario de edicion DE UNA CATEGORIA
        Route::post('/categories/{category}/edit', 'CategoryController@update'); // actualizar LA NUEVA CATEGORIA
        Route::delete('/categories/{category}', 'CategoryController@destroy'); // eliminar UNA CATEGORIA EN PARTICULAR
        // crear categorie controle con su namespace Admin php artisan make:controller Admin\CategoryController
    });

