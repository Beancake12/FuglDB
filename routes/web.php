<?php

use App\Http\Controllers\BirdController;
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

Route::middleware(['web'])->group(function () {
    Route::get('/', 'IndexController@index');

    // Bird views
    Route::get('bird', 'BirdController@create')->name('bird.create');
    Route::get('bird/list', 'BirdController@list')->name('bird.list');

    // Bird functions
    Route::get('birds', 'BirdController@all')->name('bird.all');
    Route::get('bird/get/{id}', 'BirdController@showBird')->name('bird.show');
    Route::post('bird/create', 'BirdController@store')->name('bird.store');
    Route::get('bird/delete/{id}', 'BirdController@delete')->name('bird.delete');

    // Location views
    Route::get('location', 'LocationController@create')->name('location.create');
    Route::get('location/list', 'LocationController@list')->name('location.list');

    // Location functions
    Route::get('locations', 'LocationController@all')->name('location.all');
    Route::get('location/get/{id}', 'LocationController@get')->name('location.get');
    Route::post('location/create', 'LocationController@store')->name('location.store');
    Route::post('location/delete', 'LocationController@delete')->name('location.delete');

    // Contacts
    Route::get('contacts', 'ContactController@all');
    Route::get('contact/get/{id}', 'ContactController@get');
    Route::post('contact/create', 'ContactController@store');
    Route::post('contact/delete', 'ContactController@delete');
});