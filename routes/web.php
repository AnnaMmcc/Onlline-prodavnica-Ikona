<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomePageController::class, 'index'])->name('home');
Route::get("/icons/search", [\App\Http\Controllers\IconsController::class, 'search'])->name('icon.search');
Route::view("/about" , 'about');
Route::view("/contact", "contact");
Route::get("/shop", [\App\Http\Controllers\ShopController::class, 'index']);
Route::get("/shop/{id}", [\App\Http\Controllers\ShopController::class, 'permalink'])->name('permalink');


Route::middleware(['auth'])->group(function () {
    Route::post("/cart/add", [\App\Http\Controllers\OrderController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [\App\Http\Controllers\OrderController::class, 'index'])->name('cart');
    Route::post('/checkout', [\App\Http\Controllers\OrderController::class, 'checkout'])->name('checkout');
    Route::get('/card', [\App\Http\Controllers\OrderController::class, 'card'])->name('order.card');
    Route::get('/cash', [\App\Http\Controllers\OrderController::class, 'cash'])->name('order.cash');

    Route::post("/add-contact", [\App\Http\Controllers\OrderController::class, 'addContact'])->name('add.contact');

    Route::get("/admin/add-product", [\App\Http\Controllers\IconsController::class, 'newIcon'])
        ->name('product.new');
    Route::post("/admin/save-product", [\App\Http\Controllers\IconsController::class, 'saveNewIcon'])->name('product.save');
    Route::get("/admin/products/all", [\App\Http\Controllers\IconsController::class, 'allProducts'])->name('products.all');
    Route::get('/admin/delete/{icon}', [\App\Http\Controllers\IconsController::class, 'delete'])->name('product.delete');
    Route::get('/admin/edit/{icon}', [\App\Http\Controllers\IconsController::class, 'edit'])->name('product.edit');
    Route::put('/admin/update/{id}', [\App\Http\Controllers\IconsController::class, 'update'])->name('product.update');
    Route::get('/admin/contacts/all', [\App\Http\Controllers\ContactController::class, 'allContacts'])->name('all.contacts');
    Route::get('/admin/orders', [\App\Http\Controllers\OrderController::class, 'orders'])->name('all.orders');
    Route::get('/orders/{order}/edit', [\App\Http\Controllers\OrderController::class, 'edit'])->name('orders.edit');
    Route::put('/orders/{order}', [\App\Http\Controllers\OrderController::class, 'update'])->name('orders.update');
    Route::delete('/orders/{order}', [\App\Http\Controllers\OrderController::class, 'destroy'])->name('orders.destroy');
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
