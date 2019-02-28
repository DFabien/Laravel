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


//Admin Routes

Route::get('/admin/categories', 'AdminController@showCatAll');

Route::get('/admin/categories/add', 'AdminController@addCat');

Route::get('/admin/categories/edit/{id}', 'AdminController@updateCat');

Route::get('/admin/categories/delete/{id}', 'AdminController@deleteCat');

Route::get('/admin/produits', 'AdminController@showProdsAll');

Route::get('/admin/produit/{id}', 'AdminController@showProd');

Route::get('/admin/produit/add', 'AdminController@addProd');

Route::get('/admin/produit/edit/{id}', 'AdminController@updateProd');

Route::get('/admin/produit/delete/{id}', 'AdminController@deleteProd');

Route::get('/admin/discount', 'AdminController@showDiscAll');

Route::get('/admin/discount/add', 'AdminController@addDiscount');

Route::get('/admin/discount/update', 'AdminController@updateDiscout');

Route::get('/admin/discount/delete/{id}', 'AdminController@deleteDiscount');

Route::get('/admin/delivery', 'AdminController@showDelivAll');

Route::get('/admin/historique/commande/{id}', 'AdminController@historicOrder');

Route::get('/admin/historique/detail/{id}', 'AdminController@detailOrder');

Route::get('/admin/users', 'AdminController@showUsersAll');

Route::get('/admin/user/order/{id}', 'AdminController@orderUser');

Route::get('/admin/user/detail/order/{id}', 'AdminController@orderDetUser');