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

Route::get('/', 'HomeController@index')->name('home');
Route::get('register', function(){ return View::make('register')->with('pTitle', "Register"); })->name('register');
Route::get('login', function(){ return View::make('login')->with('pTitle', "Login"); })->name('login');
Route::get('faq', function(){ return View::make('faq')->with('pTitle', "FAQ"); })->name('faq');

//----------------- User routes
Route::resource('users', 'UsersController', array('only' => array('show')));
Route::post('login', 'UsersController@login');
Route::post('make', 'UsersController@register');
Route::get('logout', 'UsersController@logout')->name('logout');
Route::post('resetPassword/{id}','UsersController@resetPassword');

//----------------- Auth routes
Route::group(array('before' => 'auth'), function()
{
	Route::get('hud', 'HomeController@index')->name('hud');
	Route::get('search', 'HomeController@search')->name('search');
	Route::get('profile', 'UsersController@index')->name('profile');
	Route::get('clients', 'ClientsController@index')->name('clients');
	Route::delete('clients/{id}', 'ClientsController@destroy');
    Route::resource('projects', 'ProjectsController', array('only' => array('show')));
});
