<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AccommodationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;

Route::middleware(['admin', 'auth'])->group(function () {
    Route::get('/admin/accommodations', [AccommodationController::class, 'index'])->name('admin.accommodations.index');
    Route::get('/admin/accommodations/create', [AccommodationController::class, 'create'])->name('admin.accommodations.create');
    Route::post('/admin/accommodations', [AccommodationController::class, 'store'])->name('admin.accommodations.store');
    Route::get('/admin/accommodations/{id}/edit', [AccommodationController::class, 'edit'])->name('admin.accommodations.edit');
    Route::put('/admin/accommodations/{id}', [AccommodationController::class, 'update'])->name('admin.accommodations.update');
    Route::delete('/admin/accommodations/{id}', [AccommodationController::class, 'destroy'])->name('admin.accommodations.destroy');
});


Route::get('/booking', [BookingController::class, 'create'])->name('booking_create');


Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');


// Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/', [HomeController::class, 'index'])->name('home');

//Route::get('', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
