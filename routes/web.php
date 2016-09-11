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
 * Welcome follows through to Signin
 */
Route::get('/', 'PagesController@welcome');

/**
 * Route to Sign-up View through SignUpController
 */
Route::get('signup', 'SignInController@signup');

/**
 * Route to Listr-main View through PagesController
 */
Route::get('listr', 'PagesController@listr_main');

/**
 * Route to Listr-single View through PagesController
 */
Route::get('single', 'PagesController@listr_single');
