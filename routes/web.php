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


Route::get('/adminpanel', 'Admincontroller@index' );
    //


Route::get('/', function () {
    return view('Home');
});
Route::view('/services','services');
Route::view('/interior_renovation','interior_renovation');
Route::view('/design_build','design_build');
Route::view('/tiling_painting','tiling_painting');
Route::view('/paver_walkways','paver_walkways');
Route::view('/solar_systems','solar_systems');
Route::view('/contact','contact');



// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');





Route::get('/', function () {
    return view('home');
})->middleware('guest');


Route::get('/home', 'HomeController@index')->name('home');

