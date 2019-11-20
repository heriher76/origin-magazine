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

Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
	Route::get('/', 'Admin\AdminPagesController@index');
	Route::resource('/users', 'Admin\UserAdminController');
	Route::resource('/profile/coffee-shops', 'Admin\CoffeeShopController');
	Route::resource('/profile/communities', 'Admin\CommunityController');
	Route::resource('/profile/figures', 'Admin\FigureController');
	Route::resource('/news', 'Admin\NewsController');
	Route::resource('/events', 'Admin\EventController');
	Route::resource('/promotions', 'Admin\PromotionController');
	Route::resource('/opinions', 'Admin\OpinionController');
});
Route::get('/profile/coffee-shop', 'PagesController@coffeeShop');
Route::get('/profile/community', 'PagesController@community');
Route::get('/profile/figure', 'PagesController@figure');
Route::get('/news', 'PagesController@news');
Route::get('/events', 'PagesController@events');
Route::get('/promotions', 'PagesController@promotions');
Route::get('/opinions', 'PagesController@opinions');
Route::get('/{slug}', 'PagesController@showNews');
Route::get('/', 'PagesController@index');