<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\RedirectIfConsumer;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $users = User::all(); // Fetch all users from the database
    return view('dashboard', compact('users'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', RedirectIfConsumer::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('consumer-dashboard');
    })->name('consumer.dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
