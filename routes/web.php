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


//register
Route::get('/register','registerController@register' );
Route::post('/register','registerController@register');

//login
Route::get('/login','sessionController@login');
Route::post('/login','sessionController@login');


//logout
Route::get('/logout','sessionController@logout');


