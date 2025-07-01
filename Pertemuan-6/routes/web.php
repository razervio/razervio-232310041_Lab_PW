<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;

// Redirect root URL (/) ke halaman signin
Route::get('/', function () {
    return redirect()->route('signin');
});

// Guest routes (hanya bisa diakses jika belum login)
Route::middleware('guest')->group(function () {
    Route::get('/signin', [AuthController::class, 'showSigninForm'])->name('signin');
    Route::post('/signin', [AuthController::class, 'signin']);
    
    Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
    Route::post('/signup', [AuthController::class, 'signup']);
});

// Protected routes (hanya bisa diakses jika sudah login)
Route::middleware('auth')->group(function () {
    // Optional dashboard route (bisa redirect ke products index)
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    // Logout
    Route::get('/signout', [AuthController::class, 'signout'])->name('signout');

    // Products management
    Route::controller(ProductsController::class)->group(function () {
        Route::get('/master-data/products', 'index')->name('products.index');
        Route::get('/master-data/products/create', 'create')->name('products.create');
        Route::post('/master-data/products', 'store')->name('products.store');
        Route::get('/master-data/products/{id}', 'show')->name('products.show');
        Route::get('/master-data/products/edit/{id}', 'edit')->name('products.edit');
        Route::put('/master-data/products/{id}', 'update')->name('products.update');
        Route::get('/master-data/products/{id}/delete', function ($id) {
            $product = new \App\Models\Products();
            $deleted = $product->removeByCondition(['id' => $id]);

            return response()->json([
                'success' => $deleted,
                'message' => $deleted ? 'Product deleted successfully.' : 'Product deletion failed.'
            ]);
        });
    });

    // // Profile routes
    // Route::get('/profile', [ProfileController::class, 'profile']);
    // Route::get('/profile/identity', [ProfileController::class, 'identity']);
    // Route::get('/profile/family', [ProfileController::class, 'family']);

    // Optional: Halaman home hanya jika dibutuhkan
});