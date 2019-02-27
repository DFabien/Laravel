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
// Basics routes

Route::get('/', 'BasicController@index'); // route vers l'index du site

Route::get('/contact', 'BasicController@contact'); // route vers la page contact

Route::get('/livraison', 'BasicController@delivery'); // route vers la age livraison


// Products routes


// Basket routes


// User routes