@extends("layout")
@section("Naslov")
    Иконописна радионица Анђел Шевић
@endsection

@section('meta_description', 'Kupite unikatne ručno rađene pravoslavne ikone iz naše galerije. Tradicija, umetnost i duhovnost spojeni u ikonama.')

@section("Sadrzaj")
    <div class="container d-flex flex-column align-items-center justify-content-start mt-1">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('storage/images/za sajt_8ac40d91-1255-47b2-863e-f8c32c1414b6.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/images/IsusHristosPocetna.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <div class="ikonopis-uvod text-center mb-5">
                <p class="ikonopis-citat">
                    „Икона је ствар божанствена, но не и обожена.“
                </p>
                <a href="/about" class="ikonopis-link">Сазнај више о значењу иконе... &rarr;</a>
            </div>
            <div class="ikonopis-uvod text-center m-5">
                <a href="{{route('info')}}" class="ikonopis-link">Како поручити икону ?&rarr;</a>
            </div>
        </div>

@endsection
