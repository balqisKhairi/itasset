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
//Route::get('/desktops', 'DesktopController@index')->name('desktops.index');
//Route::get('/desktops/create', 'DesktopController@create')->name('desktops.create');
//Route::post('/desktops', 'DesktopController@store')->name('desktops.store');
Route::get('desktops/{desktop}', 'DesktopController@show')->name('desktops.show');
Route::get('desktops/{desktop}/edit', 'DesktopController@edit')->name('desktops.edit');
Route::put('desktops/{desktop}', 'DesktopController@update')->name('desktops.update');
Route::delete('desktops/{category}', 'DesktopController@destroy')->name('desktops.destroy');



//Test
Route::get('/desktops/createOne', 'DesktopController@createOne')->name('desktops.createOne');
Route::post('/desktops', 'DesktopController@storeOne')->name('desktops.storeOne');
  
Route::get('desktops/createTwo', 'DesktopController@createTwo')->name('desktops.createTwo');
Route::post('desktops', 'DesktopController@storeTwo')->name('desktops.storeTwo');
  
Route::get('desktops/createThree', 'DesktopController@createThree')->name('desktops.createThree');
Route::post('desktops/createThree', 'DesktopController@storeThree')->name('desktops.storeThree');

Route::get('desktops/create-step-four', 'DesktopController@createStepFour')->name('desktops.create.step.four');
Route::post('desktops/create-step-four', 'DesktopController@postCreateStepFour')->name('desktops.create.step.four.post');
  
Route::get('desktops/create-step-five', 'DesktopController@createStepFive')->name('desktops.create.step.five');
Route::post('desktops/create-step-five', 'DesktopController@postCreateStepFive')->name('desktops.create.step.five.post');
  
Route::get('desktops/create-step-six', 'DesktopController@createStepSix')->name('desktops.create.step.six');
Route::post('desktops/create-step-six', 'DesktopController@postCreateStepSix')->name('desktops.create.step.six.post');
Route::resource('desktops', 'DesktopController');