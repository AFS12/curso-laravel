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
