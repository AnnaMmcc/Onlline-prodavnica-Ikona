@extends('layout')

@section('Naslov')
    Sve ikone - Ikonopisna radionica - Andjel Sevic
@endsection

@section('Sadrzaj')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Ime</th>
                <th>Telefon</th>
                <th>Status</th>
                <th>Ukupna cena</th>
                <th>Način plaćanja</th>
                <th>Akcije</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->email ?? 'N/A' }}</td>
                    <td>{{ $order->user->name ?? 'N/A' }}</td>
                    <td>{{ $order->user->phone ?? 'N/A' }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ $order->total_price }} RSD</td>
                    <td>{{ $order->payment_method }}</td>
                    <td>
                        <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-primary btn-sm">Edituj</a>
                        <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Da li ste sigurni da želite da obrišete porudžbinu?')">Obriši</button>
                        </form>
                    </td>
                </tr>


                <tr>
                    <td colspan="8">
                        <strong>Stavke porudžbine:</strong>
                        <ul class="mb-0">
                            @foreach($order->items as $item)
                                <li>
                                    {{ $item->name }} — {{ $item->pivot->quantity }} kom × {{ $item->pivot->price }} RSD =
                                    {{ $item->pivot->quantity * $item->pivot->price }} RSD
                                </li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


