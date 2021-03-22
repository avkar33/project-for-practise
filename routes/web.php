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

>>>>>>> Миграции, механизм миграций. Конструктор запросов. Seeder

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
Route::get('test', [TestDbController::class, 'index']);
>>>>>>> Миграции, механизм миграций. Конструктор запросов. Seeder
Route::get('user/{id}', [TestController::class, 'user']);
>>>>>>> practise with routes|controllers|views
