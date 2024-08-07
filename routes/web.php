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

Route::get('/', 'App\Http\Controllers\Front\FrontenController@index');
Route::get('about', 'App\Http\Controllers\Front\FrontenController@about');
Route::get('menu', 'App\Http\Controllers\Front\FrontenController@menu');
Route::get('contact', 'App\Http\Controllers\Front\FrontenController@contact');