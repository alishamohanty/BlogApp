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
    //return view('welcome');
    return 'HelloWorld';
});
Route::get('foo', function () {
    return 'Hello Guys';
});
Route::get('user/{name}', function ($name) {
    return 'Your Name is '.$name;
}
);
Route::get('posts/{postId}', function ($postId) {
    return 'Post Id is '.$postId;
})-> where('postId', '[A-Z a-z]+');

Route::get('index', 'PagesController@index');
Route::get('service', 'PagesController@service');
Route::get('about', 'PagesController@about');
