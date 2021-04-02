<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;

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
Route::get('/users/{userId}/show', [UserController::class, 'show']);

Route::get('/posts/{postId}', [PostController::class, 'show'])->name('post.show');

Route::get('/role/{roleId}', [RoleController::class, 'show'])->name('role.show');


Route::get('/countrys', [CountryController::class, 'index']);

Route::get('/countrys/{countryId}', [CountryController::class, 'show']);

Route::get('/comments', [CommentController::class, 'index']);

Route::get('/videos/{id}/comments', [CommentController::class, 'videoComments']);

Route::get('/tags', [TagController::class, 'index']);

Route::get('/add_tag/{tagId}/{id}/{type}', [TagController::class, 'addTag']);

Route::get('/show_tags/{id}/{type}', [TagController::class, 'showTags']);
