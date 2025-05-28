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
                        <label for="amount">Kolicina:</label>
                        <input required type="number" class="form-control" id="amount" name="amount"  placeholder="Kolicina..">
                    </div>
                    <button class="mt-3 hover inline-flex items-center px-4 py-2 gold-bg dark:gold-bg border border-transparent
                     rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:gold-bg
                     dark:hover:gold-bg  focus:bg-white active:light-bg dark:active:gold-bg focus:outline-none
                     focus:ring-2  dark:focus:ring-offset-white transition
                    ease-in-out duration-150">
                        Dodaj u korpu</button>

                </form>

            </div>
    </div>
@endsection
