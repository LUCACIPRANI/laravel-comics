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

Route::get('/', 'HomeController@home')->name('home-page');

Route::get('/comics', function () {
    $array_comics = config('comics');
    $data = [
        'comics' => $array_comics
    ];
    return view('comics', $data);
})->name('comics-page');

Route::get( '/contacts', 'HomeController@contacts')->name('contacts-page');

Route::get('/about','HomeController@about')->name('about-page');
