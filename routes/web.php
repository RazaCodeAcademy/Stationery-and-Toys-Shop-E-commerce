<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'IndexController@index')->name('welcome');
Route::get('/about', 'IndexController@about');
Route::get('/services', 'IndexController@services');
Route::get('/contact', 'IndexController@contact');

/*
|--------------------------------------------------------------------------
| Users Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'user', 'middleware' => ['auth:web', 'can:isCustomer']], function () {
    Route::get('/profile', 'User\ProfileController@index')->name('user.index');
    Route::get('/dashboard', 'User\ProfileController@create')->name('user.create');
    Route::get('/messanger', 'User\MessangerController@index')->name('user.messanger.index');
    Route::get('/messanger/{id}', 'User\MessangerController@show')->name('user.messanger.show');
    Route::post('/messanger', 'User\MessangerController@store')->name('user.messanger.store');
});

/*
|--------------------------------------------------------------------------
| Manager Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'manager', 'middleware' => ['auth:web', 'can:isManager']], function () {
    Route::get('/dashboard', 'Manager\DashboardController@index')->name('manager.dashboard.index');
    Route::resource('/roles', 'Manager\RoleController');
    Route::resource('/products', 'Admin\ProductController');
    Route::resource('/sales', 'Admin\SalesController');
    Route::get('/orders/completed', 'Admin\OrderController@completedOrders')->name('orders.completed');
    Route::resource('/orders', 'Admin\OrderController');
    Route::resource('/employees', 'Manager\EmployeeController');
    Route::resource('/messanger', 'Admin\MessangerController');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'middleware' => ['auth:web', 'can:isAdmin']], function () {
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard.index');
    Route::resource('/categories', 'Admin\CategoryController');
    Route::resource('/products', 'Admin\ProductController');
    Route::resource('/sales', 'Admin\SalesController');
    Route::get('/orders/completed', 'Admin\OrderController@completedOrders')->name('orders.completed');
    Route::resource('/orders', 'Admin\OrderController');
    Route::resource('/customers', 'Admin\CustomerController');
    Route::resource('/messanger', 'Admin\MessangerController');
});


/*
|--------------------------------------------------------------------------
| Shopping Cart And Checkout Routes
|--------------------------------------------------------------------------
*/

Route::get('/shop', 'ShopingCartController@index')->name('index');
Route::get('/add-to-cart/{id}', 'ShopingCartController@store')->name('addtocart');
Route::get('/shoping-cart', 'ShopingCartController@show')->name('show');
Route::get('/checkout', 'ShopingCartController@checkout')->name('checkout')->middleware('auth');
Route::post('/checkout', 'ShopingCartController@postcheckout')->name('checkout')->middleware('auth');
Route::get('/reduce/{id}', 'ShopingCartController@getReduceByOne')->name('reduceByOne');
Route::get('/remove/{id}', 'ShopingCartController@getRemoveItem')->name('removeItem');

/*
|--------------------------------------------------------------------------
| Google Login And Google Map Routes
|--------------------------------------------------------------------------
*/

Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/our-location', 'Map\MapController@index');

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



