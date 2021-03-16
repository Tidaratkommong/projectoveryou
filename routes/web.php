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


//Route::get('report', function () {
 //   return view('report');
//});

Route::get('help', function () {
    return view('help');
});

Route::get('how-to-order', function () {
    return view('how-to-order');
});

Route::get('how-to-return', function () {
    return view('how-to-return');
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



//Route::get('order_history', function () {
 //   return view('order_history');
//});

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

//Route::get('/summary','AdminController@index');



//admin management
Route::get('admin/index_user', 'DashboardController@index')->name('admin/index_user');
//Route::get('/search/user', [DashboardController::class,'search']);
Route::resource('admin', 'DashboardController');
// search Users
Route::get('/search/user', 'DashboardController@search');


//Route::get('admin/edit_user', 'DashboardController@edit')->name('admin/edit_user');
//Route::delete('/delete_user/{id}', 'DashboardController@registeredDelete');

//profile
Route::get('/user/{id}','UserController@profile')->name('user.profile');
Route::get('/history/{id}','UserController@getProfile')->name('user.history');
//Route::get('/history/{id}', 'UserController@show')->name('history');
//Route::get('/history/{id}', 'HistoryController@show')->name('history');

//Route::get('/orders/order_items/{id}', 'OrderItemsController@show');
//Route::get('/history', [
 //   'uses' => 'UserController@getProfile',
 //   'as' => 'user.history'

//]);



Route::get('/edit/user/', 'UserController@edit')->name('user.edit');
Route::post('/edit/user/', 'UserController@update')->name('user.update');
Route::get('/edit/password/user/', 'UserController@passwordEdit')->name('password.edit');
Route::post('/edit/password/user/', 'UserController@passwordUpdate')->name('password.update');

//product

Route::resource('products', 'ProductsController');
Route::get('product/product', 'ProductsController@index')->name('product/product');
Route::get('/search/product', 'ProductsController@search');
Route::get('product/{id}','ProductsController@show')->name('product/view_product');
Route::delete('/product/{id}', 'ProductController@Destroy');
//Route::get('/search/product', 'ProductsController@search', 'search');
//search



//Route::get('search/products', [ProductsController::class,'search'])->name('product/product');
// search product 
Route::get('/search', [ListproductController::class, 'search']);
Route::get('/searchproduct', [ShopController::class, 'search']);

// search Shipments
Route::get('/search/shipment', [OrderController::class, 'search']);



// event_admin
Route::resource('/event', 'EventController');
Route::get('/addeventurl','EventController@display');
Route::get('/displaydata','EventController@show');


//Route::get('/summary','AdminController@index');


// view welcome
Route::get('/', 'ListproductController@index');


// show_product (shopping)
Route::get('/shop', 'ShopController@index');
Route::get('/shop/{id}','ShopController@show')->name('shop.show');


// cart
Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add')->middleware('auth');
Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');
//Route::get('/history', 'CartController@index')->name('user.history')->middleware('auth');
Route::get('/cart/destroy/{itemId}', 'CartController@destroy')->name('cart.destroy')->middleware('auth');
Route::get('/cart/update/{itemId}', 'CartController@update')->name('cart.update')->middleware('auth');
Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout')->middleware('auth');

// order
Route::resource('orders','OrderController')->middleware('auth');


Route::group(['prefix' => 'seller', 'middleware' => 'auth' , 'as' => 'seller.'], function () {
    Route::resource('/','seller/orders');
    Route::resource('/orders','OrderController');
    //Route::get('/orders/view/{id}', 'OrderController@show');
    //Route::get('/order/delivered/{order}','OrderController@markDelivered')->name('order.delivered');
   // Route::get('/orders/delivered/{order}','OrderController@markDelivered')->name('order.delivered');

 });

 Route::get('/orders/view/{id}', 'OrderController@show');
 Route::get('/orders/order_items/{id}', 'OrderItemsController@show');
 //Route::get('/orders/delivered/{order}','OrderController@edit');
 //Route::post('/orders/delivered/', 'OrderController@update');


//Route::get('seller/order_items', 'OrderItemsController@index');
Route::get('/shipments', 'OrderController@indexTest');

//payment



Route::get('checkout','PayPalController@checkout')->name('checkout')->middleware('auth');
//Route::get('checkout','PayPalController@store')->name('checkout')->middleware('auth');

Route::resource('paypal','PayPalController')->middleware('auth');

//Route::get('payple/checkout','PayPalController@index')->name('paypal.index')->middleware('auth');
//Route::get('payple/checkout-success','PayPalController@getExpressCheckoutSuccess');

//review
Route::resource('/review', 'ReviewsController');


// sales report
Route::get('/report', 'ReportController@index');

//Claim_Product
Route::resource('claim', 'ClaimController');
//Route::get('/claim/index', 'ClaimController@index')->middleware('auth');

