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
// HOMEPAGE
Route::get('/', 'StaticPagesController@home');

// STATIC PAGES
Route::get('/menu', 'StaticPagesController@menu');
Route::get('/menu/{slug}', 'StaticPagesController@singleMenu');
Route::get('/about','StaticPagesController@about');
Route::get('/reservations','StaticPagesController@reservations');
Route::get('/contact','StaticPagesController@contact');
Route::get('/offers','StaticPagesController@offers');


// ADMIN DASHBOARD
Route::get('/admin', 'AdminController@dashboard');

// ADMIN FOOD CATEGORIES
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');
Route::get('/admin/food-categories/create','admin\FoodCategoriesController@create');
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit');

// ADMIN FOOD ITEMS
Route::get('/admin/food-items', 'FoodItemsController@index');
Route::get('/admin/food-items/create','FoodItemsController@create');
Route::get('/admin/food-items/{id}/edit', 'FoodItemsController@edit');

// ADMIN USERS
Route::get('/admin/users', 'UsersController@index');
Route::get('/admin/users/create', 'UsersController@create');
Route::get('/admin/users/{id}/edit', 'UsersController@edit');
// ADMIN CUSTOMERS
Route::get('/admin/offers-members', 'CustomersController@allOffersMembers');
Route::get('/admin/reservations', 'CustomersController@allReservations');

// ADMIN AUTHENTICATION
Route::get('/admin/register', function () {
    return view('admin/register');
});
Route::get('/admin/login', function () {
    return view('admin/login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
