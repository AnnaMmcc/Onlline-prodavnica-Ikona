@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detalji porudžbine #{{ $order->id }}</h2>

        <p><strong>Status:</strong> {{ $order->status }}</p>
        <p><strong>Način plaćanja:</strong> {{ $order->payment_method }}</p>
        <p><strong>Ukupna cena:</strong> {{ number_format($order->total_price, 2) }} RSD</p>

        <hr>

        <h4>Stavke porudžbine:</h4>
        <table class="table">
            <thead>
            <tr>
                <th>Proizvod</th>
                <th>Količina</th>
                <th>Cena (po komadu)</th>
                <th>Ukupno</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->items as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->pivot->quantity }}</td>
                    <td>{{ number_format($product->pivot->price, 2) }} RSD</td>
                    <td>{{ number_format($product->pivot->price * $product->pivot->quantity, 2) }} RSD</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <a href="{{ route('cart.index') }}" class="btn btn-secondary">Nazad na korpu</a>
    </div>
@endsection
