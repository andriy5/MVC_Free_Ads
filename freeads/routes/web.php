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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home', ['login' => "andriybg"]);
// });

// Route::get('/index', function () {
//     return view('index');

// });



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');

Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

Route::get('/search/ad', 'AdsController@search')->name('ad.search');

Route::get('/ad', 'AdsController@index')->name('ad.index');

Route::get('/ad/all', 'AdsController@all')->name('ad.all');

Route::get('/ad/create', 'AdsController@create')->name('ad.create');

Route::get('/ad/{ad}', 'AdsController@show')->name('ad.show');

Route::patch('/ad/{ad}', 'AdsController@update')->name('ad.update');

Route::get('/ad/{ad}/edit', 'AdsController@edit')->name('ad.edit');

Route::post('/ad/store', 'AdsController@store')->name('ad.store');

Route::delete('/ad/{ad}', 'AdsController@destroy')->name('ad.destroy');
