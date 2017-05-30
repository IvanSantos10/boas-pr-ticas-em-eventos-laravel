@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Products</h3>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="...">#</th>
                    <th>Nome</th>
                    <th>Quant.</th>
                    <th>Quant. Max.</th>
                    <th>Preço Venda</th>
                    <th>Preço Compra</th>
                </tr>
                </thead>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->stock_max }}</td>
                        <td>{{ $product->stock_sale }}</td>
                        <td>{{ $product->stock_purchase }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection