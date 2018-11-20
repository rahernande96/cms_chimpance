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


Route::get('/novedades-show', 'SlideController@show')->name('news-show');

Route::get('/novedades-create', 'SlideController@create')->name('news-create');

Route::post('/novedades-save', 'SlideController@store')->name('news-store');

Route::post('/novedades-delete', 'SlideController@destroy')->name('news-destroy');

Route::post('/novedades-orden', 'SlideController@order')->name('news-order');


});

Auth::routes();
