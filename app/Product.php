<?php

namespace App;

use App\Events\ProductUpdated;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'stock', 'stock_max', 'price_sale', 'price_purchase'
    ];

    protected $events = [
        'updated' => ProductUpdated::class
    ];

}
