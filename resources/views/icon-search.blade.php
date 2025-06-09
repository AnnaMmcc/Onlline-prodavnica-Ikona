@extends("layout")
@section("Naslov")
    Претрага|Иконописна радионица-Анђел Шевић
@endsection
@section("Sadrzaj")
  <div class="container">
      <h2>Rezultati pretrage za: "{{$query}}"</h2>
      @if($results->count())
          <div class="row">
              @foreach($results as $icon)
                  <div class="col-md-4">
                      <div class="card">
                          <img src="{{ asset('storage/' . $icon->image) }}" alt="{{$icon->name}}" class="card-img-top">
                          <div class="card-body">
                              <h5 class="cart-title">{{$icon->name}}</h5>
                              <p class="cart-title">{{$icon->desription}}</p>
                              <p class="cart-title">{{$icon->price}} RSD</p>
                              <a href="{{route('permalink', ['id' => $icon->id])}}" class="btn btn-primary" type="button">Pogledaj</a>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
      @else
          <p>Nema rezultata sa zadatim pojmom</p>
      @endif
  </div>
@endsection
