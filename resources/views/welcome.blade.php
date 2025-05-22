@extends("layout")
@section("Naslov")
    Ikonopisna radionica-Andjel Šević
@endsection
@section("Sadrzaj")
    <div class="container mt-3">
        <form action="{{route('icon.search')}}" method="GET" class="row mb-4">
            {{csrf_field()}}
            <div class="col-md-4">
                <input type="text" name="query" class="form-control" placeholder="Pretrazi ikone.." value="{{ request('query') }}">
            </div>
            <div class="col-md-2">
                <input type="number" name="min_price" class="form-control" placeholder="Min cena.." value="{{ request('min_price') }}">
            </div>
            <div class="col-md-2">
                <input type="number" name="max_price" class="form-control" placeholder="Max cena.." value="{{ request('max_price')}}">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn w-100 gold-bg  text-brown border-brown">Filtriraj</button>
            </div>

        </form>
    </div>
    <div class="container d-flex flex-wrap mt-4">
        <div class="card" style="width: 18rem;">
        @foreach($LastIcons as $Icon)
                <img src="{{ asset('storage/' . $Icon->image) }}" class="card-img-top" alt="{{$Icon->name}}">
                <div class="card-body">
                    <h5 class="card-title">{{$Icon->name}}</h5>
                    <p class="card-text">{{$Icon->description}}</p>
                    <p class="card-text">{{$Icon->price}} din</p>
                </div>
        @endforeach
        </div>
    </div>
@endsection


