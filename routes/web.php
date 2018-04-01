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



Route::view('/service','services');
//Route::view('/interior_renovation','interior_renovation');
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




// Route::get('/', function () {
//     return view('welcome');
// })->middleware('guest');


//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home/my-tokens', 'HomeController@getTokens')->name('personal-tokens');
//Route::get('/home/my-clients', 'HomeController@getClients')->name('personal-clients');
//Route::get('/home/authorized-clients', 'HomeController@getAuthorizedClients')->name('authorized-clients');
//Route::get('/interior-renovation', 'HomeController@serviceInt')->name('interior-renovation');


//front

Route::get('home', 'Service\FrontServiceController@Services')->name('Home');
Route::get('/', 'Service\FrontServiceController@Services')->name('Home');
Route::get('service-{id}', 'Service\FrontServiceController@Service')->name('service');









//admin

Route::group(['prefix'=> 'admin','middleware'=>['auth','admin']],function ()
{
    //admin.service
   // Route::resource('/adminServices','Service\WebServiceController');
    Route::resource('/home','Service\WebServiceController');
    Route::resource('/','Service\WebServiceController');
    Route::resource('services','Service\WebServiceController');
});
//logout 
Route::get('/logout','Auth\LoginController@logout');