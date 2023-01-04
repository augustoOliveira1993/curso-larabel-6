<?php

use Illuminate\Support\Facades\Route;


Route::redirect('redirect1', '/redirect2');

//Route::get('redirect1', function () {
//    return redirect('/redirect2');
//});

Route::get('redirect2', function () {
    return redirect()->away('https://www.google.com');
});

Route::get('produtos/{idProduto?}', function ($idProduto = '') {
    return "Produto {$idProduto}";
});

Route::get('categories/{flag}', function ($flag) {
    return 'flag: ' . $flag;
});

Route::match(['get', 'post'], '/match', function () {
    return 'match';
});

Route::get('/contato', function () {
    return view('contact');
});

Route::get('/', function () {
    return view('welcome');
});

Route::view('/view', 'welcome', ['id' => 'teste']);

Route::get('/nome-url', function () {
    return 'Hey hey hey';
})->name('url.name');

Route::get('/redirect3', function () {
    return redirect()->route('url.name');
});


Route::get('/login', function () {
    return 'Login';
})->name('login');


Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'App\Http\Controllers\Admin',
    'name' => 'admin'
], function () {
    Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
    Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
    Route::get('/produtos', 'TesteController@teste')->name('products');
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    })->name('home');
});
