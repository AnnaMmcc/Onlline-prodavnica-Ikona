@extends("layout")
@section("Naslov")
    O nama-Ikonopisna radionica-Andjel Sevic
@endsection
@section("Sadrzaj")
    <div class="container mt-4">
        <div class="card" style="width: 18rem;">
            @foreach($allIcons as $icon)
                <img src="{{ url('storage/' . $icon->image) }}" class="card-img-top" alt="{{$icon->name}}">
                <div class="card-body">
                    <h5 class="card-title">{{$icon->name}}</h5>
                    <p class="card-text">{{$icon->description}}</p>
                    <h6 class="card-text">{{$icon->price}} RSD</h6>
                    <a href="{{route('permalink', ['id' => $icon->id])}}" class="btn btn-primary">Pogledaj</a>
                    @endforeach
                </div>
        </div>
    </div>

@endsection

