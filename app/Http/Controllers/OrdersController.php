<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderProduct;
use App\Product;
use Illuminate\Http\Request;

class OrdersController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all()->random(4);

        return view('orders.create', compact('products'));
    }

    public function store(Request $request)
    {
        $order = Order::forceCreate([
           'user_id' => \Auth::user()->id,
        ]);

        foreach ($request->get('products') as $orderProduct) {
            $product = Product::find($orderProduct['product_id']);
            OrderProduct::forceCreate([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'price' => $product->price_sale,
                'quantity' => $orderProduct['quantity']
            ]);
        }

        return view('orders.successfully', compact('order'));
    }
}
