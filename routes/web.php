<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/**
 * Route to Welcome View through PagesController
 */
Route::get('/', 'PagesController@welcome');

/**
 * Route to Sign-in View through SignInController
 */
Route::get('signin', 'SignInController@signin');
// Route::get('signup', 'PagesController@signup');

