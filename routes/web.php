<?php

use App\Models\User;
use App\Models\Details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ReportBugController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\card_detailsController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\payment_methodController;

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

Route::get('/search', function () {
    return view('pages.search');
})->name('search');


Route::get('/join us', function () {
    return view('pages.joinus');
})->name('joinus');

Route::get('/password reset', [ForgotPasswordController::class, 'forgot'])->name('pwreset');
Route::post('/password reset', [ForgotPasswordController::class, 'password']);

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
Route::post('/feedback', [FeedbackController::class, 'store']);


Route::post('/usersettings_details', [UserController::class, 'userdetails'])->name('usersettings_details');
Route::post('/usersettings_carddetails', [UserController::class, 'carddetails'])->name('usersettings_carddetails');
Route::post('/usersettings_passwordChange', [UserController::class, 'changePassword'])->name('usersettings_passwordChange');
Route::post('/usersettings_delete', [UserController::class, 'delete'])->name('usersettings_delete');
Route::post('/usersettings_deleteByAdmin', [UserController::class, 'deleteByAdmin'])->name('usersettings_deleteByAdmin');

Route::get('/account settings', [UserController::class, 'usersettings'])->name('user_settings');

Route::get('/user/profile', [UserController::class, 'userprofile'])->name('user_profile');

Route::get('/reportbug', [ReportBugController::class, 'index'])->name('reportbug');
Route::post('/reportbug', [ReportBugController::class, 'store']);



// Route::get('/search', [SearchController::class, 'index'])->name('search');
// Route::post('/search', [SearchController::class, 'store']);

// Route::post('/search', function () {
//     return view('/search');
// })->name('search');

// Route::get('/users/{user:username}/feedbacks', [UserPostController::class, 'index'])->name('users.posts');

// Route::get('/feedback/{feedback}', [FeedbackController::class, 'show'])->name('feedback.show');
// Route::delete('/feedback/{feedback}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');

// Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
// Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes');
