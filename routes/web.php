<?php

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

Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin\\AdminController@index')->name('admin');
    Route::resource('project', 'Admin\\ProjectController');
    Route::resource('users-projects', 'Admin\\UsersProjectsController');
    Route::resource('invoice', 'Admin\\InvoiceController');
    Route::resource('tax', 'Admin\\TaxController');
    Route::resource('category', 'Admin\\CategoryController');
    Route::resource('product', 'Admin\\ProductController');
    Route::resource('invoice-products', 'Admin\\InvoiceProductsController');
    Route::resource('sales', 'Admin\\SalesController');
});

