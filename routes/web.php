<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(
    [

        'middleware' => ['guest']
    ], function()
    {
        Route::get('/', function () {
            return view('auth.login');
        });



    });


    Route::group( [ 'middleware' => ['guest'] ], function()
        {
            Route::get('/', function () {
                return view('auth.login');
            });
        });

Auth::routes();




Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ,'auth']
    ], function()
    {

        Route::get('/dashboard', 'HomeController@index')->name('dashboard');

        Route::group( [ 'namespace' => 'Grades' ], function()
        {
            Route::resource('grads', 'GradsController');




        });
        Route::group( [ 'namespace' => 'Classrooms' ], function()
        {


            Route::resource('Classrooms', 'ClassroomController');

            Route::post('delete_all', 'ClassroomController@delete_all')->name('delete_all');


        });




    });











