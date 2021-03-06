<?php

use App\Http\Controllers\ArticleController;
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

Route::get('/about', function () {
    return view('/about');
});

Route::get('/classes', function () {
    return view('/classes');
});

Route::get('/fall', function () {
    return view('/fall');
});

Route::get('/enroll', function () {
    return view('/enroll');
});

Route::get('/posts', function () {
    return view('/posts');
});

Route::get('/posts/the-gen-z-difference-career-and-lifestyle', function () {
    return view('/posts/the-gen-z-difference-career-and-lifestyle');
});
Route::get('/posts/a-peek-inside-a-perfectionists-perspective', function () {
    return view('/posts/a-peek-inside-a-perfectionists-perspective');
});
Route::get('/posts/finding-joy-in-the-ordinary-through-creative-play', function () {
    return view('/posts/finding-joy-in-the-ordinary-through-creative-play');
});

Route::get('/music-lessons-kenosha', function () {
    return view('/music-lessons-kenosha');
});

Route::get('/dance-classes-in-zion-il', function () {
    return view('/dance-classes-in-zion-il');
});

Route::get('/dance-classes-in-winthrop-harbor', function () {
    return view('/dance-classes-in-winthrop-harbor');
});

Route::get('/dance-classes-in-lake-county-il', function () {
    return view('/dance-classes-in-lake-county-il');
});

Route::get('/dance-classes-in-racine-wi', function () {
    return view('/dance-classes-in-racine-wi');
});

Route::get('/music-lessons-in-zion-il', function () {
    return view('/music-lessons-in-zion-il');
});

Route::get('/music-lessons-racine-wi', function () {
    return view('/music-lessons-racine-wi');
});

Route::get('/employment', function () {
    return view('/employment');
});

Route::get('contact', 'App\Http\Controllers\ContactUsController@create')->name('contact.create');
Route::post('contact', 'App\Http\Controllers\ContactUsController@store')->name('contact.store');

Route::resource('articles', ArticleController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
