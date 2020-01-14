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

// Route::get('/index', function () {
//     return view('index');
// });

// Auth::routes();
Route::get('/','HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'UserController@index')->name('users.index');

// customers 
Route::get('/customers','CustomersController@index')->name('customers.index');
Route::get('/customers/register','CustomersController@create')->name('customers.register');
Route::post('/customers/store','CustomersController@store')->name('customers.store');
Route::get('/customers/{id}/edit','CustomersController@edit')->name('customers.edit');
Route::patch('/customers/{id}/edit','CustomersController@update');
Route::delete('/customers/{id}/delete','CustomersController@destroy')->name('customers.delete');

// blog categrory
Route::get('/blog-categories','BlogCategoryController@index')->name('blogcategories.index');
Route::get('/blog-categories/register','BlogCategoryCOntroller@create')->name('blogcategories.register');
Route::post('/blog-categrories/store','BlogCategoryController@store')->name('blogcategories.store');
Route::get('/blog-categrories/{id}/edit','BlogCategoryController@edit')->name('blogcategories.edit');
Route::patch('/blog-categrories/{id}/edit','BlogCategoryController@update');
Route::delete('/blog-categrories/{id}/delete','BlogCategoryController@destory')->name('blogcategories.delete');

//blog User
Route::get('/user','BlogUserController@Index')->name('users.index');