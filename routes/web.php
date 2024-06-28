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

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('superadmin/home', [App\Http\Controllers\HomeController::class, 'superadminHome'])->name('superadmin.home')->middleware('is_admin');
Route::get('company/home', [App\Http\Controllers\HomeController::class, 'companyHome'])->name('company.home')->middleware('is_admin');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
    Route::get('/users/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/categories', 'App\Http\Controllers\CategoryController@store');
    Route::get('/categories/create', 'App\Http\Controllers\CategoryController@create')->name('categories.create');
    Route::get('/categories', 'App\Http\Controllers\CategoryController@index')->name('index');
    Route::post('/categories', 'App\Http\Controllers\CategoryController@store')->name('categories.store');
});


//register
Route::get('/register', 'App\Http\Controllers\UserController@register')->name('register');
Route::post('/register', 'App\Http\Controllers\UserController@registerstore')->name('register.store');


