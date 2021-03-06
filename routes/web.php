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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'RoleController@admin');
Route::post('/delete/{id}', 'RoleController@delete')->middleware('role');
Route::post('/save/{id}', 'RoleController@save');
Route::post('/create', 'RoleController@create');
Route::post('/image/{id}', 'RoleController@changeImage');
