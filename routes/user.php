<?php

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'UserController@index')->name('user.index');
Route::get('/edit', 'UserController@edit')->name('user.edit');

Route::post('/update', 'UserController@update')->name('user.update');

Route::get('/testsurvey', 'ParentTest@makeParent')->name('make.parent');
