@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Entradas de Estoques</h3>
            <a href="{{route('stock_entries.create')}}" class="btn btn-primary">Novo</a>
        </div>
        <br/>
        @include('stock-movements._create')
    </div>
@endsection