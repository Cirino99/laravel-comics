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

Route::get('/comics/{id}', function ($id) {
    $succes = false;
    $series = config('comics');
    $i = 0;
    $lengthSeries = count($series);
    while (!$succes) {
        if ($series[$i]['id'] == $id) {
            $serie = $series[$i];
            $succes = true;
        }
        $i++;
        if ($i >= $lengthSeries) {
            $succes = true;
        }
    }
    if (isset($serie)) {
        return view('serie', [
            'pageTitle' => 'Serie',
            'serie' => $serie,
            'arrFooter' => config('footerlist'),
        ]);
    } else {
        abort(404);
    }
})->name('serie');

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
    return view('games', [
        'arrFooter' => config('footerlist'),
    ]);
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles', [
        'arrFooter' => config('footerlist'),
    ]);
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos', [
        'arrFooter' => config('footerlist'),
    ]);
})->name('videos');

Route::get('/fans', function () {
    return view('fans', [
        'arrFooter' => config('footerlist'),
    ]);
})->name('fans');

Route::get('/news', function () {
    return view('news', [
        'arrFooter' => config('footerlist'),
    ]);
})->name('news');

Route::get('/shop', function () {
    return view('shop', [
        'arrFooter' => config('footerlist'),
    ]);
})->name('shop');
