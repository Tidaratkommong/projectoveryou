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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/index_user', 'DashboardController@registered')->name('admin/index_user');

Route::get('/user/{id}','UserController@profile')->name('user.profile');
Route::get('/edit/user/', 'UserController@edit')->name('user.edit');
Route::post('/edit/user/', 'UserController@update')->name('user.update');
Route::get('/edit/password/user/', 'UserController@passwordEdit')->name('password.edit');
Route::post('/edit/password/user/', 'UserController@passwordUpdate')->name('password.update');

Route::get('product/index_product', 'ProductsController@index')->name('product/index_product');
Route::resource('product', 'ProductsController');


//Route::put('/product/edit/{id}', 'ProductController@edit');
//Route::get('product', 'ProductsControlle@index');

//Route::resource('product', 'ProductsController@index');

//Route::resource('/Product', 'ProductsController@create');
//Route::post('product', 'ProductsController@store');

//Route::get('/product', 'ProductController@Index');

//Route::get('/product/{id}', 'ProductController@Show');

//Route::delete('/product/{id}', 'ProductController@Destroy');

