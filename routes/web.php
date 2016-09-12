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
 * Route to Sign-up View through SignInController
 */
Route::get('signup', 'PagesController@signup');

/**
 * Route to Listr-main View through PagesController
 */
Route::get('listr', 'PagesController@listr_main');

/**
 * Route to Listr-single View through PagesController
 */
Route::get('single', 'PagesController@listr_single');

/**
 * Route for UserController index
 */
Route::get('user', 'UsersController@index');

/**
 * Route for posting new User Account through sign-in controller
 */
Route::post('user', 'UsersController@store');
/**
 * Route for UserListsController index
 */
Route::get('userlists', 'UserListsController@index');

/**
 * Route for posting new list through sign-in controller
 */
Route::post('userlists', 'UserListsController@store');
/**
 * Route for NotesController index
 */
Route::get('notes', 'NotesController@index');

/**
 * Route for posting new note through notes controller
 */
Route::post('notes', 'NotesController@store');
