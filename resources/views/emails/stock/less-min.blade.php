@component('mail::message')
    # Olá

    O estoque de {{$product->name}} está abaixo do mínimo permitido.

    Estoque Atual: {{$product->stock}}}

    Estoque Mínimo: {{intval($product->stock_max*0.1)}}}

    @component('mail::button', ['url' => ''])
    Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
