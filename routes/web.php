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

//------------------rotas de forma mais resumida-------------------
Route::any('products/search', 'App\Http\Controllers\ProductController@search')->name('products.search')->middleware('auth'); 
Route::resource('products', 'App\Http\Controllers\ProductController')->middleware(['auth', 'check.is.admin']);

/* ------------------rotas de forma mais personalizada-------------------
Route::delete('products/{id}', 'App\Http\Controllers\ProductController@destroy')->name('products.destroy');
Route::put('products/{id}', 'App\Http\Controllers\ProductController@update')->name('products.update');
Route::get('products/{id}/edit', 'App\Http\Controllers\ProductController@edit')->name('products.edit');
Route::get('products/create', 'App\Http\Controllers\ProductController@create')->name('products.create');
Route::get('products/{id}', 'App\Http\Controllers\ProductController@show')->name('products.show');
Route::get('products', 'App\Http\Controllers\ProductController@index')->name('products.index');
Route::post('products', 'App\Http\Controllers\ProductController@store')->name('products.store');
*/
Route::get('/login', function () {
    return "Login";
})-> name('login');

/*
    Exemplo de rotas:

Route::middleware([])->group(function(){

    Route::prefix('admin')-> group(function(){

        Route::namespace('App\Http\Controllers\Admin')->group(function(){

            Route::name('admin.')->group(function(){
                Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
            
                Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
            
                Route::get('/produtos', 'TesteController@teste')->name('produtos');

                Route::get('/', function(){
                    return redirect()-> route('admin.dashboard');
                })->name('home');
            });
        });
    });
});


Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'App\Http\Controllers\Admin'
], function(){
    Route::name('admin.')->group(function(){
        Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
    
        Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
    
        Route::get('/produtos', 'TesteController@teste')->name('produtos');

        Route::get('/', function(){
            return redirect()-> route('admin.dashboard');
        })->name('home');
    });
});


Route::get('redirect3', function () {
    return redirect()->route('url.name');
});

//route('url.name')

Route::get('/nome-url', function () {
    return "hey hey hey";
})-> name('url.name');

Route::view('/view', 'welcome');

Route::redirect('/redirect1', '/redirect2');

// Route::get('redirect1', function () {
//     return redirect('/redirect2');
// });

Route::get('redirect2', function () {
    return 'redirect 02';
});

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
*/
Route::get('/', function () {
    return view('layouts/app');
});

Auth::routes();

