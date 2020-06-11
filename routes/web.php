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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/posts','PostController@index')->name('posts');
Route::get('/post/{post_id}','PostController@show');
Route::post('/post/update/{post_id}','PostController@update');
Route::post('/post/delete/{post_id}','PostController@delete');



Route::post('/music','MusicController@store');
Route::get('/music', 'MusicController@index')->name('music');
Route::get('/music/{song_id}','MusicController@show');
