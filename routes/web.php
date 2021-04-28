<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\JobController;

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

Route::get('/users', [UserController::class, 'index']);

Route::get('/users/json', [UserController::class, 'json']);


Route::get('/restore/{userId}', [UserController::class, 'restore'])->name('users.restore');

Route::get('/deleted_users', [UserController::class, 'deletedUsers'])->name('users.deleted');

Route::get('/create', [UserController::class, 'create']);

Route::get('/delete', [UserController::class, 'destroy']);

Route::get('/test_log', [TestController::class, 'testLog']);

Route::get('/test_email', [TestController::class, 'testEmail']);

Route::get('/set_job/{user}', [JobController::class, 'setJob']);

Route::get('/send_email', [JobController::class, 'sendEmail']);

Route::get('/cache_test', [TestController::class, 'index']);

Route::get('/cache_put', [TestController::class, 'cachePut']);

Route::get('/product', [TestController::class, 'product']);
