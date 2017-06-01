<?php

namespace App\Listeners;

use App\Events\ProductUpdated;
use App\Mail\StockLessMin;

class ChechStockMinListener
{
    /**
     * Handle the event.
     *
     * @param  ProductUpdated  $event
     * @return void
     */
    public function handle(ProductUpdated $event)
    {
        $product = $event->getProduct();
        if($product->stock  < ($product->stock_max*0.1 )){
            \Mail::to(env('MAIL_STOCK'))->send(new StockLessMin($product));
        }

        /*
        $product = $event->getProduct();
        $productOld = Product::find($product->id);
        if($product->stock < $productOld->stock && $product->stock < $product->stock_max){
            \Mail::to(env('MAIL_STOCK'))->send(new StockLessMin($product));
        }
        */

    }
}
