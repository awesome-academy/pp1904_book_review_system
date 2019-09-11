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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::resource('blogs', 'BlogController');
Route::get('blogs/category/{slug}', 'BlogController@category');
Route::get('books/category/{slug}', 'BookController@category');
Route::resource('books', 'BookController');
Route::post('/comment', 'CommentController@newComment')->middleware('auth');
Route::post('/comment/edit', 'CommentController@editComment');
Route::post('/comment/delete', 'CommentController@deleteComment');
Route::post('/comment/report', 'CommentController@reportComment')->middleware('auth');
Route::post('/blogs/rate', 'BlogController@rate')->middleware('auth');
Route::post('/books/rate', 'BookController@rate')->middleware('auth');
Route::post('/blogs/search', 'BlogController@search');

Route::group([
    'prefix' => 'manager',
    'namespace' => 'Manager',
    'middleware' => 'manager',
], function () {
    Route::get('/', 'HomeController@index');
    Route::resource('books', 'BookController');
    Route::post('/image', 'BookController@storeImage');
    Route::resource('reports', 'ReportController');
});
