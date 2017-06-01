<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\StockEntryCreated' => [
            'App\Listeners\IncrementStockListener',
        ],
        'App\Events\StockOutputCreated' => [
            'App\Listeners\DecrementStockFromOutputListener',
        ],
        'App\Events\ProductUpdated' => [
            'App\Listeners\ChechStockMaxListener',
            'App\Listeners\ChechStockMinListener',
        ],
        'App\Events\OrderProductsSaveCompleted' => [
            'App\Listeners\CalculateTotalOrderListener',
        ],
        'App\Events\OrderProductCreated' => [
            'App\Listeners\DecrementStockFromCheckoutListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
