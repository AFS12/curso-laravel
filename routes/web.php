<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/produtos/{idProduct?}', function ($idProduct = '') {
    return "Produtos {$idProduct}";
});

Route::get('/categoria/{flag}/posts', function ($flag) {
    return "posts da categoria: {$flag}";
});

Route::get('/categorias/{flag}', function ($flag) {
    return "produtos da categoria: {$flag}";
});

Route::match(['get','post'],'/match', function () {
    return 'Match';
});

Route::any('/any', function () {
    return 'Any';
});

Route::post('/register', function () {
    return '';
});

Route::get('/empresa', function () {
    return view('contact');
});

Route::get('/contato', function () {
    return 'contato';
});

Route::get('/', function () {
    return view('welcome');
});
