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

Route::get('/cpanel', function () {
    return view('cpanel');
});
Route::get('/trucks', function () {
    return view('trucks');
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('cities', 'CitiesController');
Route::resource('foodtruck', 'FoodTruckController');
Route::resource('meals', 'MealsController');
Route::resource('ingredients', 'IngredientsController');
Route::resource('category', 'CategoryController');
