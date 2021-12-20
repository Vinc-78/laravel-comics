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
    return view("home.index");
  })->name("home.index");


  Route::get('/comics', function () {
    return view("home.comics");
  })->name("home.comics");
  
  Route::get('/movies', function () {
    return view("home.movies");
  })->name("home.movies");
 
  Route::get('/tv', function () {
    return view("home.tv");
  })->name("home.tv");

  Route::get('/games', function () {
    return view("home.games");
  })->name("home.games");

  Route::get('/collectibles', function () {
    return view("home.collectibles");
  })->name("home.collectibles");

  Route::get('/videos', function () {
    return view("home.videos");
  })->name("home.videos");

  Route::get('/fans', function () {
    return view("home.fans");
  })->name("home.fans");

  Route::get('/news', function () {
    return view("home.news");
  })->name("home.news");

  Route::get('/shop', function () {
    return view("home.shop");
  })->name("home.shop");
 