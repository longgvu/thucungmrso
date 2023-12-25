<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\IntroduceController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
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
Route::get('/products/search', [SearchController::class],'search')->name('products.search');
Route::get('introduce', [PageController::class, 'introduce']);
Route::get('service', [PageController::class, 'service']);
Route::get('blog', [PageController::class, 'blog']);
Route::get('recruitment', [PageController::class, 'recruitment']);
Route::get('contact', [PageController::class, 'contact']);
Route::get('shopguide', [PageController::class, 'shopguide']);
Route::get('returnpolicy', [PageController::class, 'returnpolicy']);
Route::get('warrantypolicy', [PageController::class, 'warrantypolicy']);
Route::get('privacypolicy', [PageController::class, 'privacypolicy']);
Route::get('paymentpolicy', [PageController::class, 'paymentpolicy']);

Route::get('category1/{id}', [PageController::class, 'category1']);
Route::get('category2/{id}', [PageController::class, 'category2']);

Route::get('detail-product/{link}', [ProductController::class, 'detail']);

Route::middleware(['auth'])->group(function () { 
    // Các routes mà người dùng cần phải đăng nhập để truy cập
    Route::post('/cart/add/{product}', [CartController::class, 'addToCart'])->name('cart.add');
    
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
