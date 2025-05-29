@extends('layout')
@section('Naslov')
    Placanje/Pouzecem-Ikonopisna radionica-Andjel Sevic
@endsection
@section('Sadrzaj')
    @php
        $order = \App\Models\Order::find(session('order_id'));
    @endphp
<div class="container text-center m-3">
    <h2><strong>Plaćanje pouzećem</strong></h2>
    <p>Hvala na narudžbini!</p>
    <p>Iznos: <strong>{{ $order->total_price }} RSD</strong></p>
    <p>Platite kuriru prilikom dostave. Kontaktiraćemo vas uskoro radi potvrde narudzbine.</p>
</div>

@endsection
