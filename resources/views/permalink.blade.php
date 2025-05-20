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
                <form method="POST" action="{{ route("cart.add") }}">
                    {{ csrf_field() }}
                    @if(session('error'))
                        <div class="text-danger">{{ session('error') }}</div>
                    @endif

                    <input type="hidden" name="id" value="{{ $id->id }}">
                    <div class="form-group card-text">
                        <label for="amount">Amount:</label>
                        <input required type="number" class="form-control" id="amount" name="amount"  placeholder="Kolicina..">
                    </div>
                    <button class="btn btn-primary m-3 card-text">Dodaj u korpu</button>

                </form>

            </div>
    </div>
@endsection
