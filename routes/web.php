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

Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('welcome');
});

Route::post('bird/create', 'BirdController@create');
Route::get('birds', 'BirdController@all');
Route::post('location/create', 'LocationController@create');


Route::get('/home', 'HomeController@index')->name('home');
