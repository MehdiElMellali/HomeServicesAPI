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

/**
 * Services
 */
Route::resource('services', 'Service\ServiceController',['only' =>['index','show']]);

/**
 * Users
 */
Route::resource('users', 'User\UserController',['except' =>['create','edit']]);

/**
 * Reviews
 */
Route::resource('reviews', 'Review\ReviewController',['except' =>['create','edit']]);
