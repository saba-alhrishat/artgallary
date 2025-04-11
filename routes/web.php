<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




///////////////////////////////////////////

Route::get('/', function () {
    return view('public_site.home');
});

Route::get('/about', function () {
    return view('public_site.about');
});

Route::get('/list', function () {
    return view('public_site.list');
});

// Route::get('/blog', function () {
//     return view('public_site.blog');
// });

// Route::get('/blog_detail', function () {
//     return view('public_site.blog_detail');
// });

// Route::get('/detail', function () {
//     return view('public_site.detail');
// });

// Route::get('/login', function () {
//     return view('public_site.login');
// });

Route::get('/contact', function () {
    return view('public_site.contact');
});




Route::get('/dashboadr1', function () {
    return view('dash.layout.contentdash1');
});

// routes/web.php


Route::middleware('auth')->group(function () {
    Route::resource('users', UserController::class);
});

