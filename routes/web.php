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

Route::get('/', 'HomePageController@index')->name('welcome');

Route::group(['middleware' => ['auth']], function(){
  Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::prefix('processos')->group(function(){
      Route::get('/', 'ProcessesController@index')->name('processos.index');
      Route::get('/novo', 'ProcessesController@create')->name('processos.create');
      Route::get('edit/{processo}', 'ProcessesController@edit')->name('processos.show');

      Route::post('novo', 'ProcessesController@store')->name('processos.store');
      Route::post('edit/{id}', 'ProcessesController@update')->name('processos.update');
      Route::get('delete/{id}', 'ProcessesController@destroy')->name('processos.destroy');
    });

    Route::prefix('user')->group(function(){
      Route::get('/', 'UserController@index')->name('user.index');
      Route::get('/novo', 'UserController@create')->name('user.create');
      Route::get('edit/{user}', 'UserController@edit')->name('user.show');

      Route::post('novo', 'UserController@store')->name('user.store');
      Route::post('edit/{id}', 'UserController@update')->name('user.update');
      Route::get('delete/{id}', 'UserController@destroy')->name('user.destroy');
    });
  });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
