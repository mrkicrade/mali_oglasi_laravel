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

Route::get('/', 'AddController@index');
Route::get('/noviOglas/{user}', 'AddController@create');
Route::get('/add/{add}', 'AddController@moji');
Route::get('/mojiOglasi', 'AddController@mojiOglasi');
Route::post('/noviOglas', 'AddController@store');
Route::get('/single/{id}/{user_id}', 'AddController@show');
Route::get('/user/{id}', 'AddController@usersAdds');
Route::get('/{Klavijature}/{id}', 'AddController@klavijature');
Route::get('/add/{add}/edit', 'AddController@edit');
Route::put('/add/{add}/edit', 'AddController@update');
Route::get('/add/{add}/delete', 'AddController@destroy');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');