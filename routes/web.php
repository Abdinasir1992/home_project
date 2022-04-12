<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\PostController;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\FaqController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\Zadanie;

use App\Http\Controllers\CategoryController;

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


Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

Route::get('/faq/create', [FaqController::class, 'create'])->name('faq.get.create');

Route::post('/faq/create', [FaqController::class, 'store'])->name('faq.post.create');

Route::get('/faq/edit/{faq_id}', [FaqController::class, 'edit'])->name('faq.edit');

Route::post('/faq/edit/{faq_id}', [FaqController::class, 'postEdit'])->name('faq.post.edit');

Route::get('/faq/delete/{faq_id}', [FaqController::class, 'delete'])->name('faq.delete');


Route::get('/users/login', [UserController::class, 'login'])->name('users.get.login');

Route::get('/users/create', [UserController::class, 'create'])->name('users.get.create');

Route::get('/users/edit', [UserController::class, 'edit']);

Route::get('/users/delete', [UserController::class, 'delete']);

Route::post('/users', [UserController::class, 'store'])->name('users.post.create');

Route::post('/users/login', [UserController::class, 'store_login'])->name('users.post.login');


Route::get('/about_us', [HomeController::class, 'aboutUs'])->name('home.aboutUs');


Route::get('/category', [CategoryController::class, 'index'])->name('category.index');

Route::get('/category/show/{category_id}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/category/create', [CategoryController::class, 'create'])->name('category.get.create');

Route::post('/category', [CategoryController::class, 'store'])->name('category.post.create');

Route::get('/category/update/{category_id}', [CategoryController::class, 'update'])->name('category.get.update');

Route::post('/category/update/{category_id}', [CategoryController::class, 'restore'])->name('category.post.update');

Route::get('/category/delete/{category_id}', [CategoryController::class, 'delete'])->name('category.delete');


Route::get('/zadanie/3', [Zadanie::class, 'zadacha3']);

Route::get('/zadanie/4', [Zadanie::class, 'zadacha4']);
