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
Route::get('/admin', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');

Route::get('/admin/categories/{name}', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('categories.show');;
Route::get('/admin/categories', [\App\Http\Controllers\Admin\CategoryController::class, 'index']);
Route::post('/admin/categories/{slug}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('categories.update');
Route::get('/admin/users/{id}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('users.show');
Route::get('/admin/users', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('users');
Route::post('/admin/users', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('users.create');
Route::post('/admin/users/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('users.update');

Route::get('/tools/schools/{name}', [App\Http\Controllers\ToolController::class, 'getSchools']);
Route::get('/tools/roles/{name}', [App\Http\Controllers\ToolController::class, 'getRoles']);
