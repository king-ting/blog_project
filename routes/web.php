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

Route::get('/', 'PostsController@index');


Auth::routes();

Route::get('/create_post', 'PostsController@create');
Route::post('/post', 'PostsController@store');
Route::get('/all_post', 'PostsController@show_all');
Route::get('/posts/{post}', 'PostsController@show_post');
Route::get('/posts/{id}/edit', 'PostsController@edit');
Route::post('/post/{id}/update', 'PostsController@update');
Route::get('/posts/{post_id}/delete', 
	[ 'uses' => 'PostsController@destroy', 'as' => 'post/delete' ]);

Route::post('/posts/{post}/comments','CommentsController@store');




Route::get('/home', 'HomeController@index');
Route::get('/home', 'HomeController@user_post')->name('home');
Route::post('/home', 'UsersController@update_avatar');
//Route::post('/post/{id}/edit', 'PostsController@update_banner');
