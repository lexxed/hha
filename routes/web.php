<?php

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('track-order', 'PagesController@trackorder');
Route::get('contact-us', 'PagesController@contactus');

//Route::get('/', function () {
//    return redirect('shop');
//});

Route::get('checkout', 'CheckoutController@index');
Route::post('checkout', 'CheckoutController@store');

Route::get('purchase', 'PurchasesController@index');
Route::post('purchase', 'PurchasesController@store');


Route::resource('shop', 'ProductController', ['only' => ['index', 'show']]);

Route::resource('cart', 'CartController');
Route::delete('emptyCart', 'CartController@emptyCart');
Route::post('switchToWishlist/{id}', 'CartController@switchToWishlist');

Route::resource('wishlist', 'WishlistController');
Route::delete('emptyWishlist', 'WishlistController@emptyWishlist');
Route::post('switchToCart/{id}', 'WishlistController@switchToCart');
