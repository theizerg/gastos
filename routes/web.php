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

/*Route::get('/', function () {
    return view('test');
});
*/

Auth::routes();

Route::middleware(['auth',])->group(function () {

  Route::get('/', 'HomeController@index')->name('home');
  Route::get('user-autocomplete', 'UserController@autocomplete');

  Route::resource('user', 'UserController');
  Route::resource('logins', 'LoginController');
  Route::resource('/permission', 'PermissionController');
  Route::resource('/roles', 'RolesController');
  Route::resource('/empresa', 'EmpresaController');
});