<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\Account\SigninController;
use App\Http\Controllers\Account\SignupController;
use App\Http\Controllers\Account\SignoutController;
use App\Http\Controllers\Page\PageController;
use App\Http\Controllers\DashboardController;

// use App\Http\Middleware\CheckPermission;

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

Route::get('/',[HomeController::class, 'show'])->name('home.front');
//
Route::get('/signin', [SigninController::class, 'view'])->name('account.front.signin');
Route::post('/signin', [SigninController::class, 'authenticate'])->name('account.front.signin.submit');
//
Route::get('/signup', [SignupController::class, 'view'])->name('account.front.signup');
Route::post('/signup', [SignupController::class, 'store']);
//
Route::middleware('auth')->group(function () {
    Route::get('/user/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.user');
    Route::post('/signout', [SignoutController::class, 'signout'])->name('account.back.signout');
});

Route::get('/pages/{slug}', [PageController::class, 'show'])->name('page.front.page');


/*
Route::get('/dashboard', function () {
    // This route requires the 'view-dashboard' permission.
})->middleware('checkPermission:access-dashboard');

Route::middleware('checkOwnership:post')->group(function () {
    Route::get('/dashboard/posts/{id}/edit', [PostController::class,'edit']);
});
*/
