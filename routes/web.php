<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\UserController;
use App\Http\Controllers\SystemController;
=======
use App\Http\Controllers\TestController;
<<<<<<< HEAD
>>>>>>> practise with routes|controllers|views
=======
use App\Http\Controllers\TestDbController;
<<<<<<< HEAD

>>>>>>> Миграции, механизм миграций. Конструктор запросов. Seeder
=======
use App\Http\Controllers\NamesController;
use App\Http\Controllers\PostsController;
>>>>>>> Модели Eloquent. Scope, Мутаторы, Carbon. Представления

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

<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/', function () {
    dd(request());
    return view('welcome');
});
<<<<<<< HEAD

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/', [App\Http\Controllers\Admin\TestController::class, 'index'])->name('admin');
});
=======
=======
=======
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

>>>>>>> Модели Eloquent. Scope, Мутаторы, Carbon. Представления
Route::get('test', [TestDbController::class, 'index']);
>>>>>>> Миграции, механизм миграций. Конструктор запросов. Seeder
Route::get('user/{id}', [TestController::class, 'user']);
>>>>>>> practise with routes|controllers|views
