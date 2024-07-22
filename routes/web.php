<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Middleware\XSS;

Route::get('/', function () {
    return view('welcome');
})->middleware('logged_in');

Route::middleware([XSS::class])->group(function () {
    Route::get('/register', [UserController::class, 'showRegistrationForm']);
	Route::post('/register', [UserController::class, 'register'])->name('register');
	 
	Route::get('/login', [UserController::class, 'showLoginForm']);
	Route::post('/login', [UserController::class, 'login'])->name('login');

	Route::get('/logout', [UserController::class, 'logout'])->name('logout');

	Route::get('/dashboard', [MainController::class, 'showMainPage'])->middleware('logged_in');

	Route::resource('posts', 'App\Http\Controllers\PostController');
	Route::resource('comments', 'App\Http\Controllers\CommentController');

	Route::get('/about', [MainController::class, 'aboutUs'])->name('about');
	Route::get('/categoryPosts/{id}', [PostController::class, 'filterPostsByCategory'])->name('categoryFilter');
	Route::post('/filteredPosts', [PostController::class, 'filterPostsByTitle'])->name('titleFilter');
});