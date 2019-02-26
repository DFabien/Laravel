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
  return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/list_products', function () {
    return view('list_products');
});

Route::get('/fiche_products/{k}', function ($k) {
    return view('fiche_products')->with('fiche_products', $k);
});

Route::get('/panier', function () {
    return view('panier');
});