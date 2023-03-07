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
Route::get('/','PageController@index');
Route::get('/About','PageController@about_us');
Route::get('/News','PageController@news');
Route::get('/Portfolio','PageController@portfolio');
Route::get('/Resource','PageController@resources');
Route::get('/Contribution','PageController@contribution');
Route::get('/Gallery','PageController@gallery');
Route::get('/Contact','PageController@contact');
Route::get('/Trustees','PageController@trustees');
Route::get('/Privacy-Policy','PageController@privacy');
Route::get('/Videos','PageController@videos');
Route::get('/Bank-Contact','PageController@bcontact');
Route::get('/News/{title}','PageController@showNews');
Route::get('/News/tags/{name}','PageController@Showtag');
Route::get('/Gallery/{name} ','PageController@showgallery');

Route::get('/dashboard/profile','DashboardController@ttw_Profile');
Route::Put('/dashboard/profile/{id}','DashboardController@updateUser');

Route::resource('/newsSection','NewsController');
Route::resource('/gallerySection','GalleryController');
Route::resource('/galleryImageSection','GalleryImageController');
Route::Resource('/resourceSection','ResourceController');
Route::get('/Profile','DashboardController@profile');
Route::Put('/profile/{id}','DashboardController@updateUser');
Route::resource('/videoSection','VideoController');


Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
