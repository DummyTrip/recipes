<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recipes/users/{user}', 'RecipeController@userRecipes');

Route::get('/recipes/purchase/{recipe}', 'RecipeController@purchase');
Route::resource('recipes', 'RecipeController');

Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::auth();
