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

/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::view('/', 'home')->name('home');
Route::view('acercade', 'about')->name('about');

Route::view('blog', 'BlogController@index')->name('blog.index');
Route::view('blog/{post:slug}', 'BlogController@show')->name('blog.show');

Route::view('contactos', 'contact')->name('contact');

