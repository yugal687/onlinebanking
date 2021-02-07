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
    return view('pages.dashboard');
});

Route::get('/balance-deposit', function () {
    return view('pages.balance-deposit');
});

Route::get('/balance-withdraw', function () {
    return view('pages.balance-withdraw');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
