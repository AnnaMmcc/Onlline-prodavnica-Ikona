@extends('layout')
@section('Naslov')
    Sve ikone-Ikonopisna radionica-Andjel Sevic
@endsection
@section('Sadrzaj')
    @if(session('success'))
        <div class="alert alert-succes">
            {{session('success')}}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
        <tr class="col-10">
            <th>ID</th>
            <th>Email</th>
            <th>Ime</th>
            <th>Telefon</th>
            <th>Status</th>
            <th>Ukupna cena</th>
            <th>Nacin placanja</th>
            <th>Akcije</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)

            <tr><td>{{$order->id}}</td>
                <td>{{$order->user->email ?? 'N/A'}}</td>
                <td>{{$order->user->name ?? 'N/A'}}</td>
                <td>{{$order->user->phone ?? 'N/A'}}</td>
                <td>{{$order->status}}</td>
                <td>{{$order->total_price}}</td>
                <td>{{$order->payment_method}}</td>
                <td>
                    <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-primary">Edituj</a>
                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Da li ste sigurni da želite da obrišete porudžbinu?')">Obriši</button>
                    </form>
                </td>
            </tr>

            <tr>
                <td colspan="8">
                    <strong>Stavke porudžbine:</strong>
                    <ul>
                        @foreach($order->items as $item)
                            <li>
                                {{ $item->name }} — {{ $item->pivot->quantity }} kom x {{ $item->pivot->price }} RSD
                                = {{ $item->pivot->quantity * $item->pivot->price }} RSD
                            </li>
                        @endforeach
                    </ul>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>
@endsection

