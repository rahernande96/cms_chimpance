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

Route::get('/locale','IndexController@locale')->name('locale')

Route::get('/admin',function(){
	return redirect()->route('news-show');
})->name('admin');

//Novedades


Route::get('/slides-show', 'SlideController@show')->name('news-show');

Route::get('/slides-create', 'SlideController@create')->name('news-create');

Route::post('/slides-save', 'SlideController@store')->name('news-store');

Route::post('/slides-delete', 'SlideController@destroy')->name('news-destroy');

Route::post('/slides-orden', 'SlideController@order')->name('news-order');

Route::post('/slides-update', 'SlideController@update')->name('news-update');


});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/','IndexController@index')->name('index');

Route::get('/sobre',function(){
	return view('sobre');
})->name('sobre');

Route::get('/certificados',function(){
	return view('certificados');
})->name('certificados');

Route::get('/contacto',function(){
	return view('contacto');
})->name('contacto');

Route::get('/geografico',function(){
	return view('geografico');
})->name('geografico');

Route::get('/industrias',function(){
	return view('industrias');
})->name('industrias');

Route::get('/servicios',function(){
	return view('servicios');
})->name('servicios');

Route::post('/map-data','MapController@show')->name('map-data');