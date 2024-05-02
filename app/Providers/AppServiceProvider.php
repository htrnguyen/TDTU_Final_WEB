<?php

namespace App\Providers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Log::listen(function ($level, $message, $context) {
            // Output log messages to the terminal
            $output = "[" . strtoupper($level) . "] " . $message;
            if (!empty($context)) {
                $output .= ' ' . json_encode($context);
            }
            echo $output . PHP_EOL;
        });
    }
}
