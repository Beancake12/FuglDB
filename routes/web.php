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

Route::get('/', 'IndexController@index');

// Birds
Route::get('bird', 'BirdController@index')->name('bird');

Route::get('birds', 'BirdController@all');
Route::get('bird/get/{id}', 'BirdController@get');
Route::post('bird/create', 'BirdController@create');
Route::post('bird/delete', 'BirdController@delete');

// Locations
Route::get('locations', 'LocationController@all');
Route::get('location/get/{id}', 'LocationController@get');
Route::post('location/create', 'LocationController@create');
Route::post('location/delete', 'LocationController@delete');

// Contacts
Route::get('contacts', 'ContactController@all');
Route::get('contact/get/{id}', 'ContactController@get');
Route::post('contact/create', 'ContactController@create');
Route::post('contact/delete', 'ContactController@delete');