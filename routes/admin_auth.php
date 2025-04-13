<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuth\AuthenticatedSessionControllerAdmin;
use App\Http\Controllers\AdminAuth\ConfirmablePasswordController;
use App\Http\Controllers\AdminAuth\EmailVerificationNotificationController;
use App\Http\Controllers\AdminAuth\EmailVerificationPromptController;
use App\Http\Controllers\AdminAuth\NewPasswordController;
use App\Http\Controllers\AdminAuth\PasswordController;
use App\Http\Controllers\AdminAuth\PasswordResetLinkController;
use App\Http\Controllers\AdminAuth\RegisteredUserController;
use App\Http\Controllers\AdminAuth\VerifyEmailController;

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
//require __DIR__.'/admin.php';



  
Route::get('/admin/register', [RegisteredUserController::class, 'create'])
->name('admin.register');

Route::post('/admin/register', [RegisteredUserController::class, 'store']);

Route::get('/admin/login', [AuthenticatedSessionControllerAdmin::class, 'create'])
            ->name('admin.login');

Route::post('/admin/login', [AuthenticatedSessionControllerAdmin::class, 'store']);


Route::middleware(['is.admin'])->prefix('admin')->name('admin.')->group(function(){
    Route::view('/dashboard','admin.dashboard')->name('dashboard');
    // require __DIR__.'/admin_auth.php';
  

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
    
});



///////////////////////////////////////////





// normal user routes

Route::get('/', function () {
    return view('public_site.home');
});

Route::get('/about', function () {
    return view('public_site.about');
});

Route::get('/list', function () {
    return view('public_site.list');
})->name('list');

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




