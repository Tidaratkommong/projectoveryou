<?php

use Illuminate\Http\Request;
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

Route::get('event', function () {
    return view('event');
});


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');
});
//Route for admin
Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => ['admin']], function(){
        Route::get('adminhome', 'UserController@index');
    });
});


Route::get('admin/index_user', 'DashboardController@registered')->name('admin/index_user');
Route::delete('/delete_user/{id}', 'DashboardController@registeredDelete');

//fullcalender
//Route::resource('tasks', 'TasksController');


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


//Route::post('/product','ProductController@update');
//Route::get('/product/{id}/edit', 'ProductController@edit');

//Route::get('product/edit/{id}', 'ProductController@edit')->name('product/edit_product');
//Route::post('product/edit/{id}', 'ProductController@update');

Route::delete('/product/{id}', 'ProductController@Destroy');
//Route::get('adminhome', 'EventController@index');


//Route::put('/product/edit/{id}', 'ProductController@update');
//Route::get('product', 'ProductsControlle@index');

//Route::resource('product', 'ProductsController@index');

//Route::resource('/Product', 'ProductsController@create');
//Route::post('product', 'ProductsController@store');

//Route::get('/product', 'ProductController@Index');

//Route::get('/product/{id}', 'ProductController@Show');

//Route::delete('/product/{id}', 'ProductController@Destroy');

