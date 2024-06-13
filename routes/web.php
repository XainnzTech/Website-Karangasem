<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\AccomodationController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AccountController;

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

// Main Pages
Route::get('/', [CommentController::class, 'index'])->name('comment.index');


Route::get('/profil', function () {
    return view('main.profil');
});

Route::get('/profil/kerajinan', function () {
    return view('main.about.kerajinan');
});

Route::get('/paket', [PackageController::class, 'index'])->name('package.index');

Route::get('/fasilitas', [AccomodationController::class, 'index'])->name('accomodation.index');

Route::get('/gallery', [ImageController::class, 'index'])->name('image.index');

// Admin
Route::get('/login', [AccountController::class, 'showLogin'])->name('login');
Route::post('/login', [AccountController::class, 'login'])->name('account.login');
Route::get('/logout', [AccountController::class, 'logout'])->name('logout');

Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('package', PackageController::class);
Route::get('/paket/{id}', [PackageController::class, 'detail'])->name('package.detail');
Route::get('/admin/paket', [PackageController::class, 'show'])->name('package.show');
Route::post('/admin/paket', [PackageController::class, 'store'])->name('package.store');
Route::get('/admin/paket/{id}/edit', [PackageController::class, 'edit'])->name('package.edit');

Route::resource('comment', CommentController::class);
Route::post('/', [CommentController::class, 'store'])->name('comment.store');
Route::get('/admin/komentar', [CommentController::class, 'show'])->name('comment.show');

Route::resource('account', AccountController::class);
Route::get('/admin/akun', [AccountController::class, 'show'])->name('account.show');
Route::post('/admin/akun', [AccountController::class, 'store'])->name('account.store');
Route::get('/admin/akun/{id}/edit', [AccountController::class, 'edit'])->name('account.edit');

Route::resource('accomodation', AccomodationController::class);
Route::get('/admin/fasilitas', [AccomodationController::class, 'show'])->name('accomodation.show');
Route::post('/admin/fasilitas', [AccomodationController::class, 'store'])->name('accomodation.store');
Route::get('/admin/fasilitas/{id}/edit', [AccomodationController::class, 'edit'])->name('accomodation.edit');

Route::resource('image', ImageController::class);
Route::get('/admin/gallery', [ImageController::class, 'show'])->name('image.show');
Route::post('/admin/gallery', [ImageController::class, 'store'])->name('image.store');
Route::get('/admin/gallery/{id}/edit', [ImageController::class, 'edit'])->name('image.edit');
