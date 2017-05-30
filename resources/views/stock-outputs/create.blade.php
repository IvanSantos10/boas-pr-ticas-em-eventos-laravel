@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Criar saida</h3>
            {!! Form::open(['url' => route('stock_outputs.store'), 'method' => 'POST']) !!}
                @include('stock-movements._create')
            {!! Form::close() !!}
        </div>
    </div>
@endsection