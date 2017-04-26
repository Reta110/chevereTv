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

Auth::routes();

Route::get('/', function () {
    return redirect(route('channel.show', ['1', 'ntn-24']));
});

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {

    Route::resource('/channels', 'ChannelsController');

});

Route::get('/channels/{id}/{slug}', 'ChannelsController@show')->name('channel.show');


