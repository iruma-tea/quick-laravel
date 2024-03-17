<?php

use Illuminate\Support\Facades\Route;
// use \App\Http\Controllers\HelloController;

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

// helloアクションの定義
// Route::get('/hello', '\App\Http\Controllers\HelloController@index');
// 配列構文
// Route::get('/hello', [HelloController::class, 'index']);
// @see RouteServiceProvider.php
Route::get('/hello', 'HelloController@index');
