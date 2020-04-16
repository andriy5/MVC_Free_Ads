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

Route::get('/ad/create', 'AdsController@create')->name('ad.create');

Route::post('/ad/store', 'AdsController@store')->name('ad.store');
