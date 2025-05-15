@extends("layout")
@section("Naslov")
    Ikonopisna radionica-Andjel Sevic
@endsection
@section("Sadrzaj")
    <div class="card" style="width: 18rem;">
            <img src="{{ asset('storage/' . $id->image) }}" class="card-img-top" alt="{{$id->name}}">
            <div class="card-body">
                <h5 class="card-title">{{$id->name}}</h5>
                <p class="card-text">{{$id->description}}</p>
                <h6 class="card-text">{{$id->price}} RSD</h6>
                <a href="{{route('orders.create')}}" class="btn btn-primary">Kupi</a>
            </div>
    </div>
@endsection
