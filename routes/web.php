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


    //user
    Route::get('/users', 'UserController@index')->name('users.index');
    Route::get('/users/create', 'UserController@create')->name('users.create');
    Route::post('/users', 'UserController@store')->name('users.store');
    Route::get('users/{user}', 'UserController@show')->name('users.show');
    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit');
    Route::put('users/{user}', 'UserController@update')->name('users.update');
    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');
    //Route::get('users/myAcc', 'UserController@myAcc')->name('users.myAcc');
    Route::get('/myAcc', 'UserController@myAcc');

    //permission
    Route::get('/permissions', 'permissionController@index')->name('permissions.index');
    Route::get('/permissions/create', 'permissionController@create')->name('permissions.create');
    Route::post('/permissions', 'permissionController@store')->name('permissions.store');
    Route::get('permissions/{permission}', 'permissionController@show')->name('permissions.show');
    Route::get('permissions/{permission}/edit', 'permissionController@edit')->name('permissions.edit');
    Route::put('permissions/{permission}', 'permissionController@update')->name('permissions.update');
    Route::delete('permissions/{permission}', 'permissionController@destroy')->name('permissions.destroy');
    

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
Route::get('desktops/create', 'DesktopController@create')->name('desktops.create')->middleware('auth');

Route::get('desktops/{desktop}/edit', 'DesktopController@edit')->name('desktops.edit');
Route::put('desktops/{desktop}', 'DesktopController@update')->name('desktops.update');
Route::delete('desktops/{desktop}', 'DesktopController@destroy')->name('desktops.destroy');
Route::get('desktops/{desktop}', 'DesktopController@show')->name('desktops.show');
//Route::get('desktops/{desktop}', 'DesktopController@show')->name('desktops.show1');
//Route::get('desktops/showStati', 'DesktopController@showStati')->name('desktops.showStati');
//Route::get('desktops/showStati', 'desktopController@showStati')->name('desktops.statics');
//Route::resource('desktops', 'DesktopController');
Route::get('/showStati', 'DesktopController@showStati');
Route::get('desktops/viewFolder/{id}', 'DesktopController@viewFolder')->name('desktops.viewFolder');
//Route::get('jobs/showStati', 'JobController@showStati')->name('jobs.showStati')

// OS Desktops
Route::get('/osdesktops', 'OsdesktopController@index')->name('osdesktops.index');
Route::get('/osdesktops/create', 'OsdesktopController@create')->name('osdesktops.create');
Route::post('/osdesktops', 'OsdesktopController@store')->name('osdesktops.store');
Route::get('osdesktops/{osdesktop}/edit', 'OsdesktopController@edit')->name('osdesktops.edit');
Route::put('osdesktops/{osdesktop}', 'OsdesktopController@update')->name('osdesktops.update');
Route::delete('osdesktops/{osdesktop}', 'OsdesktopController@destroy')->name('osdesktops.destroy');
Route::get('osdesktops/{osdesktop}', 'OsdesktopController@show')->name('osdesktops.show');
//Route::get('osdesktops/{osdesktop}', 'OsdesktopController@show')->name('osdesktops.show1');
//Route::get('osdesktops/showStati', 'OsdesktopController@showStati')->name('osdesktops.showStati');
//Route::resource('osdesktops', 'OsdesktopController');
Route::get('osdesktops/viewFolder/{id}', 'OsdesktopController@viewFolder')->name('osdesktops.viewFolder');



Route::get('osdesktops/{osdesktop}/edit', 'OsdesktopController@edit')->name('osdesktops.edit');
Route::put('osdesktops/{osdesktop}', 'OsdesktopController@update')->name('osdesktops.update');
Route::delete('osdesktops/{osdesktop}', 'OsdesktopController@destroy')->name('osdesktops.destroy');
Route::get('osdesktops/{osdesktop}', 'OsdesktopController@show')->name('osdesktops.show');

//Image Viewer
Route::get('/imageviewers', 'imageviewerController@index')->name('imageviewers.index');
//Route::get('/desktops/create', 'DesktopController@create')->name('desktops.create');
//Route::post('/desktops', 'DesktopController@store')->name('desktops.store');

Route::get('imageviewers/create', 'imageviewerController@create')->name('imageviewers.create');
Route::post('imageviewers/store', 'imageviewerController@store')->name('imageviewers.store');

Route::get('imageviewers/{imageviewer}/edit', 'imageviewerController@edit')->name('imageviewers.edit');
Route::put('imageviewers/{imageviewer}', 'imageviewerController@update')->name('imageviewers.update');
Route::delete('imageviewers/{imageviewer}', 'imageviewerController@destroy')->name('imageviewers.destroy');
Route::get('imageviewers/{imageviewer}', 'imageviewerController@show')->name('imageviewers.show');
Route::get('imageviewers/viewFolder/{id}', 'imageviewerController@viewFolder')->name('imageviewers.viewFolder');

//Aiodesktop
Route::get('/aiodesktops', 'AiodesktopController@index')->name('aiodesktops.index');
//Route::get('/desktops/create', 'DesktopController@create')->name('desktops.create');
//Route::post('/desktops', 'DesktopController@store')->name('desktops.store');

Route::get('aiodesktops/create', 'AiodesktopController@create')->name('aiodesktops.create');
Route::post('aiodesktops/store', 'AiodesktopController@store')->name('aiodesktops.store');
Route::delete('aiodesktops/{aiodesktop}', 'AiodesktopController@destroy')->name('aiodesktops.destroy');
Route::get('aiodesktops/{aiodesktop}/edit', 'AiodesktopController@edit')->name('aiodesktops.edit');
Route::put('aiodesktops/{aiodesktop}', 'AiodesktopController@update')->name('aiodesktops.update');
Route::delete('aiodesktops/{aiodesktop}', 'AiodesktopController@destroy')->name('aiodesktops.destroy');
Route::get('aiodesktops/{aiodesktop}', 'AiodesktopController@show')->name('aiodesktops.show');
Route::get('aiodesktops/viewFolder/{id}', 'AiodesktopController@viewFolder')->name('aiodesktops.viewFolder');




//Tablet
Route::get('/tablets', 'TabletController@index')->name('tablets.index');
//Route::get('/desktops/create', 'DesktopController@create')->name('desktops.create');
//Route::post('/desktops', 'DesktopController@store')->name('desktops.store');

Route::get('tablets/create', 'TabletController@create')->name('tablets.create');
Route::post('tablets/store', 'TabletController@store')->name('tablets.store');
Route::delete('tablets/{tablet}', 'TabletController@destroy')->name('tablets.destroy');
Route::get('tablets/{tablet}/edit', 'TabletController@edit')->name('tablets.edit');
Route::put('tablets/{tablet}', 'TabletController@update')->name('tablets.update');
Route::delete('tablets/{tablet}', 'TabletController@destroy')->name('tablets.destroy');
Route::get('tablets/{tablet}', 'TabletController@show')->name('tablets.show');
Route::get('tablets/viewFolder/{id}', 'TabletController@viewFolder')->name('tablets.viewFolder');


//laptop
Route::get('/laptops', 'LaptopController@index')->name('laptops.index');
//Route::get('/desktops/create', 'DesktopController@create')->name('desktops.create');
//Route::post('/desktops', 'DesktopController@store')->name('desktops.store');

Route::get('laptops/create', 'LaptopController@create')->name('laptops.create');
Route::post('laptops/store', 'LaptopController@store')->name('laptops.store');
Route::delete('laptops/{laptop}', 'LaptopController@destroy')->name('laptops.destroy');
Route::get('laptops/{laptop}/edit', 'LaptopController@edit')->name('laptops.edit');
Route::put('laptops/{laptop}', 'LaptopController@update')->name('laptops.update');
Route::delete('laptops/{laptop}', 'LaptopController@destroy')->name('laptops.destroy');
Route::get('laptops/{laptop}', 'LaptopController@show')->name('laptops.show');
Route::get('laptops/viewFolder/{id}', 'LaptopController@viewFolder')->name('laptops.viewFolder');



 //printer
 Route::get('/printers', 'PrinterController@index')->name('printers.index');
 //Route::get('/desktops/create', 'DesktopController@create')->name('desktops.create');
 //Route::post('/desktops', 'DesktopController@store')->name('desktops.store');
 
 Route::get('printers/create', 'PrinterController@create')->name('printers.create');
 Route::post('printers/store', 'PrinterController@store')->name('printers.store');
 Route::get('printers/createtwo', 'PrinterController@createtwo')->name('printers.createtwo');
 Route::delete('printers/{printer}', 'PrinterController@destroy')->name('printers.destroy');
 Route::get('printers/{printer}/edit', 'PrinterController@edit')->name('printers.edit');
 Route::put('printers/{printer}', 'PrinterController@update')->name('printers.update');
 Route::delete('printers/{printer}', 'PrinterController@destroy')->name('printers.destroy');
 Route::get('printers/{printer}', 'PrinterController@show')->name('printers.show');
 Route::get('printers/viewFolder/{id}', 'PrinterController@viewFolder')->name('printers.viewFolder');




  //tvsharp
Route::get('/tvsharps', 'TvsharpController@index')->name('tvsharps.index');
//Route::get('/imageviewers/create', 'imageviewerController@create')->name('imageviewers.create');
//Route::post('/imageviewers', 'imageviewerController@store')->name('imageviewers.store');

Route::get('tvsharps/create', 'TvsharpController@create')->name('tvsharps.create');
Route::post('tvsharps/store', 'TvsharpController@store')->name('tvsharps.store');
Route::delete('tvsharps/{tvsharp}', 'TvsharpController@destroy')->name('tvsharps.destroy');
Route::get('tvsharps/{tvsharp}/edit', 'TvsharpController@edit')->name('tvsharps.edit');
Route::put('tvsharps/{tvsharp}', 'TvsharpController@update')->name('tvsharps.update');
Route::delete('tvsharps/{tvsharp}', 'TvsharpController@destroy')->name('tvsharps.destroy');
Route::get('tvsharps/{tvsharp}', 'TvsharpController@show')->name('tvsharps.show');
Route::get('tvsharps/viewFolder/{id}', 'TvsharpController@viewFolder')->name('tvsharps.viewFolder');



 //mpos
 Route::get('/mposs', 'MposController@index')->name('mposs.index');
 //Route::get('/imageviewers/create', 'imageviewerController@create')->name('imageviewers.create');
 //Route::post('/imageviewers', 'imageviewerController@store')->name('imageviewers.store');
 
            
 Route::get('mposs/create', 'mposController@create')->name('mposs.create');
 Route::post('mposs/store', 'mposController@store')->name('mposs.store');
 Route::delete('mposs/{mpos}', 'mposController@destroy')->name('mposs.destroy');
 Route::get('mposs/{mpos}/edit', 'mposController@edit')->name('mposs.edit');
 Route::put('mposs/{mpos}', 'mposController@update')->name('mposs.update');
 Route::delete('mposs/{mpos}', 'mposController@destroy')->name('mposs.destroy');
 Route::get('mposs/{mpos}', 'mposController@show')->name('mposs.show');
 Route::get('mposs/viewFolder/{id}', 'mposController@viewFolder')->name('mposs.viewFolder');
 
 //encoremed
 Route::get('/encoremeds', 'encoremedController@index')->name('encoremeds.index');
 Route::get('encoremeds/create', 'encoremedController@create')->name('encoremeds.create');
 Route::post('encoremeds/store', 'encoremedController@store')->name('encoremeds.store');
 Route::delete('encoremeds/{encoremed}', 'encoremedController@destroy')->name('encoremeds.destroy');
 Route::get('encoremeds/{encoremed}/edit', 'encoremedController@edit')->name('encoremeds.edit');
 Route::put('encoremeds/{encoremed}', 'encoremedController@update')->name('encoremeds.update');
 Route::delete('encoremeds/{encoremed}', 'encoremedController@destroy')->name('encoremeds.destroy');
 Route::get('encoremeds/{encoremed}', 'encoremedController@show')->name('encoremeds.show');
 Route::get('encoremeds/viewFolder/{id}', 'encoremedController@viewFolder')->name('encoremeds.viewFolder');
 
//cardreader
Route::get('/cardreaders', 'cardreaderController@index')->name('cardreaders.index');
Route::get('cardreaders/create', 'cardreaderController@create')->name('cardreaders.create');
Route::post('cardreaders/store', 'cardreaderController@store')->name('cardreaders.store');
Route::delete('cardreaders/{cardreader}', 'cardreaderController@destroy')->name('cardreaders.destroy');
Route::get('cardreaders/{cardreader}/edit', 'cardreaderController@edit')->name('cardreaders.edit');
Route::put('cardreaders/{cardreader}', 'cardreaderController@update')->name('cardreaders.update');
Route::delete('cardreaders/{cardreader}', 'cardreaderController@destroy')->name('cardreaders.destroy');
Route::get('cardreaders/{cardreader}', 'cardreaderController@show')->name('cardreaders.show');
Route::get('cardreaders/viewFolder/{id}', 'cardreaderController@viewFolder')->name('cardreaders.viewFolder');



 //biometric
Route::get('/biometrics', 'biometricController@index')->name('biometrics.index');
 Route::get('biometrics/create', 'biometricController@create')->name('biometrics.create');
Route::post('biometrics/store', 'biometricController@store')->name('biometrics.store');
Route::delete('biometrics/{biometric}', 'biometricController@destroy')->name('biometrics.destroy');
Route::get('biometrics/{biometric}/edit', 'biometricController@edit')->name('biometrics.edit');
Route::put('biometrics/{biometric}', 'biometricController@update')->name('biometrics.update');
Route::delete('biometrics/{biometric}', 'biometricController@destroy')->name('biometrics.destroy');
Route::get('biometrics/{biometric}', 'biometricController@show')->name('biometrics.show');
Route::get('biometrics/viewFolder/{id}', 'biometricController@viewFolder')->name('biometrics.viewFolder');
 

//power
Route::get('/powers', 'powerController@index')->name('powers.index');
 Route::get('powers/create', 'powerController@create')->name('powers.create');
 Route::post('powers/store', 'powerController@store')->name('powers.store');
 Route::delete('powers/{power}', 'powerController@destroy')->name('powers.destroy');
 Route::get('powers/{power}/edit', 'powerController@edit')->name('powers.edit');
 Route::put('powers/{power}', 'powerController@update')->name('powers.update');
 Route::delete('powers/{power}', 'powerController@destroy')->name('powers.destroy');
 Route::get('powers/{power}', 'powerController@show')->name('powers.show');
 Route::get('powers/viewFolder/{id}', 'powerController@viewFolder')->name('powers.viewFolder');


       //vendor
Route::get('/vendors', 'vendorController@index')->name('vendors.index');
Route::get('vendors/create', 'vendorController@create')->name('vendors.create');
Route::post('vendors/store', 'vendorController@store')->name('vendors.store');
Route::delete('vendors/{vendor}', 'vendorController@destroy')->name('vendors.destroy');
Route::get('vendors/{vendor}/edit', 'vendorController@edit')->name('vendors.edit');
Route::put('vendors/{vendor}', 'vendorController@update')->name('vendors.update');
Route::delete('vendors/{vendor}', 'vendorController@destroy')->name('vendors.destroy');
Route::get('vendors/{vendor}', 'vendorController@show')->name('vendors.show');
Route::get('vendors/viewFolder/{id}', 'vendorController@viewFolder')->name('vendors.viewFolder');


//Route::get('vendors/myDevice/{id}', 'VendorController@myDevice')->name('vendors.myDevice');
Route::get('/myDevice/{vendor}', 'VendorController@myDevice');
//Route::get('vendors/{vendor}', 'vendorController@myDevice')->name('vendors.myDevice');

//account
Route::get('/accounts', 'accountController@index')->name('accounts.index');
 Route::get('accounts/create', 'accountController@create')->name('accounts.create');
 Route::post('accounts/store', 'accountController@store')->name('accounts.store');
 Route::delete('accounts/{account}', 'accountController@destroy')->name('accounts.destroy');
 Route::get('accounts/{account}/edit', 'accountController@edit')->name('accounts.edit');
 Route::put('accounts/{account}', 'accountController@update')->name('accounts.update');
 Route::delete('accounts/{account}', 'accountController@destroy')->name('accounts.destroy');
 Route::get('accounts/{account}', 'accountController@show')->name('accounts.show');
 //Route::get('accounts/viewFolder/{id}', 'accountController@viewFolder')->name('accounts.viewFolder');
 Route::get('accounts/myAcc', 'AccountController@myAcc')->name('accounts.myAcc');
 Route::get('/myAcc', 'AccountController@myAcc');
 Route::get('/theDevice/{department}', 'DepartmentController@theDevice');

 //export
 Route::get('/exportDesktop', 'DesktopController@exportDesktop')->name('desktops.exportDesktop');
 Route::get('/exportAioDesktop', 'AiodesktopController@exportAioDesktop')->name('aiodesktops.exportAioDesktop');
 Route::get('/exportBiometric', 'BiometricController@exportBiometric')->name('biometrics.exportBiometric');
 Route::get('/exportCardreader', 'cardreaderController@exportCardreader')->name('cardreaders.exportCardreader');
 Route::get('/exportEncoremed', 'EncoremedController@exportEncoremed')->name('encoremeds.exportEncoremed');
 Route::get('/exportImageviewer', 'imageviewerController@exportImageviewer')->name('imageviewers.exportImageviewer');
 Route::get('/exportLaptop', 'LaptopController@exportLaptop')->name('laptops.exportLaptop');
 Route::get('/exportMpos', 'MposController@exportMpos')->name('mposs.exportMpos');
 Route::get('/exportOsdesktop', 'OsdesktopController@exportOsdesktop')->name('osdesktops.exportOsdesktop');

 Route::get('/exportPower', 'PowerController@exportPower')->name('powers.exportPower');
 Route::get('/exportPrinter', 'PrinterController@exportPrinter')->name('printers.exportPrinter');
 Route::get('/exportTablet', 'TabletController@exportTablet')->name('tablets.exportTablet');
 Route::get('/exportTvsharp', 'TvsharpController@exportTvsharp')->name('tvsharps.exportTvsharp');

//import
Route::post('/importDesktop', 'DesktopController@importDesktop')->name('importDesktop');
Route::post('/importOsdesktop', 'OsdesktopController@importOsdesktop')->name('importOsdesktop');
Route::post('/importImageviewer', 'imageviewerController@importImageviewer')->name('importImageviewer');
Route::post('/importAiodesktop', 'AiodesktopController@importAiodesktop')->name('importAiodesktop');
Route::post('/importTablet', 'TabletController@importTablet')->name('importTablet');
Route::post('/importLaptop', 'LaptopController@importLaptop')->name('importLaptop');
Route::post('/importPrinter', 'PrinterController@importPrinter')->name('importPrinter');
Route::post('/importTvsharp', 'TvsharpController@importTvsharp')->name('importTvsharp');
Route::post('/importCardreader', 'cardreaderController@importCardreader')->name('importCardreader');
Route::post('/importBiometric', 'BiometricController@importBiometric')->name('importBiometric');
Route::post('/importEncoremed', 'EncoremedController@importEncoremed')->name('importEncoremed');
Route::post('/importPower', 'PowerController@importPower')->name('importPower');
Route::post('/importMpos', 'MposController@importMpos')->name('importMpos');

     //role
Route::get('/roles', 'roleController@index')->name('roles.index');
Route::get('/roles/create', 'roleController@create')->name('roles.create');
Route::post('/roles', 'roleController@store')->name('roles.store');
Route::get('roles/{role}', 'roleController@show')->name('roles.show');
Route::get('roles/{role}/edit', 'roleController@edit')->name('roles.edit');
Route::put('roles/{role}', 'roleController@update')->name('roles.update');
Route::delete('roles/{role}', 'roleController@destroy')->name('roles.destroy');

//mydevice
Route::get('/myDesktop', 'DesktopController@myDesktop');
Route::get('/myImageviewer', 'imageviewerController@myImageviewer');
Route::get('/myAiodesktop', 'AiodesktopController@myAiodesktop');
Route::get('/myTablet', 'TabletController@myTablet');
Route::get('/myLaptop', 'LaptopController@myLaptop');
Route::get('/myPrinter', 'PrinterController@myPrinter');
Route::get('/myTvsharp', 'TvsharpController@myTvsharp');
Route::get('/myCardreader', 'cardreaderController@myCardreader');
Route::get('/myBiometric', 'BiometricController@myBiometric');
Route::get('/myEncoremed', 'EncoremedController@myEncoremed');
Route::get('/myPower', 'PowerController@myPower');
Route::get('/myMpos', 'MposController@myMpos');


