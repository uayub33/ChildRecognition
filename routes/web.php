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

Route::get('find_child', function () {
    return view('find_child');
});

#Route::get('find_child', 'FindChildController@index');

Route::get('my_profile', function () {
    return view('my_profile');
});

Route::get('submit_child_info', function () {
    return view('submit_child_info');
});

Route::get('search_child_by_pic', function () {
    return view('search_child_by_pic');
});

Route::get('nearest_child', function () {
    return view('nearest_child');
});

Route::get('donate', function () {
    return view('donate');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
