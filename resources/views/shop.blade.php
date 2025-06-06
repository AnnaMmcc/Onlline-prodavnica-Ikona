@extends("layout")
@section("Naslov")
    O nama-Ikonopisna radionica-Andjel Sevic
@endsection
@section("Sadrzaj")
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
    <div class="container mt-4">
        <div class="card" style="width: 18rem;">
            @foreach($allIcons as $icon)
                <img src="{{ url('storage/' . $icon->image) }}" class="card-img-top" alt="{{$icon->name}}">
                <div class="card-body">
                    <h5 class="card-title">{{$icon->name}}</h5>
                    <p class="card-text">{{$icon->description}}</p>
                    <h6 class="card-text">{{$icon->price}} RSD</h6>
                    <a href="{{route('permalink', ['id' => $icon->id])}}"
                       class="mt-3 hover inline-flex items-center px-4 py-2 gold-bg dark:gold-bg border border-transparent
                       rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:gold-bg dark:hover:gold-bg
                       focus:bg-white active:light-bg dark:active:gold-bg focus:outline-none focus:ring-2  dark:focus:ring-offset-white
                       transition ease-in-out duration-150"
                    >Pogledaj</a>
                    @endforeach
                </div>
        </div>
    </div>

@endsection

