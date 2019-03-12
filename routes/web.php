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


    // ** Routes BackEnd **

Route::get('/admin', 'AdminController@login');
Route::get('/dashboard', 'AdminController@index');
Route::get('ads-categories', 'AdsController@categories');
Route::post('/ads-categories/add', 'AdsController@addCategory');
Route::get('dashboard/ads', 'AdsController@getAdsByUser');
Route::get('dashboard/ads/new', 'AdsController@newAds');
Route::post('/ads/create', 'AdsController@addNewAd');





//return FrontEnd;
Route::get('/', 'HomeController@index');

Route::get('language/{locale}', function ($locale) {
    App::setLocale($locale);
    session(['locale' =>$locale]);
   $backUrl =request()->get('backUrl');
   return redirect()->to($backUrl);
});
Route::post('/user/register', 'UserController@register');
Route::post('/user/checkLogin', 'UserController@login');
Route::get('/logout', function() {
    Session::forget('user');
     if(!Session::has('user'))
      {
         return redirect(url('/'));

      }
});




