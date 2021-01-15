<?php

use App\Repositories\TodoRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ListproductController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('adminhome', function () {
    return view('adminhome');
});

Route::get('help', function () {
    return view('help');
});

Route::get('about', function () {
    return view('about');
});

Route::get('size', function () {
    return view('size');
});

Route::get('shipments', function () {
    return view('shipments');
});

Route::get('order_history', function () {
    return view('order_history');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');
});

//Route for admin
Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => ['admin']], function(){
        Route::get('/adminhome', 'UserController@index');
    });
});

//admin management
Route::get('admin/index_user', 'DashboardController@index')->name('admin/index_user');
Route::resource('admin', 'DashboardController');

//Route::get('admin/edit_user', 'DashboardController@edit')->name('admin/edit_user');
//Route::delete('/delete_user/{id}', 'DashboardController@registeredDelete');

//profile
Route::get('/user/{id}','UserController@profile')->name('user.profile');
Route::get('/edit/user/', 'UserController@edit')->name('user.edit');
Route::post('/edit/user/', 'UserController@update')->name('user.update');
Route::get('/edit/password/user/', 'UserController@passwordEdit')->name('password.edit');
Route::post('/edit/password/user/', 'UserController@passwordUpdate')->name('password.update');

//product
Route::get('product/index_product', 'ProductsController@index')->name('product/index_product');
Route::resource('product', 'ProductsController');
Route::get('product/{id}','ProductsController@show')->name('product/view_product');
Route::delete('/product/{id}', 'ProductController@Destroy');

//search
Route::get('/search', [ListproductController::class, 'search']);
Route::get('/searchproduct', [ShopController::class, 'search']);

// event_admin
Route::resource('/event', 'EventController');
Route::get('/addeventurl','EventController@display');
Route::get('/displaydata','EventController@show');



// view welcome
Route::get('/', 'ListproductController@index');


// show_product (shopping)
Route::get('/shop', 'ShopController@index');
Route::get('/shop/{id}','ShopController@show')->name('shop.show');


// cart
Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add')->middleware('auth');
Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');
Route::get('/cart/destroy/{itemId}', 'CartController@destroy')->name('cart.destroy')->middleware('auth');
Route::get('/cart/update/{itemId}', 'CartController@update')->name('cart.update')->middleware('auth');
Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout')->middleware('auth');

// order
Route::resource('orders','OrderController')->middleware('auth');

//payment

Route::get('payple/checkout','PayPalController@checkout')->name('paypal.checkout')->middleware('auth');
Route::resource('paypal','PayPalController')->middleware('auth');

//Route::get('payple/checkout','PayPalController@index')->name('paypal.index')->middleware('auth');
//Route::get('payple/checkout-success','PayPalController@getExpressCheckoutSuccess');

//review
Route::resource('/review', 'ReviewsController');

