<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ShipmentController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\SessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Route::controller(AuthController::class)
    ->middleware('guest')
    ->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'login')->name('login.store');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')
    ->middleware('auth')
    ->controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');

        // Account Profile
        Route::get('/profile', 'profilePage')->name('profile');
        Route::patch('/profile', 'updateProfile')->name('profile.update');

        // Password
        Route::patch('/password/update', 'updatePassword')->name('password.update');

        // Test Email
        Route::post('/profile/send/test-email', 'sendTest')->name('send.test.email');

        // Logout
        Route::post('/logout', 'logout')->name('logout');

        // Sessions
        Route::post('/sessions/logout/{sessionId}', [SessionController::class, 'logoutSession'])->name('sessions.logout');
        Route::post('/sessions/logout-all', [SessionController::class, 'logoutAllSessions'])->name('sessions.logout-all');

        // Shipment Resource Route
        Route::controller(ShipmentController::class)->group(function () {

            Route::get('/shipments', 'index')->name('shipments');

            // Add
            Route::get('/shipments/create', 'create')->name('shipments.create');
            Route::post('/shipments/store', 'store')->name('shipments.store');

            // Show
            Route::get('/shipments/{shipment}', 'show')->name('shipments.show');

            // Edit
            Route::get('/shipments/{shipment}/edit', 'edit')->name('shipments.edit');
            Route::patch('/shipments/{shipment}/update', 'update')->name('shipments.update');

            // Delete
            Route::delete('/shipments/{shipment}/delete', 'destroy')->name('shipments.destroy');
        });

        // Shipment Reports
        Route::get('/shipments/reports', 'reports')->name('reports');
});

/*
|--------------------------------------------------------------------------
| Home Routes
|--------------------------------------------------------------------------
*/
Route::view('/', 'home.index');
Route::view('/about-us', 'home.about');
Route::view('/faq', 'home.faq');

/*
|--------------------------------------------------------------------------
| Tracking Routes
|--------------------------------------------------------------------------
*/
Route::view('/tracking', 'tracking.index');
