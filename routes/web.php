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
