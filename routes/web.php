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

    $comics = config('comics');
    $buyComicsLinks = config('buyComicsLinks');
    $footerLinks = config('footerLinks');
    $socialLinks = config('socialLinks');


    return view(
        'home',
        [
            'comicsList' => $comics,
            'buyLinks' => $buyComicsLinks,
            'footerLinks' => $footerLinks,
            'socialLinks' => $socialLinks
        ]
    );
})->name('home');

Route::get('comicsList', function () {

    $comics = config('comics');
    $footerLinks = config('footerLinks');
    $socialLinks = config('socialLinks');

    return view(
        'allComicsList',
        [
            'comicsList' => $comics,
            'footerLinks' => $footerLinks,
            'socialLinks' => $socialLinks
        ]
    );
})->name('comicsList');

Route::get('comicPage', function () {

    $comics = config('comics');
    $buyComicsLinks = config('buyComicsLinks');
    $footerLinks = config('footerLinks');
    $socialLinks = config('socialLinks');

    return view(
        'singleComicPage',
        [
            'comicsList' => $comics,
            'buyLinks' => $buyComicsLinks,
            'footerLinks' => $footerLinks,
            'socialLinks' => $socialLinks
        ]
    );
})->name('comicPage');
