<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::get('/join us', function () {
    return view('pages.joinus');
})->name('joinus');

Route::get('/password reset', function () {
    return view('auth.pwreset');
})->name('pwreset');

// Route::get('/home', [HomeController::class, 'index'])
//     ->name('home');

Route::get('/users/{user:username}/posts', [UserPostController::class, 'index'])->name('users.posts');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
Route::post('/feedback', [FeedbackController::class, 'store']);

//Route::get('/feedback/{post}', [FeedbackController::class, 'show'])->name('feedback.show');



// Route::delete('/feedback/{post}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');

// Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
// Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes');
