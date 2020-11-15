<?php

use App\Repositories\TodoRepositoryInterface;
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

Route::get('shipments', function () {
    return view('shipments');
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

Route::get('/search', [PostController::class, 'search']);


Route::get('admin/index_user', 'DashboardController@index')->name('admin/index_user');
Route::resource('admin', 'DashboardController');

//Route::get('admin/edit_user', 'DashboardController@edit')->name('admin/edit_user');
//Route::delete('/delete_user/{id}', 'DashboardController@registeredDelete');

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
Route::delete('/product/{id}', 'ProductController@Destroy');

//Route::post('/product','ProductController@update');
//Route::get('/product/{id}/edit', 'ProductController@edit');

//Route::get('product/edit/{id}', 'ProductController@edit')->name('product/edit_product');
//Route::post('product/edit/{id}', 'ProductController@update');

//Route::delete('/product/{id}', 'ProductController@Destroy');
//Route::get('adminhome', 'EventController@index');


//Route::put('/product/edit/{id}', 'ProductController@update');
//Route::get('product', 'ProductsControlle@index');

//Route::resource('product', 'ProductsController@index');

//Route::resource('/Product', 'ProductsController@create');
//Route::post('product', 'ProductsController@store');

//Route::get('/product', 'ProductController@Index');

//Route::get('/product/{id}', 'ProductController@Show');

//Route::delete('/product/{id}', 'ProductController@Destroy');

// event
Route::resource('/event', 'EventController');
Route::get('/addeventurl','EventController@display');
Route::get('/displaydata','EventController@show');

//Route::delete('/deleteevent', 'EventController@Destroy');

// view welcome
Route::get('/', 'ListproductController@index');
//Route::get('/{id}','ListproductController@show'); // detail product


// view home
Route::get('/homeproduct', 'ListproducthomeController@index');




//chatbot
Route::match(['get', 'post'], '/botman', 'BotManController@handle');
//Route::get('/botman/tinker', 'BotManController@tinker');

Route::get('test',function(TodoRepositoryInterface $repository){

    $todo = [
      'title' => 'Title 3',
      'description' => 'dddd'
    ];
    $repository->store($todo);
    
    dd($repository->all());
});

