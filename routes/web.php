<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\PostController;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\FaqController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\Zadanie;

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

Route::get('/', [HomeController::class, 'index'])->name('main');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.get.create');

Route::get('/posts/update/{post_id}', [PostController::class, 'update'])->name('posts.get.update');

Route::get('posts/delete', [PostController::class, 'delete']);

Route::get('posts/show/{post_id}', [PostController::class, 'show'])->name('posts.show');

Route::post('/posts', [PostController::class, 'store'])->name('posts.post.create');

Route::post('posts/update/{post_id}', [PostController::class, 'restore'])->name('posts.post.update');

Route::get('posts/delete/{post_id}', [PostController::class, 'delete'])->name('posts.get.delete');


Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/create', [ProductController::class, 'create']);

Route::get('/products/edit', [ProductController::class, 'edit']);

Route::get('/products/delete', [ProductController::class, 'delete']);


Route::get('/faq', [FaqController::class, 'index']);

Route::get('/faq/create', [FaqController::class, 'create']);

Route::get('/faq/edit', [FaqController::class, 'edit']);

Route::get('/faq/delete', [FaqController::class, 'delete']);


Route::get('/users/login', [UserController::class, 'login'])->name('users.get.login');

Route::get('/users/create', [UserController::class, 'create'])->name('users.get.create');

Route::get('/users/edit', [UserController::class, 'edit']);

Route::get('/users/delete', [UserController::class, 'delete']);

Route::post('/users', [UserController::class, 'store'])->name('users.post.create');

Route::post('/users/login', [UserController::class, 'store_login'])->name('users.post.login');


Route::get('/about_us', [HomeController::class, 'aboutUs'])->name('home.aboutUs');


Route::get('/zadanie/3', [Zadanie::class, 'zadacha3']);

Route::get('/zadanie/4', [Zadanie::class, 'zadacha4']);
