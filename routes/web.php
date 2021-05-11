<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\FeedbackController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/gallery/modern art', function () {
    return view('pages.gallery.modernart');
})->name('modernart');

Route::get('/art details', function () {
    return view('pages.artdetail');
})->name('art_detail');

Route::get('/report bug', function () {
    return view('pages.reportbug');
})->name('reportBug');

Route::get('/gallery/realism', function () {
    return view('pages.gallery.realism');
})->name('realism');

Route::get('/gallery/medieval art', function () {
    return view('pages.gallery.medievalart');
})->name('medievalart');


Route::get('/gallery/baroque', function () {
    return view('pages.gallery.baroque');
})->name('baroque');

Route::get('/#ourGoal', function () {
    return view('home');
})->name('ourGoal');

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
