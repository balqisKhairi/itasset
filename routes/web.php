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



//department
Route::get('/departments', 'departmentController@index')->name('departments.index');
Route::get('/departments/create', 'departmentController@create')->name('departments.create');
Route::post('/departments', 'departmentController@store')->name('departments.store');
Route::get('departments/{department}', 'departmentController@show')->name('departments.show');
Route::get('departments/{department}/edit', 'departmentController@edit')->name('departments.edit');
Route::put('departments/{department}', 'departmentController@update')->name('departments.update');
Route::delete('departments/{department}', 'departmentController@destroy')->name('departments.destroy');


//Desktops
Route::get('/desktops', 'DesktopController@index')->name('desktops.index');
Route::post('desktops/store', 'DesktopController@store')->name('desktops.store');
Route::get('desktops/create', 'DesktopController@create')->name('desktops.create');
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


Route::get('desktops/{desktop}/edit', 'DesktopController@edit')->name('desktops.edit');
Route::put('desktops/{desktop}', 'DesktopController@update')->name('desktops.update');
Route::delete('desktops/{desktop}', 'DesktopController@destroy')->name('desktops.destroy');
Route::get('desktops/{desktop}', 'DesktopController@show')->name('desktops.show');
//Route::get('desktops/{desktop}', 'DesktopController@show')->name('desktops.show1');
Route::get('desktops/showStati', 'DesktopController@showStati')->name('desktops.showStati');
//Route::resource('desktops', 'DesktopController');
Route::get('certificates/viewFolder/{id}', 'DesktopController@viewFolder')->name('desktops.viewFolder');


// OS Desktops
Route::get('/osdesktops', 'OsdesktopController@index')->name('osdesktops.index');
//Route::get('/desktops/create', 'DesktopController@create')->name('desktops.create');
//Route::post('/desktops', 'DesktopController@store')->name('desktops.store');

Route::get('osdesktops/createone', 'OsdesktopController@createone')->name('osdesktops.createone');
Route::post('osdesktops/storeone', 'OsdesktopController@storeone')->name('osdesktops.storeone');
Route::get('osdesktops/createtwo', 'OsdesktopController@createtwo')->name('osdesktops.createtwo');
Route::post('osdesktops/storetwo', 'OsdesktopController@storetwo')->name('osdesktops.storetwo');
Route::get('osdesktops/createthree', 'OsdesktopController@createthree')->name('osdesktops.createthree');
Route::post('osdesktops/storethree', 'OsdesktopController@storethree')->name('osdesktops.storethree');
Route::get('osdesktops/createfour', 'OsdesktopController@createfour')->name('osdesktops.createfour');
Route::post('osdesktops/storefour', 'OsdesktopController@storefour')->name('osdesktops.storefour');
Route::get('osdesktops/createfive', 'OsdesktopController@createfive')->name('osdesktops.createfive');
Route::post('osdesktops/storefive', 'OsdesktopController@storefive')->name('osdesktops.storefive');
Route::get('osdesktops/createsix', 'OsdesktopController@createsix')->name('osdesktops.createsix');
Route::post('osdesktops/storesix', 'OsdesktopController@storesix')->name('osdesktops.storesix');
Route::get('osdesktops/createseven', 'OsdesktopController@createseven')->name('osdesktops.createseven');
Route::post('osdesktops/storeseven', 'OsdesktopController@storeseven')->name('osdesktops.storeseven');


Route::get('osdesktops/{osdesktop}/edit', 'OsdesktopController@edit')->name('osdesktops.edit');
Route::put('osdesktops/{osdesktop}', 'OsdesktopController@update')->name('osdesktops.update');
Route::delete('osdesktops/{osdesktop}', 'OsdesktopController@destroy')->name('osdesktops.destroy');
Route::get('osdesktops/{osdesktop}', 'OsdesktopController@show')->name('osdesktops.show');

//Image Viewer
Route::get('/imageviewers', 'ImageViewerController@index')->name('imageviewers.index');
//Route::get('/desktops/create', 'DesktopController@create')->name('desktops.create');
//Route::post('/desktops', 'DesktopController@store')->name('desktops.store');

Route::get('imageviewers/createone', 'ImageViewerController@createone')->name('imageviewers.createone');
Route::post('imageviewers/storeone', 'ImageViewerController@storeone')->name('imageviewers.storeone');
Route::get('imageviewers/createtwo', 'ImageViewerController@createtwo')->name('imageviewers.createtwo');
Route::post('imageviewers/storetwo', 'ImageViewerController@storetwo')->name('imageviewers.storetwo');
Route::get('imageviewers/createthree', 'ImageViewerController@createthree')->name('imageviewers.createthree');
Route::post('imageviewers/storethree', 'ImageViewerController@storethree')->name('imageviewers.storethree');
Route::get('imageviewers/createfour', 'ImageViewerController@createfour')->name('imageviewers.createfour');
Route::post('imageviewers/storefour', 'ImageViewerController@storefour')->name('imageviewers.storefour');
Route::get('imageviewers/createfive', 'ImageViewerController@createfive')->name('imageviewers.createfive');
Route::post('imageviewers/storefive', 'ImageViewerController@storefive')->name('imageviewers.storefive');
Route::get('imageviewers/createsix', 'ImageViewerController@createsix')->name('imageviewers.createsix');
Route::post('imageviewers/storesix', 'ImageViewerController@storesix')->name('imageviewers.storesix');

Route::get('imageviewers/{imageviewer}/edit', 'ImageviewerController@edit')->name('imageviewers.edit');
Route::put('imageviewers/{imageviewer}', 'ImageviewerController@update')->name('imageviewers.update');
Route::delete('imageviewers/{imageviewer}', 'ImageviewerController@destroy')->name('imageviewers.destroy');
Route::get('imageviewers/{imageviewer}', 'ImageviewerController@show')->name('imageviewers.show');

//Aiodesktop
Route::get('/aiodesktops', 'AiodesktopController@index')->name('aiodesktops.index');
//Route::get('/desktops/create', 'DesktopController@create')->name('desktops.create');
//Route::post('/desktops', 'DesktopController@store')->name('desktops.store');

Route::get('aiodesktops/createone', 'AiodesktopController@createone')->name('aiodesktops.createone');
Route::post('aiodesktops/storeone', 'AiodesktopController@storeone')->name('aiodesktops.storeone');
Route::get('aiodesktops/createtwo', 'AiodesktopController@createtwo')->name('aiodesktops.createtwo');
Route::post('aiodesktops/storetwo', 'AiodesktopController@storetwo')->name('aiodesktops.storetwo');
Route::get('aiodesktops/createthree', 'AiodesktopController@createthree')->name('aiodesktops.createthree');
Route::post('aiodesktops/storethree', 'AiodesktopController@storethree')->name('aiodesktops.storethree');
Route::get('aiodesktops/createfour', 'AiodesktopController@createfour')->name('aiodesktops.createfour');
Route::post('aiodesktops/storefour', 'AiodesktopController@storefour')->name('aiodesktops.storefour');
Route::get('aiodesktops/createfive', 'AiodesktopController@createfive')->name('aiodesktops.createfive');
Route::post('aiodesktops/storefive', 'AiodesktopController@storefive')->name('aiodesktops.storefive');
Route::get('aiodesktops/createsix', 'AiodesktopController@createsix')->name('aiodesktops.createsix');
Route::post('aiodesktops/storesix', 'AiodesktopController@storesix')->name('aiodesktops.storesix');
Route::delete('aiodesktops/{aiodesktop}', 'AiodesktopController@destroy')->name('aiodesktops.destroy');
Route::get('aiodesktops/{aiodesktop}/edit', 'AiodesktopController@edit')->name('aiodesktops.edit');
Route::put('aiodesktops/{aiodesktop}', 'AiodesktopController@update')->name('aiodesktops.update');
Route::delete('aiodesktops/{aiodesktop}', 'AiodesktopController@destroy')->name('aiodesktops.destroy');
Route::get('aiodesktops/{aiodesktop}', 'AiodesktopController@show')->name('aiodesktops.show');




//Tablet
Route::get('/tablets', 'TabletController@index')->name('tablets.index');
//Route::get('/desktops/create', 'DesktopController@create')->name('desktops.create');
//Route::post('/desktops', 'DesktopController@store')->name('desktops.store');

Route::get('tablets/createone', 'TabletController@createone')->name('tablets.createone');
Route::post('tablets/storeone', 'TabletController@storeone')->name('tablets.storeone');
Route::get('tablets/createtwo', 'TabletController@createtwo')->name('tablets.createtwo');
Route::post('tablets/storetwo', 'TabletController@storetwo')->name('tablets.storetwo');
Route::get('tablets/createthree', 'TabletController@createthree')->name('tablets.createthree');
Route::post('tablets/storethree', 'TabletController@storethree')->name('tablets.storethree');
Route::get('tablets/createfour', 'TabletController@createfour')->name('tablets.createfour');
Route::post('tablets/storefour', 'TabletController@storefour')->name('tablets.storefour');
Route::get('tablets/createfive', 'TabletController@createfive')->name('tablets.createfive');
Route::post('tablets/storefive', 'TabletController@storefive')->name('tablets.storefive');
Route::get('tablets/createsix', 'TabletController@createsix')->name('tablets.createsix');
Route::post('tablets/storesix', 'TabletController@storesix')->name('tablets.storesix');
Route::delete('tablets/{tablet}', 'TabletController@destroy')->name('tablets.destroy');
Route::get('tablets/{tablet}/edit', 'TabletController@edit')->name('tablets.edit');
Route::put('tablets/{tablet}', 'TabletController@update')->name('tablets.update');
Route::delete('tablets/{tablet}', 'TabletController@destroy')->name('tablets.destroy');
Route::get('tablets/{tablet}', 'TabletController@show')->name('tablets.show');


//laptop
Route::get('/laptops', 'LaptopController@index')->name('laptops.index');
//Route::get('/desktops/create', 'DesktopController@create')->name('desktops.create');
//Route::post('/desktops', 'DesktopController@store')->name('desktops.store');

Route::get('laptops/createone', 'LaptopController@createone')->name('laptops.createone');
Route::post('laptops/storeone', 'LaptopController@storeone')->name('laptops.storeone');
Route::get('laptops/createtwo', 'LaptopController@createtwo')->name('laptops.createtwo');
Route::post('laptops/storetwo', 'LaptopController@storetwo')->name('laptops.storetwo');
Route::get('laptops/createthree', 'LaptopController@createthree')->name('laptops.createthree');
Route::post('laptops/storethree', 'LaptopController@storethree')->name('laptops.storethree');
Route::get('laptops/createfour', 'LaptopController@createfour')->name('laptops.createfour');
Route::post('laptops/storefour', 'LaptopController@storefour')->name('laptops.storefour');
Route::get('laptops/createfive', 'LaptopController@createfive')->name('laptops.createfive');
Route::post('laptops/storefive', 'LaptopController@storefive')->name('laptops.storefive');
Route::get('laptops/createsix', 'LaptopController@createsix')->name('laptops.createsix');
Route::post('laptops/storesix', 'LaptopController@storesix')->name('laptops.storesix');
Route::delete('laptops/{laptop}', 'LaptopController@destroy')->name('laptops.destroy');
Route::get('laptops/{laptop}/edit', 'LaptopController@edit')->name('laptops.edit');
Route::put('laptops/{laptop}', 'LaptopController@update')->name('laptops.update');
Route::delete('laptops/{laptop}', 'LaptopController@destroy')->name('laptops.destroy');
Route::get('laptops/{laptop}', 'LaptopController@show')->name('laptops.show');



 //printer
 Route::get('/printers', 'PrinterController@index')->name('printers.index');
 //Route::get('/desktops/create', 'DesktopController@create')->name('desktops.create');
 //Route::post('/desktops', 'DesktopController@store')->name('desktops.store');
 
 Route::get('printers/createone', 'PrinterController@createone')->name('printers.createone');
 Route::post('printers/storeone', 'PrinterController@storeone')->name('printers.storeone');
 Route::get('printers/createtwo', 'PrinterController@createtwo')->name('printers.createtwo');
 Route::post('printers/storetwo', 'PrinterController@storetwo')->name('printers.storetwo');
 Route::get('printers/createthree', 'PrinterController@createthree')->name('printers.createthree');
 Route::post('printers/storethree', 'PrinterController@storethree')->name('printers.storethree');
 Route::get('printers/createfour', 'PrinterController@createfour')->name('printers.createfour');
 Route::post('printers/storefour', 'PrinterController@storefour')->name('printers.storefour');
 Route::get('printers/createfive', 'PrinterController@createfive')->name('printers.createfive');
 Route::post('printers/storefive', 'PrinterController@storefive')->name('printers.storefive');
 Route::get('printers/createsix', 'PrinterController@createsix')->name('printers.createsix');
 Route::post('printers/storesix', 'PrinterController@storesix')->name('printers.storesix');
 Route::delete('printers/{printer}', 'PrinterController@destroy')->name('printers.destroy');
 Route::get('printers/{printer}/edit', 'PrinterController@edit')->name('printers.edit');
 Route::put('printers/{printer}', 'PrinterController@update')->name('printers.update');
 Route::delete('printers/{printer}', 'PrinterController@destroy')->name('printers.destroy');
 Route::get('printers/{printer}', 'PrinterController@show')->name('printers.show');
 


  //tvsharp
Route::get('/tvsharps', 'TvsharpController@index')->name('tvsharps.index');
//Route::get('/imageviewers/create', 'ImageviewerController@create')->name('imageviewers.create');
//Route::post('/imageviewers', 'ImageviewerController@store')->name('imageviewers.store');

Route::get('tvsharps/createone', 'TvsharpController@createone')->name('tvsharps.createone');
Route::post('tvsharps/storeone', 'TvsharpController@storeone')->name('tvsharps.storeone');
Route::get('tvsharps/createtwo', 'TvsharpController@createtwo')->name('tvsharps.createtwo');
Route::post('tvsharps/storetwo', 'TvsharpController@storetwo')->name('tvsharps.storetwo');
Route::get('tvsharps/createthree', 'TvsharpController@createthree')->name('tvsharps.createthree');
Route::post('tvsharps/storethree', 'TvsharpController@storethree')->name('tvsharps.storethree');
Route::get('tvsharps/createfour', 'TvsharpController@createfour')->name('tvsharps.createfour');
Route::post('tvsharps/storefour', 'TvsharpController@storefour')->name('tvsharps.storefour');
Route::get('tvsharps/createfive', 'TvsharpController@createfive')->name('tvsharps.createfive');
Route::post('tvsharps/storefive', 'TvsharpController@storefive')->name('tvsharps.storefive');
Route::get('tvsharps/createsix', 'TvsharpController@createsix')->name('tvsharps.createsix');
Route::post('tvsharps/storesix', 'TvsharpController@storesix')->name('tvsharps.storesix');
Route::delete('tvsharps/{tvsharp}', 'TvsharpController@destroy')->name('tvsharps.destroy');
Route::get('tvsharps/{tvsharp}/edit', 'TvsharpController@edit')->name('tvsharps.edit');
Route::put('tvsharps/{tvsharp}', 'TvsharpController@update')->name('tvsharps.update');
Route::delete('tvsharps/{tvsharp}', 'TvsharpController@destroy')->name('tvsharps.destroy');
Route::get('tvsharps/{tvsharp}', 'TvsharpController@show')->name('tvsharps.show');



 //mpos
 Route::get('/mposs', 'MposController@index')->name('mposs.index');
 //Route::get('/imageviewers/create', 'ImageviewerController@create')->name('imageviewers.create');
 //Route::post('/imageviewers', 'ImageviewerController@store')->name('imageviewers.store');
 
 Route::get('mposs/createone', 'MposController@createone')->name('mposs.createone');
 Route::post('mposs/storeone', 'MposController@storeone')->name('mposs.storeone');
 Route::get('mposs/createtwo', 'MposController@createtwo')->name('mposs.createtwo');
 Route::post('mposs/storetwo', 'MposController@storetwo')->name('mposs.storetwo');
 Route::get('mposs/createthree', 'MposController@createthree')->name('mposs.createthree');
 Route::post('mposs/storethree', 'MposController@storethree')->name('mposs.storethree');
 Route::get('mposs/createfour', 'MposController@createfour')->name('mposs.createfour');
 Route::post('mposs/storefour', 'MposController@storefour')->name('mposs.storefour');
 Route::get('mposs/createfive', 'MposController@createfive')->name('mposs.createfive');
 Route::post('mposs/storefive', 'MposController@storefive')->name('mposs.storefive');
 Route::get('mposs/createsix', 'MposController@createsix')->name('mposs.createsix');
 Route::post('mposs/storesix', 'MposController@storesix')->name('mposs.storesix');
 Route::delete('mposs/{mpos}', 'MposController@destroy')->name('mposs.destroy');
 Route::get('mposs/{mpos}/edit', 'MposController@edit')->name('mposs.edit');
 Route::put('mposs/{mpos}', 'MposController@update')->name('mposs.update');
 Route::delete('mposs/{mpos}', 'MposController@destroy')->name('mposs.destroy');
 Route::get('mposs/{mpos}', 'MposController@show')->name('mposs.show');
 

