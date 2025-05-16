<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomePageController::class, 'index']);
Route::get("/icons/search", [\App\Http\Controllers\IconsController::class, 'search'])->name('icon.search');
Route::view("/about" , 'about');
Route::view("/contact", "contact");
Route::get("/shop", [\App\Http\Controllers\ShopController::class, 'index']);
Route::get("/shop/{id}", [\App\Http\Controllers\ShopController::class, 'permalink'])->name('permalink');


Route::middleware(['auth'])->group(function () {
    Route::get('order/create', [\App\Http\Controllers\OrderController::class, 'create'])->name('orders.create');
    Route::post("/order/{order}", [\App\Http\Controllers\OrderController::class, 'store'])->name('orders.store');
    Route::get('/order/{order}', [\App\Http\Controllers\OrderController::class, 'show'])->name('orders.show');
    Route::get("/admin/add-product", [\App\Http\Controllers\IconsController::class, 'newIcon'])
        ->name('product.new');
    Route::post("/admin/save-product", [\App\Http\Controllers\IconsController::class, 'saveNewIcon'])->name('product.save');
    Route::get("/admin/products/all", [\App\Http\Controllers\IconsController::class, 'allProducts'])->name('products.all');
    Route::get('/admin/delete/{icon}', [\App\Http\Controllers\IconsController::class, 'delete'])->name('product.delete');
    Route::get('/admin/edit/{icon}', [\App\Http\Controllers\IconsController::class, 'edit'])->name('product.edit');
    Route::put('/admin/update/{id}', [\App\Http\Controllers\IconsController::class, 'update'])->name('product.update');

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
