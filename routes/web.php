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

Route::get('/blogs/myblog', 'BlogController@myBlog')->middleware('auth');
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
Route::post('/books/search', 'BookController@search');
Route::get('/favorites', 'HomeController@favorite')->middleware('auth');
Route::post('/favorites/add', 'HomeController@addBook')->middleware('auth');
Route::get('/contacts', 'HomeController@contact')->middleware('auth');
Route::post('/contacts', 'HomeController@contactSend')->middleware('auth');

Route::group([
    'prefix' => 'manager',
    'namespace' => 'Manager',
    'middleware' => 'manager',
], function () {
    Route::get('/', 'HomeController@index');
    Route::resource('books', 'BookController');
    Route::post('/image', 'BookController@storeImage');
    Route::resource('reports', 'ReportController');
    Route::resource('authors', 'AuthorController');
    Route::resource('publishingcompanies', 'PublishingCompanyController');
    Route::resource('categories', 'CategoryController');
    Route::resource('reportdetails', 'ReportDetailController');
    Route::resource('users', 'UserController');
    Route::get('/contacts', 'HomeController@contact');
    Route::post('/contacts', 'HomeController@replySend');
    Route::get('/contacts/reply/{id}', 'HomeController@reply');
});
