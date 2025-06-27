@extends("layout")
@section("Naslov")
    Икона|Иконописна радионица-Анђел Шевић
@endsection
@section("Sadrzaj")
    <div class="container d-flex justify-content-center align-items-center mt-3">
        <div class="card w-100 w-sm-75 w-md-50 mx-auto">
            <img src="{{ asset('storage/' . $id->image) }}" class="card-img-top" alt="{{$id->name}}">
            <div class="card-body">
                <h5 class="card-title">{{$id->name}}</h5>
                <p class="card-text">{{$id->description}}</p>
                <h6 class="card-text"><strong>{{$id->price}} RSD</strong></h6>
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
                    <a href="{{ route('register', ['redirect' => request()->fullUrl()]) }}" class="btn btn-warning w-100 text-white fw-bold" title="Улогујте се да бисте додали у корпу">
                        Додај у корпу
                    </a>

                @endauth

            </div>
        </div>
    </div>

@endsection
