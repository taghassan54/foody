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
Route::get('/food-truck-register','FoodTruckController@register');
Route::post('/food-truck-register','FoodTruckController@storeregister')->name('food-truck.register');

Route::get('/', function () {
   return  redirect()->route('home');
});

Auth::routes();
Route::get('/trucks/{id}','FoodTruckController@showforuser');
Route::get('/trucks/{id}/booking','FoodTruckController@booking');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/bookings','BookRequestController');

Route::group([ 'middleware' => 'auth'], function()
{
    Route::resource('cities', 'CitiesController');
    Route::resource('foodtruck', 'FoodTruckController');
    Route::resource('meals', 'MealsController');
    Route::resource('ingredients', 'IngredientsController');
    Route::resource('category', 'CategoryController');
    Route::resource('customers', 'customersController');
    Route::resource('sliders', 'SliderController');

});
Route::resource('reviews', 'ReviewController');
Route::resource('chats', 'ChatController');
Route::get('/truck/{id}/chats','FoodTruckController@chats');


/* Route::get('/create',function(){
    /* exec('cat  ../resources/views/welcome.blade.php > ../resources/views/test/test.blade.php', $out);
    var_dump($out);
}); */


