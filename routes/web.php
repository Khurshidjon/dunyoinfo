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
// Route::prefix('{lang?}')->middleware('locale')->group(function() {});

// Route::get('i/{lang}', function ($lang) {
//     \Session::put('lang', $lang);
//     return redirect()->back();
// })->name('locale');



// Route::get('/', 'FrontendController@index')->name('frontend.index');
// Route::get('/', function () {
//     $locale = config('app.locale');
//     return redirect($locale);
// });


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {
        Route::get('/', 'FrontendController@index')->name('frontend.index');
        Route::get('/single-news', 'FrontendController@singleNews')->name('frontend.single-news');
        Route::get('/listing-sports', 'FrontendController@listingSports')->name('frontend.listing-sports');
        Route::get('/entertainment', 'FrontendController@listing')->name('frontend.entertainment');
        Route::get('/health', 'FrontendController@listing')->name('frontend.health');
        Route::get('/lifestyle', 'FrontendController@listing')->name('frontend.lifestyle');


    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');

//    Admin qism uchun
    Route::get('/admin/login/page', 'BackendController@loginPage')->name('admin.login');
    Route::get('/admin', 'BackendController@index')->name('admin.index');

    Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:Admin']], function () {
        Route::resource('/posts', 'PostController');
        Route::resource('/menus', 'MenuController');
        Route::resource('/categories', 'CategoryController');
        Route::get('/forms', 'BackendController@form')->name('admin.forms');
        Route::get('/tables', 'BackendController@tables')->name('admin.tables');
    });
}
);
