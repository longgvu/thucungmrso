<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\IntroduceController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;
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


Route::get('/', [PageController::class, 'index']);
Route::get('/index', function () {
    return view('index');
});
Route::get('introduce', [IntroduceController::class, 'home']);
Route::get('service', [IntroduceController::class, 'home']);
Route::get('blog', [IntroduceController::class, 'home']);
Route::get('recruitment', [IntroduceController::class, 'home']);
Route::get('contact', [IntroduceController::class, 'home']);
Route::middleware(['auth'])->group(function () { 
    // Các routes mà người dùng cần phải đăng nhập để truy cập
    Route::post('/cart/add/{product}', [CartController::class, 'addToCart'])->name('cart.add');
    
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
