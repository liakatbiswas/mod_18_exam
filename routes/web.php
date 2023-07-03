<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// Task 5
Route::get('/postsWithCategory', [PostController::class, 'postsWithCategory'])->name('posts');

// Task 6
Route::get('/categories/{id}/latestPost', [PostController::class, 'latestPost']);

// Task 7
Route::get('/posts/{id}/delete', [PostController::class, 'postSoftDelete'])->name('postDestroy');

// task 8
Route::get('/softDeletedData', [PostController::class, 'softDeletedData'])->name('softDeletedData');

// task 10
Route::get('/categories/{id}/posts', [CategoryController::class, 'showPostByCategory'])->name('categoryPosts');

// task 11
Route::get('/categories/{id}/latestPosts', [CategoryController::class, 'latestPosts']);

// task 12
Route::get('/categories', [CategoryController::class, 'CategoriesLatestPosts'])->name('categories');
