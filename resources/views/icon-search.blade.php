@extends("layout")
@section("Naslov")
    Претрага|Иконописна радионица-Анђел Шевић
@endsection
@section("Sadrzaj")
    <div class="container text-center my-5">
        <h2 class="mb-5 display-5">Резултати претраге за: "{{$query}}"</h2>
        @if($results->count())
            <div class="row justify-content-center">
                @foreach($results as $icon)
                    <div class="col-12 col-md-6 col-lg-5 mb-5 d-flex align-items-stretch">
                        <div class="card shadow-lg large-card w-100">
                            <img src="{{ asset('storage/' . $icon->image) }}" alt="{{ $icon->name }}" class="large-card-img">
                            <div class="card-body d-flex flex-column">
                                <h5 class="large-card-title">{{ $icon->name }}</h5>
                                <p class="large-card-text">{{ $icon->description }}</p>
                                <a href="{{ route('info') }}" class="btn btn-warning large-btn mt-auto text-white fw-bold">Како да поручим?</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="mt-5 fs-3">Нема резултата са задатим појмом</p>
        @endif
    </div>
@endsection



