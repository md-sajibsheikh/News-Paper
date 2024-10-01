<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\ShareController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('fronend.pages.home');
})->name('home');

Route::get('/about', function () {
    return view('fronend.pages.about');
});

Route::get('/blog', function () {
    return view('fronend.pages.blog');
});

Route::get('/categori', function () {
    return view('fronend.pages.categori');
});


Route::get('/contact', function () {
    return view('fronend.pages.contact');
});

Route::get('/latest_news',[ShareController::class,'news']);
Route::post('/latest-store', [ShareController::class, 'share_data'])->name('share.submit');
// admin share
Route::get('/admin/get-in-touch', [ShareController::class, 'getTounch'])->name('get-in-touch');
Route::get('/signup', [FormController::class, 'signup'])->name('signup');
Route::get('/login', [FormController::class, 'login'])->name('login');
Route::post('/submit', [FormController::class, 'submit'])->name('submit');
Route::post('/loginCheck', [FormController::class, 'loginCheck'])->name('loginCheck');
Route::get('/logout', [FormController::class, 'logout'])->name('logout');
Route::get('/dashboard', function () {
    return view('admin.pages.home');
})->name('admin');
Route::get('/dashboard/all-user',[UserController::class,'User'])->name('all-user');
Route::get('/dashboard/all-Admin', [UserController::class, 'all_admin'])->name('all-admin');

