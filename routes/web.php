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

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('login',              'AuthController@index');
Route::post('post-login',        'AuthController@postLogin');
Route::get('registration',       'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegitration');
Route::get('dashboard',          'AuthController@dashboard');
Route::get('logout',             'AuthController@logout');
Route::get('work',               'WerkController@showwork');

Route::resource('werken', 'WerkController');
Route::get('/work/{project}', 'WerkController@showProject');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
