@extends('layout')
@section('Naslov')
    Плаћање|поузећем|Иконописна радионица-Анђел Шевић
@endsection
@section('Sadrzaj')
    @php
        $order = \App\Models\Order::find(session('order_id'));
    @endphp
<div class="container text-center m-3">
    <h2><strong>Плаћање поузећем</strong></h2>
    <p>Хвала на поруџбини!</p>
    <p>Износ: <strong>{{ $order->total_price }} РСД</strong></p>
    <p>Контактираћемо Вас ради потврде поруџбине. Поруџбина стиже у року од 3-5 радних дана.Платите куриру приликом доставе наведени износ + цена доставе.</p>
    <a href="/" class="btn btn-warning w-100 text-white fw-bold">Врати ме на почетну</a>
</div>

@endsection
