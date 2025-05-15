@extends('layout')

@section('Sadrzaj')
    <div class="container">
        <h2>Način plaćanja</h2>

        <div class="alert alert-info">
            Ukupna cena: <strong>{{ number_format($total_price, 2) }} RSD</strong>
        </div>

        <form method="POST" action="{{ route('orders.store', $order->id) }}">
            @csrf

            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment_method" id="cash" value="cash" checked>
                <label class="form-check-label" for="cash">
                    Pouzećem
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment_method" id="card" value="card">
                <label class="form-check-label" for="card">
                    Karticom
                </label>
            </div>

            <a href="{{route("orders.show", ['order' => $order->id])}}" type="submit" class="btn btn-success mt-3">Završi kupovinu</a>
        </form>
    </div>
@endsection

