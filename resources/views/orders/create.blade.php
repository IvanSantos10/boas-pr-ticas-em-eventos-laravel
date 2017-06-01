@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Checkout</h3>
            {!! Form::open(['url' => route('orders.store'), 'method' => 'POST']) !!}
            <div class="form-group">
                {!! Form::submit('Criar', ['class' => 'btn btn-primary']) !!}
            </div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quant.</th>
                    <th>Price.</th>
                </tr>
                </thead>
                <tboby>
                    @foreach($products as $product)
                        <tr>
                            <td>
                                {!! Form::hidden("products[{$loop->index}][product_id]", $product->id) !!}
                                {{ $product->name  }}
                            </td>
                            <td>
                                {!! Form::hidden("products[{$loop->index}][quantity]", $quantity = rand(1,2)) !!}
                                {{ $quantity }}
                            </td>
                            <td>
                                {!! Form::hidden("products[{$loop->index}][price]", $product->price_sale) !!}
                                {{ $product->price_sale }}
                            </td>
                        </tr>
                    @endforeach
                </tboby>
            </table>
            {!! Form::close() !!}
        </div>
        <br/>
    </div>
@endsection

