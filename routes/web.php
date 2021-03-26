<?php

use Darryldecode\Cart\Cart;
use Illuminate\Contracts\Cache\Store;
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

Route::redirect('/', '/home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add-to-cart/{product_id}', [App\Http\Controllers\CartController::class, 'add_Cart'])->name("cart.add")->middleware('auth');
Route::get('/cart',[\App\Http\Controllers\CartController::class, 'index'])->name("cart.index")->middleware('auth');
Route::get('/cart/destroy/{item_id}',[\App\Http\Controllers\CartController::class, 'cart_destroy'])->name("cart.destroy")->middleware('auth');
Route::get('/cart/update/{item_id}',[\App\Http\Controllers\CartController::class, 'update'])->name("cart.update");
Route::get('/cart/checkout',[\App\Http\Controllers\CartController::class, 'checkout'])->name("cart.checkout");

//order
Route::post('/cart/order',[\App\Http\Controllers\OrderController::class, 'store'])->name("orders.store")->middleware('auth');

Route::get('/paypal/checkout',[\App\Http\Controllers\PayPal::class, 'getExpresscheCkout'])->name("paypal.checkout");
Route::get('/paypal/checkout_success',[\App\Http\Controllers\PayPal::class, 'getExpressCheckoutSuccess'])->name('paypal.Success');
Route::get('/paypal/cencel_order',[\App\Http\Controllers\PayPal::class, 'cencel'])->name('paypal.cencel');

