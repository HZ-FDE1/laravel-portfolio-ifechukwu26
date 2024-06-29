<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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

//Route::get('/', function () {
//    return view('welcome');
//})->name('home');

Route::get('/', [WelcomeController::class, 'show']);
Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);

Route::resource('/faqs', FaqController::class);

/*Route::get('faqs', [FaqController::class, 'index'])->name('faqs.index');
Route::get('faqs/create', [FaqController::class, 'create'])->name('faqs.create');
Route::post('faqs', [FaqController::class, 'store'])->name('faqs.store');
Route::get('faqs/{faqs}', [FaqController::class, 'show'])->name('faqs.show');
Route::get('faq/{faqs}/edit', [FaqController::class, 'edit'])->name('faqs.edit');
Route::put('faqs/{faqs}', [FaqController::class, 'update'])->name('faqs.update');
Route::get('faq/{faqs}/delete', [FaqController::class, 'delete'])->name('faqs.delete');
Route::delete('faqs/{faqs}', [FaqController::class, 'destroy'])->name('faqs.destroy');*/

Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::get('post/{post}/delete', [PostController::class, 'delete'])->name('post.delete');
Route::delete('post/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/error', function () { abort(500);});
