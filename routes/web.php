<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomePageController::class, 'index']);
Route::get("/icons/search", [\App\Http\Controllers\IconsController::class, 'search'])->name('icon.search');
Route::view("/about" , 'about');
Route::view("/contact", "contact");

Route::get("/admin/add-product", [\App\Http\Controllers\IconsController::class, 'newIcon'])
->name('product.new');
Route::post("/admin/save-product", [\App\Http\Controllers\IconsController::class, 'saveNewIcon'])
->name('product.saveNew');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
