@extends('layout')

@section('Sadrzaj')
    <div class="container col-lg-6 mt-3">
        <h2>Izmeni porudžbinu #{{ $order->id }}</h2>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('orders.update', $order->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Status:</label>
                <input type="text" name="status" class="form-control" value="{{ old('status', $order->status) }}" required>
            </div>

            <div class="form-group mt-2">
                <label>Način plaćanja:</label>
                <select name="payment_method" class="form-control" required>
                    <option value="card" {{ $order->payment_method == 'card' ? 'selected' : '' }}>Kartica</option>
                    <option value="cash" {{ $order->payment_method == 'cash' ? 'selected' : '' }}>Pouzeće</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success mt-3">Sačuvaj izmene</button>
            <a href="{{ route('all.orders') }}" class="btn btn-secondary mt-3">Nazad</a>
        </form>
    </div>

@endsection
