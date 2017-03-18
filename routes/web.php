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

/**
 * Homepage Route
 */
Route::get('/', function () {
    return view('home');
});

/**
 * Search Route
 */
Route::get('/search', "SearchController@search");
