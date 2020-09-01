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

Route::get('/profile', 'HomeController@edit')->name('user.edit_profile');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('Product', 'ProductsController');
Route::post('/Product', 'ProductsController@Store');

//Route::get('/product', 'ProductController@Index');

//Route::get('/product/{id}', 'ProductController@Show');

//Route::delete('/product/{id}', 'ProductController@Destroy');

//Route::put('/product/{id}', 'ProductController@Update');