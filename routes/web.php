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

Route::get('/', function () {
    return view('welcome2');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Category
Route::get('/categorys', 'CategoryController@index')->name('categorys.index');
Route::get('/categorys/create', 'CategoryController@create')->name('categorys.create');
Route::post('/categorys', 'CategoryController@store')->name('categorys.store');
Route::get('categorys/{category}', 'CategoryController@show')->name('categorys.show');
Route::get('categorys/{category}/edit', 'CategoryController@edit')->name('categorys.edit');
Route::put('categorys/{category}', 'CategoryController@update')->name('categorys.update');
Route::delete('categorys/{category}', 'CategoryController@destroy')->name('categorys.destroy');
//Route::resource('categorys', 'CategoryController');

//Desktops
Route::get('/desktops', 'DesktopController@index')->name('desktops.index');
//Route::get('/desktops/create', 'DesktopController@create')->name('desktops.create');
//Route::post('/desktops', 'DesktopController@store')->name('desktops.store');

Route::get('desktops/createone', 'DesktopController@createone')->name('desktops.createone');
Route::post('desktops/storeone', 'DesktopController@storeone')->name('desktops.storeone');
Route::get('desktops/createtwo', 'DesktopController@createtwo')->name('desktops.createtwo');
Route::post('desktops/storetwo', 'DesktopController@storetwo')->name('desktops.storetwo');
Route::get('desktops/createthree', 'DesktopController@createthree')->name('desktops.createthree');
Route::post('desktops/storethree', 'DesktopController@storethree')->name('desktops.storethree');
Route::get('desktops/createfour', 'DesktopController@createfour')->name('desktops.createfour');
Route::post('desktops/storefour', 'DesktopController@storefour')->name('desktops.storefour');
Route::get('desktops/createfive', 'DesktopController@createfive')->name('desktops.createfive');
Route::post('desktops/storefive', 'DesktopController@storefive')->name('desktops.storefive');
Route::get('desktops/createsix', 'DesktopController@createsix')->name('desktops.createsix');
Route::post('desktops/storesix', 'DesktopController@storesix')->name('desktops.storesix');

Route::get('desktops/{desktop}', 'DesktopController@show')->name('desktops.show');
Route::get('desktops/{desktop}/edit', 'DesktopController@edit')->name('desktops.edit');
Route::put('desktops/{desktop}', 'DesktopController@update')->name('desktops.update');
Route::delete('desktops/{category}', 'DesktopController@destroy')->name('desktops.destroy');

//Route::resource('desktops', 'DesktopController');

