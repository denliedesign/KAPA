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

Route::get('/contact-us', function () {
    return view('/contact-us');
});

//Route::get('/enroll', function () {
//    return view('/enroll');
//});

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
Route::get('/posts/embracing-the-rollercoaster-of-life', function () {
    return view('/posts/embracing-the-rollercoaster-of-life');
});
Route::get('/posts/beyond-the-stage', function () {
    return view('/posts/beyond-the-stage');
});
Route::get('/posts/witnessing-your-dancers-reevolution', function () {
    return view('/posts/witnessing-your-dancers-reevolution');
});
Route::get('/posts/dance-training-remedies-instant-gratification', function () {
    return view('/posts/dance-training-remedies-instant-gratification');
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

Route::get('/music-lessons-in-lake-county-il', function () {
    return view('/music-lessons-in-lake-county-il');
});

Route::get('/music-lessons-lake-county', function () {
    return view('/music-lessons-lake-county');
});

Route::get('/music-lessons-in-winthrop-harbor', function () {
    return view('/music-lessons-in-winthrop-harbor');
});

Route::get('/racine-dance-classes', function () {
    return view('/racine-dance-classes');
});
Route::get('/zion-dance-studio', function () {
    return view('/zion-dance-studio');
});

Route::get('/musical-theater-kenosha', function () {
    return view('/musical-theater-kenosha');
});
Route::get('/dance-team-kenosha', function () {
    return view('/dance-team-kenosha');
});
Route::get('/racine-dance-studios', function () {
    return view('/racine-dance-studios');
});
Route::get('/dance-studios-in-lake-county-il', function () {
    return view('/dance-studios-in-lake-county-il');
});
Route::get('/dance-studios-in-racine', function () {
    return view('/dance-studios-in-racine');
});
Route::get('/dance-in-lake-county-il', function () {
    return view('/dance-in-lake-county-il');
});
Route::get('/somers-dance', function () {
    return view('/somers-dance');
});
Route::get('/kenosha-dance', function () {
    return view('/kenosha-dance');
});
Route::get('/racine-dance', function () {
    return view('/racine-dance');
});
Route::get('/zion-dance', function () {
    return view('/zion-dance');
});
Route::get('/lake-county-dance', function () {
    return view('/lake-county-dance');
});
Route::get('/winthrop-harbor-dance', function () {
    return view('/winthrop-harbor-dance');
});
Route::get('/pleasant-prairie-dance', function () {
    return view('/pleasant-prairie-dance');
});
Route::get('/dance-studios-pleasant-prairie', function () {
    return view('/dance-studios-pleasant-prairie');
});
Route::get('/dance-classes-somers', function () {
    return view('/dance-classes-somers');
});
Route::get('/tumbling-classes-racine', function () {
    return view('/tumbling-classes-racine');
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
