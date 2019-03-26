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

Route::get('/', 'BasicController@index')->name('homepage'); // route vers l'index du site

Route::get('/contact', 'BasicController@contact')->name('contact'); // route vers la page contact

Route::get('/livraison', 'BasicController@delivery')->name('delivery'); // route vers la page livraison


// Products routes
Route::get('/produits', 'ProductController@showAll' )->name('products'); // route vers la liste des produits

Route::get('/produit/{id}','ProductController@show')->name('description'); //route vers un produit unique

// Basket routes

Route::prefix('panier')->group(function () {

    Route::get('/', 'BasketController@show')->name('basket'); // route vers le panier

    Route::put('modification/{id}', 'BasketController@update')->name('basketUpdate'); // route vers

    Route::delete('suppression/{id}', 'BasketController@delete')->name('basketDelete'); // route vers

    Route::delete('vider', 'BasketController@erase')->name('basketErase');

    Route::get('{codePromo}', 'BasketController@discount')->name('basketDiscount'); // route vers

    Route::put('ajout/{id}', 'BasketController@add')->name('basketAdd'); // route vers

    Route::post('/save', 'BasketController@save')->name('basketSave');
});

// User routes

Route::prefix('mon-compte')->group(function () {
    Route:: get('/', 'UserController@profil')->name('userAccount');// route vers la page " Mon compte"

    Route:: get('modification', 'UserController@updateAccount')->name('userUpdate');//route vers la page "Mon compte"

    Route:: get('suppression/{id}', 'UserController@index')->name('userDelete'); // route vers la page Accueil
});

Route :: get('/mes-commandes', 'UserController@showOrdersAll')->name('orders');//route vers la page "Mes Commandes"

Route :: get('/ma-commande/{id}', 'UserController@showOrder')->name('order');// route vers la page "Commande"


//Admin Routes

Route::prefix('admin')->middleware('auth')->group(function () { // prefix url ex: admin/categories

    // AdminCategoriesController

    Route::get('categories', 'AdminCategoriesController@showCatAll')->name('adminCategories');

    Route::get('categories/add', 'AdminCategoriesController@addCat')->name('adminCategoryAdd');

    Route::get('categories/edit/{id}', 'AdminCategoriesController@updateCat')->name('adminCategoryEdit');

    Route::put('categories/edit/{id}', 'AdminCategoriesController@majCat')->name('adminCategoryMaj');

    Route::post('categories/add', 'AdminCategoriesController@store')->name('adminCategoryStore');

    //AdminProductsController

    Route::get('produit/add', 'AdminProductsController@addProd')->name('adminProductAdd');
    Route::put('produit/add', 'AdminProductsController@addProd2')->name('adminPdtAdd');

    Route::get('produit/edit/{id}', 'AdminProductsController@updateProduct')->name('adminEdit');
    Route::put('produit/edit/{id}', 'AdminProductsController@updateProduct2')->name('adminEdition');

    Route::get('produits', 'AdminProductsController@showProdsAll')->name('adminProducts');

    Route::get('produit/{id}', 'AdminProductsController@showProd')->name('adminProduct');

    Route::delete('produit/delete/{id}', 'AdminProductsController@deleteProd')->name('adminProductDelete');


    // AdminDiscountController

    Route::get('discount', 'AdminDiscountController@showDiscAll')->name('adminDiscount');

    Route::get('discount/add', 'AdminDiscountController@addDiscount')->name('adminDiscountAdd');

    Route::get('discount/edit/{id}', 'AdminDiscountController@updateDiscount')->name('adminDiscountEdit');

    Route::delete('discount/delete/{id}', 'AdminDiscountController@deleteDiscount')->name('adminDiscountDelete');

    Route::post('discount/add', 'AdminDiscountController@store')->name('adminDiscountStore');

    Route::put('discount/add', 'AdminDiscountController@storeUpdate')->name('adminDiscountStoreUpdate');


    // AdminController

    Route::get('delivery', 'AdminController@showDelivAll')->name('adminDelivery');

    Route::get('users', 'AdminController@showUsersAll')->name('adminUsers');

    Route::get('user/order/{id}', 'AdminController@orderUser')->name('adminUser');

    Route::get('user/detail/order/{id}', 'AdminController@orderDetUser')->name('adminOrderUser');

    Route::get('/', 'AdminController@home')->name('adminHome');

    // AdminOrderController

    Route::get('historique/commande', 'AdminOrderController@historicOrder')->name('adminOrders');

    Route::get('historique/detail/{id}', 'AdminOrderController@detailOrder')->name('adminOrder');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
