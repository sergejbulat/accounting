<?php

use Illuminate\Support\Facades\Auth;
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

Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    Route::get('/', 'Admin\\AdminController@index')->name('admin');
    Route::resource('project', 'Admin\\ProjectController')->names('project');
    Route::resource('users-projects', 'Admin\\UsersProjectsController')->names('users-projects');
    Route::resource('invoice', 'Admin\\InvoiceController')->names('invoice');
    Route::resource('tax', 'Admin\\TaxController')->names('tax');
    Route::resource('category', 'Admin\\CategoryController')->names('category');
    Route::resource('product', 'Admin\\ProductController')->names('product');
    Route::resource('invoice-products', 'Admin\\InvoiceProductsController')->names('invoice-products');
    Route::resource('sales', 'Admin\\SalesController')->names('sales');
    Route::resource('rules', 'Admin\\RulesController')->names('rules');
    Route::resource('users-rules', 'Admin\\UsersRulesController')->names('users-rules');
});

