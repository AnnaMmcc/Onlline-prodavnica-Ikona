@extends("layout")
@section("Naslov")
    Икона|Иконописна радионица-Анђел Шевић
@endsection
@section("Sadrzaj")
    <div class="container d-flex justify-content-center align-items-center mt-3">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('storage/' . $id->image) }}" class="card-img-top" alt="{{$id->name}}">
            <div class="card-body">
                <h5 class="card-title">{{$id->name}}</h5>
                <p class="card-text">{{$id->description}}</p>
                <h6 class="card-text">{{$id->price}} RSD</h6>
                @auth
                    <form method="POST" action="{{ route('cart.add') }}">
                        {{ csrf_field() }}
                        @if(session('error'))
                            <div class="text-danger">{{ session('error') }}</div>
                        @endif
                        <input type="hidden" name="amount" value="1">
                        <input type="hidden" name="id" value="{{ $id->id }}">
                        <button class="btn btn-warning w-100 text-white fw-bold">
                            Додај у корпу
                        </button>
                    </form>
                @else
                    <a href="{{ route('register') }}" class="btn btn-warning w-100 text-white fw-bold" title="Направите налог да бисте додали икону у корпу">
                        Додај у корпу
                    </a>
                @endauth

            </div>
        </div>
    </div>

@endsection
