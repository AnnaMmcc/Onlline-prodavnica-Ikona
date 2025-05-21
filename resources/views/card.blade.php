@extends("layout")
@section("Naslov")
    Placanje/racun-Ikonopisna radionica-Andjel Sevic
@endsection
@section("Sadrzaj")
    @php
        $order = \App\Models\Order::find(session('order_id'));
    @endphp

    <h2>Uplata karticom</h2>
    <p>Hvala na narudžbini!</p>
    <p>Iznos za uplatu: <strong>{{ $order->total_price }} RSD</strong></p>
    <p>Uplatite na račun: <strong>123-456789-00</strong></p>
    <p>Kontaktiraćemo vas uskoro za potvrdu.</p>
@endsection



