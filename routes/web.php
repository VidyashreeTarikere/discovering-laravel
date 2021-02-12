<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/post', 'App\Http\Controllers\PostsController@index');

Route::resource('posts', 'App\Http\Controllers\PostsController');

Route::get('/contact', 'App\Http\Controllers\PostsController@contact');

Route::post('/contact', 'App\Http\Controllers\PostsController@store');

Route::get('posts/{id}/{name}/{password}', 'App\Http\Controllers\PostsController@show_post');

//Route::get('/contact', 'App\Http\Controllers\PostsController@contact');

// Route::get('/contact', array('as' => 'home.contact', function () {
//     return "Hello World!";
// }));


// Route::get('/about', function () {
//     return "<h1>Hello World About!<br><a href=http://127.0.0.1:8000/contact>Contact</a></h1>";
// });
