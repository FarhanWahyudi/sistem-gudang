<?php

namespace App\Providers;

use App\Services\Impl\StockServiceImpl;
use App\Services\StockService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class StockProvider extends ServiceProvider implements DeferrableProvider
{
    public array $singletons = [
        StockService::class => StockServiceImpl::class
    ];

    public function provides(): array
    {
        return [StockService::class];
    }
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
        //
    }
}
