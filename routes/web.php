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

// Route::get('/ ', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::resource('/', 'WelcomeController'); //Homepage

Route::get('/test', 'WelcomeController@index');
Route::resource('/about' , 'AboutController '); //About page
Route::resource('/projects' , 'ProjectController'); //Project page
Route::resource('/ratecard' , 'RateController'); //Ratecard page


Route::resource('/subscriber', 'SubscriberController', ['except'=>'destroy']);
Route::resource('/reseller', 'ResellerController', ['except'=>'destroy']);

Route::get('/contacts' , 'PagesController@contacts'); 
Route::get('/advertiser' , 'PagesController@advertiser'); 

Route::resource('/users', 'UserController');


Route::get('/home', 'HomeController@index')->name('home');
