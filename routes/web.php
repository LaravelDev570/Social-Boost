<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\User\DashboardController as UserDashboard;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // Fallback Dashboard Route
    Route::get('/dashboard', [AuthController::class, 'dashboardRedirect'])->name('dashboard');

    // Admin Routes
    Route::middleware('role:admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('dashboard');
        Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class)->except(['show']);
        Route::resource('services', \App\Http\Controllers\Admin\ServiceController::class)->except(['show']);
        Route::resource('countries', \App\Http\Controllers\Admin\CountryController::class)->except(['show']);
        
        // Users Management
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class)->only(['index', 'edit', 'destroy']);
        Route::put('users/{user}/role', [\App\Http\Controllers\Admin\UserController::class, 'updateRole'])->name('users.update_role');
        
        // Admin Requests
        Route::get('/requests', [\App\Http\Controllers\Admin\RequestController::class, 'index'])->name('requests.index');
        Route::get('/requests/{request}', [\App\Http\Controllers\Admin\RequestController::class, 'show'])->name('requests.show');
        Route::put('/requests/{request}/status', [\App\Http\Controllers\Admin\RequestController::class, 'updateStatus'])->name('requests.update_status');
        
        // Placeholders for remaining modules
        Route::get('/messages', function() { return view('admin.messages.index'); })->name('messages.index');
        Route::get('/settings', function() { return view('admin.settings.index'); })->name('settings.index');
    });

    // User Routes
    Route::middleware('role:user')->prefix('user')->name('user.')->group(function () {
        Route::get('/dashboard', [UserDashboard::class, 'index'])->name('dashboard');
        
        // User Requests
        Route::resource('requests', \App\Http\Controllers\User\RequestController::class)->except(['edit', 'update', 'destroy']);
        
        // Messages
        Route::get('/messages', function() { return view('user.messages'); })->name('messages.index');

        // Notifications placeholder
        Route::get('/notifications', function() { return view('user.notifications'); })->name('notifications.index');

        // Profile
        Route::get('/profile', [\App\Http\Controllers\User\ProfileController::class, 'index'])->name('profile.index');
        Route::put('/profile', [\App\Http\Controllers\User\ProfileController::class, 'update'])->name('profile.update');
        Route::put('/profile/password', [\App\Http\Controllers\User\ProfileController::class, 'updatePassword'])->name('profile.password');
    });
});
