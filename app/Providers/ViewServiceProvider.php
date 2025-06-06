<?php

namespace App\Providers;

use App\Models\Shipment;
use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $this->shareCommonData($view);
        });
    }

    /**
     * @param $view
     * @return void
     */
    protected function shareCommonData($view): void
    {
        $view->with([
            'shipmentsCount' => Shipment::count(),
        ]);
    }
}
