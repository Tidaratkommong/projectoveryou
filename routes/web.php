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

Route::get('/profile', 'HomeController@edit')->name('user.edit_profile');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('product/index', 'ProductsController@index')->name('product/index');

Route::resource('product', 'ProductsController');

//Route::get('product', 'ProductsControlle@index');

//Route::resource('product', 'ProductsController@index');

//Route::resource('/Product', 'ProductsController@create');
//Route::post('product', 'ProductsController@store');

//Route::get('/product', 'ProductController@Index');

//Route::get('/product/{id}', 'ProductController@Show');

//Route::delete('/product/{id}', 'ProductController@Destroy');

//Route::put('/product/{id}', 'ProductController@Update');