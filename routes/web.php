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
Route::get('/hello/view', 'HelloController@view');
Route::get('/hello/list', 'HelloController@list');

// view
Route::get('/view/escape', 'ViewController@escape');
Route::get('/view/comment', 'ViewController@comment');
Route::get('/view/if', 'ViewController@if');
Route::get('/view/unless', 'ViewController@unless');
Route::get('/view/isset', 'ViewController@isset');
Route::get('/view/switch', 'ViewController@switch');
Route::get('/view/while', 'ViewController@while');
Route::get('/view/for', 'ViewController@for');
Route::get('/view/foreach_assoc', 'ViewController@foreach_assoc');
Route::get('/view/foreach_loop', 'ViewController@foreach_loop');
Route::get('/view/forelse', 'ViewController@forelse');
