<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\GenealogyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RewardsController;
use App\Http\Controllers\StockistController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/dashboard', [WelcomeController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('stockists', [StockistController::class, 'index'])->name('stockist');
    Route::post('stockists', [StockistController::class, 'store'])->name('stockist.store');

    Route::get('genealogy', [GenealogyController::class, 'index'])->name('genealogy');
    Route::get('transactions', [TransactionController::class, 'index'])->name('transactions');
    Route::get('transactions/{transaction}', [TransactionController::class, 'view'])->name('transaction.view');

    Route::get('product-items', [ProductController::class, 'index'])->name('products');
    Route::post('product-items', [CartController::class, 'store'])->name('cart.store');

    Route::get('rewards', [RewardsController::class, 'index'])->name('rewards');
    Route::post('rewards', [RewardsController::class, 'store'])->name('rewards.claim');
    Route::get('history', [RewardsController::class, 'history'])->name('history');

    Route::get('cart', [CartController::class, 'index'])->name('cart');
    Route::post('cart', [CartController::class, 'submit'])->name('cart.submit');
    Route::get('cart/{id}', [CartController::class, 'destroy'])->name('cart.remove');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
