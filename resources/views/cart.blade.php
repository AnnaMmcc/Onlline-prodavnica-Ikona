@extends("layout")
@section("Naslov")
    Cart - Web Shop
@endsection()
@section("Sadrzaj")
    @if(session('success'))
        <div class="text-success">{{ session('success') }}</div>
    @endif
    <div class="container">
        <div class="row">
            @foreach($combinedItems as $item)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 mt-2">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $item['name'] }}</h5>
                            <p class="card-text">Opis: {{ $item['description'] }}</p>
                            <p class="card-text">Kolicina: {{ $item['amount'] }}</p>
                            <p class="card-text">Cena: {{ $item['price'] }}</p>
                            <p class="card-text">Ukupno: {{ $item['total'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div>
            <form method="POST" action="{{ route('checkout') }}">
                @csrf

                <p>Izaberite način plaćanja:</p>
                <label><input type="radio" name="payment_method" value="card" required> Kartica</label><br>
                <label><input type="radio" name="payment_method" value="cash" required> Gotovina (pouzećem)</label><br><br>

                <div>
                    <label for="phone">Broj telefona za potvrdu narudžbine:</label><br>
                    <input type="text" name="phone" id="phone" value="{{ old('phone', auth()->user()->phone ?? '') }}" required>
                </div>
                <br>

                <button type="submit">Završi narudžbinu</button>
            </form>
        </div>
    </div>
@endsection()
