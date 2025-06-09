@extends("layout")
@section("Naslov")
    Плаћање картицом Иконописна радионица Анђел Шевић
@endsection
@section("Sadrzaj")
    @php
        $order = \App\Models\Order::find(session('order_id'));
    @endphp

    <h2>Уплата картицом</h2>
    <p>Хвала на поруџбини!</p>
    <p>Износ за уплату: <strong>{{ $order->total_price }} РСД</strong></p>
    <p>Уплатите на рачун: <strong>123-456789-00</strong></p>
    <p>Контактираћемо Вас ускоро ради потврде наруџбине. Након што уплатите новац на рачун, шаљемо Вам пакет курирском службом.</p>
    <a href="/" class="btn btn-warning w-100 text-white fw-bold">Врати ме на почетну</a>
@endsection



