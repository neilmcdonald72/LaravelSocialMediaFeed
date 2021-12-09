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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/users', 'SMFeedController@users');

Route::get('/admin/users/create', 'SMFeedController@create');
Route::post('/admin/users', 'SMFeedController@store');
Route::get('/admin/users/{userId?}', 'SMFeedController@show');
Route::delete('/admin/users/{userId?}', 'SMFeedController@destroy');
Route::get('/admin/users/{userId?}/edit', 'SMFeedController@edit');
Route::patch('/admin/users/{userId?}', 'SMFeedController@update');
Route::get('/posts/create', 'SMFeedController@createpost');
Route::post('/posts/', 'SMFeedController@storepost');
Route::get('/posts/', 'SMFeedController@showposts');
Route::get('/posts/{postId?}/edit', 'SMFeedController@editpost');
Route::patch('/posts/{postId?}', 'SMFeedController@updatepost');
Route::delete('/posts/{postId?}', 'SMFeedController@destroypost');

