<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**
 * Customer
 */
Route::resource('customers', 'Customer\CustomerController',['only' =>['index','show']]);
Route::resource('customers.services', 'Customer\CustomerServiceController',['only' =>['index']]);
Route::resource('customers.orders', 'Customer\CustomerOrderController',['only' =>['index']]);

/**
 * Services
 */
Route::resource('services', 'Service\ServiceController',['except' =>['create','edit']]);
Route::resource('services.orders', 'Service\ServiceOrderController',['only' =>['index']]);
Route::resource('services.customers', 'Service\ServiceCustomerController',['only' =>['index']]);
Route::resource('services.customers.orders', 'Service\ServiceCustomerOrderController',['only' =>['store']]);

/**
 * Order
 */
Route::resource('orders', 'Order\OrderController',['only' =>['index','show']]);

/**
 * Users
 */
Route::resource('users', 'User\UserController',['except' =>['create','edit']]);
Route::name('verify')->get('users/verify/{token}','User\UserController@verify');
Route::name('resend')->get('users/{user}/resend','User\UserController@resend');

Route::post('oauth/token','\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');



/**
 * Reviews
 */
Route::resource('reviews', 'Review\ReviewController',['except' =>['create','edit']]);






