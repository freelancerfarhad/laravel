<?php

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
// Route::get('namespace App\Http\Controllers')->group(function(){
//     Route::get('/', function () {
//         return view('welcome');
//     });
// })  

Route::namespace('App\Http\Controllers')->group(function(){

    Route::get('/','SiteController@showHome');
      
    Route::get('/about','SiteController@showAbout');
    
    Route::get('/service','SiteController@showService');
    
    Route::get('/portfolio','SiteController@showPortfolio');
    
    Route::get('/contact','SiteController@showContact');

});

