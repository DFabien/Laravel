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

Route::get('/livraison', 'BasicController@delivery'); // route vers la page livraison


// Products routes
Route::get('/produits', 'ProductController@showAll' ); // route vers la liste des produits

Route::get('/produit/{id}','ProductController@show'); //route vers un produit unique

// Basket routes

Route::get('/panier', 'BasketController@show'); // route vers 

Route::get('/panier/modification', 'BasketController@update'); // route vers 

Route::get('/panier/suppression/{id}', 'BasketController@delete'); // route vers 

Route::get('/panier/{codePromo}', 'BasketController@discount'); // route vers 

Route::get('/panier/ajout/{id}', 'BasketController@add'); // route vers 


// User routes
Route :: get('/mon-compte', 'UserController@profil');// route vers la page " Mon compte"

Route :: get('/mon-compte/modification', 'UserController@updateAccount');//route vers la page "Mon compte"

Route :: get('/mon-compte/suppression/{id}','UserController@index'); // route vers la page Accueil

Route :: get('/mes-commandes', 'UserController@showOrdersAll');//route vers la page "Mes Commandes"

Route :: get('/ma-commande/{id}', 'UserController@showOrder');// route vers la page "Commande"
