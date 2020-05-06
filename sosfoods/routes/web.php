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


// route des products 
Route::get('/boutique','ProductController@index')->name('products.index');

Route::get('/boutique/{slug}', 'ProductController@show')->name('product.show');

// cart  route route pour le panier

Route::get('/panier','CartController@index')->name('cart.index');
Route::post('/panier/ajouter', 'CartController@store')->name('cart.store');
Route::get('/panier/{rowId}','CartController@destroy')->name('cart.destroy');

Route::get('videpanier', function () {
    Cart::destroy();
});

// checkout route paiement 
Route::get('/paiement','CheckoutController@index')->name('checkout.index');