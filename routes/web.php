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

Route::group(['middleware' => 'frontend', 'namespace' => 'Frontend'], function() {
    Route::get('/', 'IndexController@index')->name('home');    
});

Auth::routes(['verify' => true]);

Route::group(['middleware' => 'backend', 'namespace' => 'Backend'], function() {
    Route::get('/home', 'IndexController@index')->name('home');
});

