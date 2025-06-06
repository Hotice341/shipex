<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ShipmentController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\SessionController;
use Illuminate\Http\Request;
use App\Models\Shipment;
use Carbon\Carbon;
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
            Route::put('/shipments/{shipment}/update', 'update')->name('shipments.update');

            // Delete
            Route::delete('/shipments/{shipment}/delete', 'destroy')->name('shipments.destroy');
        });

        // Shipments Api
        Route::get('/shipments-chart', function(Request $request) {
            sleep(1);
            $period = $request->input('period', 'current_month');

            $query = Shipment::select(
                DB::raw('DATE(created_at) as date'),
                DB::raw('COUNT(*) as total')
            )
                ->groupBy('date')
                ->orderBy('date');

            // Apply date filters
            $now = now();
            switch ($period) {
                case 'last_month':
                    $query->whereBetween('created_at', [
                        $now->clone()->subMonth()->startOfMonth(),
                        $now->clone()->subMonth()->endOfMonth()
                    ]);
                    break;
                case 'last_3_months':
                    $query->whereBetween('created_at', [
                        $now->clone()->subMonths(3)->startOfMonth(),
                        $now->clone()->endOfMonth()
                    ]);
                    break;
                case 'last_6_months':
                    $query->whereBetween('created_at', [
                        $now->clone()->subMonths(6)->startOfMonth(),
                        $now->clone()->endOfMonth()
                    ]);
                    break;
                case 'last_year':
                    $query->whereBetween('created_at', [
                        $now->clone()->subYear()->startOfYear(),
                        $now->clone()->endOfYear()
                    ]);
                    break;
                default: // current_month
                    $query->whereBetween('created_at', [
                        $now->clone()->startOfMonth(),
                        $now->clone()->endOfMonth()
                    ]);
            }

            $shipments = $query->get();

            // Format data for chart
            $labels = [];
            $totals = [];

            foreach ($shipments as $shipment) {
                $labels[] = Carbon::parse($shipment->date)->format('d M');
                $totals[] = (int) $shipment->total;
            }

            return response()->json([
                'labels' => $labels,
                'datasets' => [
                    [
                        'label' => 'Total Shipments',
                        'data' => $totals,
                    ]
                ]
            ]);
        });
        
        // Clear cache
        Route::get('/clear-cache', function() {
            Artisan::call('cache:clear');
            Artisan::call('view:clear');
            Artisan::call('route:clear');
            Artisan::call('config:clear');
            
            return redirect()->back()->with('success', 'All caches cleared successfully!');
        })->name('admin.clear-cache');
});

/*
|--------------------------------------------------------------------------
| Home Routes
|--------------------------------------------------------------------------
*/
Route::view('/', 'home.index');

/*
|--------------------------------------------------------------------------
| Tracking Routes
|--------------------------------------------------------------------------
*/
Route::get('/tracking', [ShipmentController::class, 'show'])->name('tracking');
