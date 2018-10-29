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

Route::get('/',[
    'uses'=>'UserController@getHome',
    'as'=>'/'
]);

Route::get('/auth/facebook', [
    'uses'=>'AuthController@redirectToProvider',
    'as'=>'auth/facebook'
]);
Route::get('/auth/facebook/callback', [
    'uses'=>'AuthController@handleProviderCallback',
    'as'=>'auth/facebook/callback'
]);

Route::get('/shakes',[
    'uses'=>'ItemController@getShakes',
    'as'=>'shakes'
]);

Route::get('/about',[
    'uses'=>'ItemController@getAbout',
    'as'=>'about'
]);

Route::get('/sandwiches',[
    'uses'=>'ItemController@getSandwich',
    'as'=>'sandwiches'
]);

Route::get('/signin',[
    'uses'=>'UserController@getSignIn',
    'as'=>'user.signin'
]);

Route::post('/signin',[
    'uses'=>'UserController@postSignIn',
    'as'=>'user.signin'
]);

Route::get('/signup',[
    'uses'=>'UserController@getSignUp',
    'as'=>'user.signup'
]);

Route::post('/signup',[
    'uses'=>'UserController@postSignUp',
    'as'=>'user.signup'
]);

Route::get('/Account',[
    'uses'=>'UserController@getUserAccount',
    'as'=>'user.account'
]);

Route::get('/logout',[
    'uses'=>'UserController@getLogout',
    'as'=>'logout'
]);

Route::get('/locate',[
   'uses'=>'UserController@getLocation',
    'as'=>'locateUs'
]);

Route::get('/info',[
    'uses'=>'UserController@getMenu',
    'as'=>'menu'
]);

Route::get('/reviews',[
    'uses'=>'UserController@getReviews',
    'as'=>'reviews',
    'middleware'=>'auth'
]);

Route::post('/rate',[
    'uses'=>'UserController@postRate',
    'as'=>'rate'
]);

Route::get('/zomato',[
    'uses'=>'UserController@getZomato',
    'as'=>'zomato'
]);

Route::post('/subscription',[
    'uses'=>'UserController@postSubscription',
    'as'=>'subscription'
]);

