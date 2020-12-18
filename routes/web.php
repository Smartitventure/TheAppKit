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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Themes
Route::resource('/theme', 'ThemeController');
Route::get('logout', 'ThemeController@logout');

// Build App
Route::resource('/buildapp', 'BuildappController');

//ThemeCategory
Route::get('/theme_category/{slug}', 'ThemeCategoryController@show');

// about app
Route::resource('/aboutapp', 'Admin\Custom\AboutappController');

//Custom Dashboard
Route::resource('/domaindetail', 'Admin\Custom\DomaindetailController');

//Template Dashboard

Route::resource('/dashboard', 'Admin\Template\DashboardController');
Route::resource('/myapp', 'Admin\Template\MyappController');
Route::resource('/typography', 'Admin\Template\TypographyController');
Route::resource('/pushnotification', 'Admin\Template\PushNotificationController');
Route::resource('/publish', 'Admin\Template\PublishController');
Route::resource('/myaccount', 'Admin\Template\MyaccountController');
Route::resource('/add_product', 'Admin\Template\AddProductController');
Route::resource('/collection', 'Admin\Template\CollectionController');

