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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::get('/index', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
       Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
       Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

    });
/**
         * pages Routes
         */
    Route::get('/maps', 'HomeController@maps')->name('maps');
    Route::get('/contact','HomeController@contact')->name('contact');
    Route::get('/achievements','HomeController@achievements')->name('achievements');
/**
         * dashboard Routes
         */
    Route::get('/Dashboard add','DashboardController@Dashboardadd')->name('Dashboardadd');
    Route::get('/Dashboard list','DashboardController@Dashboard')->name('Dashboard');
    Route::post('/Datainsert','DashboardController@store')->name('Datainsert');
    Route::post('/Newsinsert','DashboardController@Newsinsert')->name('Newsinsert');
    Route::get('edit/{id}','DashboardController@edit')->name('edit');
    Route::get('editnews/{id}','DashboardController@editnews')->name('editnews');
    Route::get('delete/{id}','DashboardController@delete')->name('delete');
    Route::get('deletenews/{id}','DashboardController@deletenews')->name('deletenews');
    Route::put('update-data/{id}','DashboardController@update')->name('update-data');
    Route::put('update-datanews/{id}','DashboardController@updatenews')->name('updatenews');


    Route::get('/publicad_details/{id}', 'HomeController@publicad_details')->name('publicad.name');




});
