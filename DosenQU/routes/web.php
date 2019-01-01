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

Route::get('/home_user', 'User@index');

Route::get('/login', 'User@login');

Route::get('/loginPost', 'User@loginPost');

Route::get('/register', 'User@register');

Route::get('/registerPost', 'User@registerPost');

Route::get('logout', 'User@logout');