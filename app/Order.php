<?php

namespace App;

use App\Events\ProductUpdated;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products()
    {
        return $this->hasMany(OrderProduct::class);
    }
    protected $events = [
        'updated' => ProductUpdated::class
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
