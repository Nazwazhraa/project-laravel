<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'GuestController@index');

// Route::get('/about', function() {
//     return '<h1>Halo</h1>'
//     .'Selamat datang di webapp saya<br>'
//     .'Laravel, emang keren.';
//     });

// Route::get('/about', function() {
//     return view('about');
//     });

Route::get('/about', 'MyController@showAbout');

Route::get('/testmodel', function() {
    $query = App\Post::all();
    return $query;
    });

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();
Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'web'], function () {

Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'role:admin']], function () {
    Route::resource('authors', 'AuthorsController');
    Route::resource('books', 'BooksController');
    });

Route::get('books/{book}/borrow', [
        'middleware' => ['auth', 'role:member'],
        'as' => 'guest.books.borrow',
        'uses' => 'BooksController@borrow'
        ]);
Route::put('books/{book}/return', [
            'middleware' => ['auth', 'role:member'],
            'as' => 'member.books.return',
            'uses' => 'BooksController@returnBack'
            ]);
});