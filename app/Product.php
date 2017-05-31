<?php

namespace App;

use App\Events\ProductUpdating;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'stock', 'stock_max', 'price_sale', 'price_purchase'
    ];

    protected $events = [
        'updating' => ProductUpdating::class
    ];

}
