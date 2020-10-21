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

Route::get('products', 'App\Http\Controllers\ProductController@index')->name('products.index');

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
