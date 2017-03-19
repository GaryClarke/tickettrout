<?php

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

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function() {

    Route::get('artists', 'ArtistController@index');

    Route::get('artists/{artist}', 'ArtistController@show');

    Route::put('wishlist/{artist}', 'WishlistController@add');

    Route::delete('wishlist/{artist}', 'WishlistController@remove');

    Route::get('fetchartists', 'ArtistController@fetchArtists');

    Route::get('profile', 'ProfileController@show');

    Route::get('offers', 'OfferController@show');
});

// Example comment


