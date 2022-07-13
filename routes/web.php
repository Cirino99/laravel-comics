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

Route::get('/characters', function () {
    return view('characters', [
        'arrFooter' => config('footerlist'),
    ]);
})->name('characters');

Route::get('/', function () {
    return view('comics', [
        'arrSeries' => config('comics'),
        'arrShop' => config('shopmaterials'),
        'arrFooter' => config('footerlist'),
    ]);
})->name('comics');

Route::get('/movies', function () {
    return view('movies', [
        'arrFooter' => config('footerlist'),
    ]);
})->name('movies');

Route::get('/tv', function () {
    return view('tv', [
        'arrFooter' => config('footerlist'),
    ]);
})->name('tv');

Route::get('/games', function () {
    return 'games';
})->name('games');

Route::get('/collectibles', function () {
    return 'collectibles';
})->name('collectibles');

Route::get('/videos', function () {
    return 'videos';
})->name('videos');

Route::get('/fans', function () {
    return 'fans';
})->name('fans');

Route::get('/news', function () {
    return 'news';
})->name('news');

Route::get('/shop', function () {
    return 'shop';
})->name('shop');
