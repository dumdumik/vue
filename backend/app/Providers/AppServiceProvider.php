<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

}

Response::macro('api', function ($data = null, $message = '', $status = 200) {
    return response()->json([
        'success' => $status >= 200 && $status < 300,
        'message' => $message,
        'data' => $data,
    ], $status);
});
