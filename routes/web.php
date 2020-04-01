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

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin'], function(){

    Route::get('admin/dashboard', 'DashboardController@index')->name('admin dashboard');

    Route::resource('admin/roles','RoleController');
    Route::resource('admin/users','UserController');
    Route::resource('products','ProductController');

    Route::resource('admin/posts/category', 'CategoryController');

    Route::resource('admin/posts', 'PostController');
});

