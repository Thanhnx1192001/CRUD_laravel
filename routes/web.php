<?php

use App\Http\Controllers\Admin\AdminController;
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

Route::get('/CRUD/create', [AdminController::class, 'create']);

Route::PATCH('/CRUD/store', [AdminController::class, 'store']);

Route::get('/CRUD/admin', [AdminController::class, 'index']);

Route::get('/CRUD/read/{id}', [AdminController::class, 'show']);

Route::get('/CRUD/edit/{id}', [AdminController::class, 'edit']);

Route::patch('/CRUD/update/{id}', [AdminController::class, 'update']);

Route::DELETE('/CRUD/delete/{id}', [AdminController::class, 'destroy']);

Route::get('/CRUD/search', [AdminController::class, 'search']);

