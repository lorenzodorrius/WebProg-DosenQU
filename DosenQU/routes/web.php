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

Route::get('/', function () {'/home_user', 'User@index'});

Route::get('/', function () {'/login', 'User@login'});

Route::get('/', function () {'/loginPost', 'User@loginPost'});

Route::get('/', function () {'/register', 'User@register'});

Route::get('/', function () {'/registerPost', 'User@registerPost'});

Route::get('/', function () {'logout', 'User@logout'});