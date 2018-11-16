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

Route::middleware(['auth'])->group(function () {

Route::get('/', function () {
    return redirect()->route('news-show');
});

//Novedades


Route::get('/novedades-show', 'News@show')->name('news-show');

Route::get('/novedades-create', 'News@create')->name('news-create');

Route::post('/novedades-save', 'News@store')->name('news-store');

Route::post('/novedades-delete', 'News@destroy')->name('news-destroy');

Route::post('/novedades-orden', 'News@order')->name('news-order');


//Productos


Route::get('/productos-show', 'ProductController@show')->name('product-show');

Route::get('/productos-create', 'ProductController@create')->name('product-create');

Route::post('/productos-save', 'ProductController@store')->name('product-store');

Route::post('/productos-delete', 'ProductController@destroy')->name('product-destroy');

Route::post('/productos-orden', 'ProductController@order')->name('product-order');

Route::get('/home',  function () {
    return redirect()->route('news-show');
})->name('home');

});

Auth::routes();
