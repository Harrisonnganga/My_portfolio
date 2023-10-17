<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('services');
});
// Route::get('/gallery', function () {
//     return view('gallery');
// });
Route::get('/pages', function () {
    return view('pages');
});
Route::get('/blog', function () {
    return view('blog');
});
// Route::get('/single-blog', function () {
//     return view('single-blog');
// });
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/elements', function () {
    return view('elements');
});

// Route::get('/', 'UserController@home');
// Route::get('/about', 'UserController@about');
// Route::get('/contact', 'UserController@contact');
// Route::get('/portfolio', 'UserController@portfolio');
// Route::get('/services', 'UserController@services');
// Route::get('/blog', 'UserController@blog');

