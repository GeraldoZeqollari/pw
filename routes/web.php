<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\FeedbackController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::get('/join us', function () {
    return view('pages.joinus');
})->name('joinus');

Route::get('/password reset', function () {
    return view('auth.pwreset');
})->name('pwreset');

Route::get('/', [HomeController::class, 'index'])
    ->name('home');



Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
Route::post('/feedback', [FeedbackController::class, 'store']);

// Route::get('/users/{user:username}/feedbacks', [UserPostController::class, 'index'])->name('users.posts');

// Route::get('/feedback/{feedback}', [FeedbackController::class, 'show'])->name('feedback.show');
// Route::delete('/feedback/{feedback}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');

// Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
// Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes');
