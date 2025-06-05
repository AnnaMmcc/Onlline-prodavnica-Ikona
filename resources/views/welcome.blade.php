@extends("layout")
@section("Naslov")
    Ikonopisna radionica-Andjel Šević
@endsection
@section("Sadrzaj")
    <div class="container d-flex flex-column align-items-center justify-content-start mt-1">
        <div class="ikonopis-uvod text-center mb-5">
            <p class="ikonopis-citat">
                „Ikona nije samo umetnost — ona je prozor u Carstvo nebesko.“
            </p>
            <a href="/about" class="ikonopis-link">Saznaj više o značenju ikone &rarr;</a>
        </div>

        <form action="{{ route('icon.search') }}" method="GET" class="w-100 mb-4 p-4 border rounded shadow bg-white" style="max-width: 900px;">
            {{ csrf_field() }}
            <div class="row g-3">
                <div class="col-md-6 col-lg-4">
                    <input type="text" name="query" class="form-control" placeholder="Pretraži ikone..." value="{{ request('query') }}">
                </div>
                <div class="col-md-3 col-lg-2">
                    <input type="number" name="min_price" class="form-control" placeholder="Min cena..." value="{{ request('min_price') }}">
                </div>
                <div class="col-md-3 col-lg-2">
                    <input type="number" name="max_price" class="form-control" placeholder="Max cena..." value="{{ request('max_price') }}">
                </div>
                <div class="col-md-12 col-lg-4">
                    <button type="submit" class="btn btn-warning w-100 text-white fw-bold">
                        Filtriraj
                    </button>
                </div>
            </div>
        </form>

        @if($LastIcons->count() > 0)
            <div class="row w-100 justify-content-center">
                @foreach($LastIcons as $Icon)
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4 d-flex align-items-stretch">
                        <div class="card h-100 shadow-sm border-0 hover-shadow transition">
                            <img src="{{ asset('storage/' . $Icon->image) }}" class="card-img-top" alt="{{ $Icon->name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $Icon->name }}</h5>
                                <p class="card-text text-muted small">{{ $Icon->description }}</p>
                                <p class="card-text fw-bold mt-auto">{{ $Icon->price }} din</p>
                                <a class="btn btn-warning w-100 text-white fw-bold" href="/shop">Pogledaj galeriju</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-info mt-4 w-100 text-center" role="alert">
                Nema pronađenih ikona za zadate kriterijume.
            </div>
        @endif

    </div>
    <div class="d-flex justify-content-center mt-4" id="loadingSpinner" style="display: none;">
        <div class="spinner-border text-warning" role="status">
            <span class="visually-hidden">Učitavanje...</span>
        </div>
    </div>
@endsection
