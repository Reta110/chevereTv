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
    return view('channels.ntn24');
});

Route::get('/capitolioTv', function () {
    return view('channels.capitolioTv');
});

Route::get('/ntn24', function () {
    return view('channels.ntn24');
});

Route::get('/globovision', function () {
    return view('channels.globovision');
});

Route::get('/teleSur', function () {
    return view('channels.teleSur');
});

Route::get('/cnnEspanol', function () {
    return view('channels.cnnEspanol');
});

Route::get('/elVenezolanoTv', function () {
    return view('channels.elVenezolanoTv');
});

Route::get('/radioCaracasRadio', function () {
    return view('channels.radioCaracasRadio');
});