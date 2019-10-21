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

Route::get('/', 'FrontendController@index')->name('frontend.index');
Route::get('/single-news', 'FrontendController@singleNews')->name('frontend.single-news');
Route::get('/listing-sports', 'FrontendController@listingSports')->name('frontend.listing-sports');
Route::get('/entertainment', 'FrontendController@listing')->name('frontend.entertainment');
Route::get('/health', 'FrontendController@listing')->name('frontend.health');
Route::get('/lifestyle', 'FrontendController@listing')->name('frontend.lifestyle');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin', 'middleware' => 'role:Admin'], function () {
    Route::resource('/posts', 'PostController');
   
   
    Route::get('/', 'BackendController@index')->name('admin.index');
    Route::get('/forms', 'BackendController@form')->name('admin.forms');
    Route::get('/tables', 'BackendController@tables')->name('admin.tables');
});
