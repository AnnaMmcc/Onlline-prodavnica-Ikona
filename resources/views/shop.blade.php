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

