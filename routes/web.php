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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Route::get('/admin/categories/{name}', [App\Http\Controllers\AdminController::class, 'categoryShow']);
Route::get('/admin/categories', [App\Http\Controllers\AdminController::class, 'categories']);
Route::get('/admin/users/{id}', [App\Http\Controllers\AdminController::class, 'userShow']);
Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'users']);

Route::get('/tools/schools/{name}', [App\Http\Controllers\ToolController::class, 'getSchools']);
