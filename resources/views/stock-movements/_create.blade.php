<div class="form-group">
    {!! Form::lable('quantity', 'Quant.', ['class' => 'control-label']) !!}
    {!! Form::text('quantity', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::lable('product_id', 'Produto.', ['class' => 'control-label']) !!}
    {!! Form::text('product_id', $product, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Criar', ['class' => 'btn btn-primary']) !!}
</div>