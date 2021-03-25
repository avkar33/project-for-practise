<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestDbController;
use App\Http\Controllers\NamesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;

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


Route::get('names', [NamesController::class, 'index']);
Route::get('names/create', [NamesController::class, 'createName']);
Route::get('names/{name}', [NamesController::class, 'show']);
Route::get('names/{name}/delete', [NamesController::class, 'destroy']);

Route::get('posts', [PostsController::class, 'index']);
Route::get('posts/create', [PostsController::class, 'create']);
Route::get('posts/{post}/delete', [PostsController::class, 'destroy']);

Route::get('users', [UsersController::class, 'index'])->name('users.index');
Route::get('users/create', [UsersController::class, 'create'])->name('users.create');
Route::post('users/store', [UsersController::class, 'store'])->name('users.store');


Route::get('test', [TestDbController::class, 'index']);
