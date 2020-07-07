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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/artist', function () {
//     $nama = 'Abdul Aziz Khusen';
//     return view('artist_tampil', ['nama'=> $nama]);
// });

Route::get('/', 'PagesController@dashboard');

// artist
Route::get('/artist', 'ArtistController@index');
Route::get('/artist/create_artist', 'ArtistController@create');
Route::get('/artist/{artist}', 'ArtistController@show');
Route::post('/artist', 'ArtistController@store');
Route::delete('/artist/{artist}', 'ArtistController@destroy');
Route::get('/artist/{artist}/edit','ArtistController@edit');
Route::patch('/artist/{artist}', 'ArtistController@update');

// album
Route::get('/album', 'AlbumController@index');
Route::get('/album/create_album', 'AlbumController@create');
Route::get('/album/{album}', 'AlbumController@show');
Route::post('/album', 'AlbumController@store');
Route::delete('/album/{album}', 'AlbumController@destroy');
Route::get('/album/{album}/edit','AlbumController@edit');
Route::patch('/album/{album}', 'AlbumController@update');

// track
Route::get('/track', 'TrackController@index');
Route::get('/track/create_track', 'TrackController@create');
Route::get('/track/{track}', 'TrackController@show');
Route::post('/track', 'trackController@store');
Route::delete('/track/{track}', 'TrackController@destroy');
Route::get('/track/{track}/edit','TrackController@edit');
Route::patch('/track/{track}', 'TrackController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
