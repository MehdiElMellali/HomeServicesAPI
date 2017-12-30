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
    return view('Home');
});
Route::view('/services','services');
Route::view('/interior_renovation','interior_renovation');
Route::view('/design_build','design_build');
Route::view('/tiling_painting','tiling_painting');
Route::view('/paver_walkways','paver_walkways');
Route::view('/solar_systems','solar_systems');
Route::view('/contact','contact');

