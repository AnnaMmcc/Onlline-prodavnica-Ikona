@extends("layout")
@section("Naslov")
    Ikonopisna radionica-Andjel Šević
@endsection
@section("Sadrzaj")
    <div class="container d-flex flex-column align-items-center justify-content-start mt-1">
        <div class="ikonopis-uvod text-center mb-5">
            <p class="ikonopis-citat">
                „Икона је ствар божанствена, но не и обожена.“ - А.Ш.
            </p>
            <a href="/about" class="ikonopis-link">Сазнај више о значењу иконе... &rarr;</a>
        </div>

        @if($LastIcons->count() > 0)
            <div class="row w-100 justify-content-center">
                @foreach($LastIcons as $Icon)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex align-items-stretch">
                        <div class="card h-100 shadow-sm border-0 hover-shadow transition">
                            <img src="{{ asset('storage/' . $Icon->image) }}" class="card-img-top" alt="{{ $Icon->name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $Icon->name }}</h5>
                                <p class="card-text text-muted small">{{ $Icon->description }}</p>
                                <p class="card-text fw-bold mt-auto">{{ $Icon->price }} дин</p>
                                <a class="btn btn-warning w-100 text-white fw-bold" href="/shop">Погледај галерију</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-info mt-4 w-100 text-center" role="alert">
                Нема пронађених икона за задате критеријуме.
            </div>
        @endif

    </div>
    <div class="d-flex justify-content-center mt-4" id="loadingSpinner" style="display: none;">
        <div class="spinner-border text-warning" role="status">
            <span class="visually-hidden">Учитавање...</span>
        </div>
    </div>
@endsection
