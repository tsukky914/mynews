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

// adminプレフィックス
Route::prefix('admin')->group(function () {
    Route::get('news', 'Admin/NewsController@index');
    Route::get('newpost', 'Admin/NewsController@create');
    Route::post('newpost', 'Admin/NewsController@store');
    Route::get('/photos/{photo}', 'Admin/NewsController@show');
    Route::get('news', 'Admin/NewsController@edit');
    Route::patch('news', 'Admin/NewsController@update');
    Route::patch('news/edit', 'Admin/NewsController@destroy');
});

