@extends('layout')
@section('Naslov')
    Placanje/Pouzecem-Ikonopisna radionica-Andjel Sevic
@endsection
@section('Sadrzaj')
    @php
        $order = \App\Models\Order::find(session('order_id'));
    @endphp

    <h2>Plaćanje pouzećem</h2>
    <p>Hvala na narudžbini!</p>
    <p>Iznos: <strong>{{ $order->total_price }} RSD</strong></p>
    <p>Platite kuriru prilikom dostave. Kontaktiraćemo vas uskoro.</p>
@endsection
