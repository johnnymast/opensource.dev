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


Route::get('/', 'FrontController@index')->name('home');
Route::get('/test', 'FrontController@test');

/**
 * Sitemaps
 */
Route::get('/sitemap.xml', 'SitemapController@index')->name('sitemap.index');
Route::get('/sitemap/pages', 'SitemapController@pages')->name('sitemap.pages');
Route::redirect('/sitemap', 'sitemap.xml');


//Auth::routes();


Route::group(['prefix' => 'beheer'], function () {
    Voyager::routes();
});

Route::get('{page_slug}', 'PagesController@view')->name('page');
