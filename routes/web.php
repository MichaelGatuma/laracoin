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

Route::get('/posts', 'PagesController@index');
Route::get('/', 'PagesController@services');
/*
Route::get('/abt', function () {
    return view('about');
});
Route::get('/about', function () {
    return view('about.about');
});
Route::get('/users/{id}/{name}', function ($id,$name) {
    return 'This is user '.$name.' with an id of '.$id;
});*/
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts','PostsController');