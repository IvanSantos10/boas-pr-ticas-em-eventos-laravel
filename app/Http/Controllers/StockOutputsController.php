<?php

namespace App\Http\Controllers;

use App\Product;
use App\StockEntry;
use App\StockOutput;
use Illuminate\Http\Request;

class StockOutputsController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movements = StockOutput::all();
        return view('stock-outputs.index', compact('movements'));
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all()->pluck('name', 'id');
        return view('stock-outputs.create', compact('products'));
    }

    public function store(Request $request)
    {
        $data = array_except($request->all(), '_token');
        $entry = StockOutput::forceCreate($data);
        //$product = $entry->product;
        //$product->stock = $product->stock + $entry->quantity;
       // $product->save();
        return redirect()->route('stock_outputs.index');
    }
}
