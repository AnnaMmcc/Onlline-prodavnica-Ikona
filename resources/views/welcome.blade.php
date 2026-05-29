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
                    <img src="{{ asset('storage/images/za sajt_8ac40d91-1255-47b2-863e-f8c32c1414b6.webp') }}" class="d-block w-100" alt="Andjel Sevic slika">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/images/САјт%202_e36a3221-3251-4db3-b2cf-c17313f765b0~2.webp') }}" class="d-block w-100" alt="Isus Hristos ikona - citat">
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

              <div class="container my-5">

    <!-- 🔶 GORNJI VLASNIK -->
    <div class="text-box owner-box mb-4">
        <p>
            У нашем атељеу, процес стварања тече као и пре више од две хиљаде година - онако како је Свети Лука писао прве иконе. Користимо квалитетне даске, грундиране руком врхунских мајстора, писане јајчаном темпером и природним пигментима, позлаћене златним листићима 23.75 или 24 карата и лакиране по жељи.
        </p>
    </div>

    <!-- 🔷 4 SVETLA CITAATA -->
    <div class="row g-4">

        <div class="col-md-6">
            <div class="quote-card light">
                <p>
                    Од свих видова сведочанстава Православље у наше дане, да ли је нешто силније и убедљивије уверило свет, све хришћанске земље са духовно различитим традицијама, од безгласне, а тако красноречиве проповеди православне иконе?
                </p>
                <span>— Архимандрит Зинон</span>
            </div>
        </div>

        <div class="col-md-6">
            <div class="quote-card light">
                <p>
                    Икона ништа не представља, она јавља. Она је јављање Царства Христовог, јављање преображене, обожене твари, самог преображеног човечанства, које је својом личношћу јавио Христос.
                </p>
                <span>— Архимандрит Зинон</span>
            </div>
        </div>

        <div class="col-md-6">
            <div class="quote-card light">
                <p>
                    У периоду иконоборства Црква се борила за икону, а у наше време икона се бори за Цркву.
                </p>
                <span>— Леонид Успенски</span>
            </div>
        </div>

        <div class="col-md-6">
            <div class="quote-card light">
                <p>
                    Икона је слика неког догађаја у вечности, у којем ми активно учествујемо у садашњем тренутку - и тиме исповедамо Бога.
                </p>
                <span>— Архимандрит Зинон</span>
            </div>
        </div>

    </div>

    <!-- 🔶 DONJI VLASNIK -->
    <div class="text-box owner-box mt-4">
        <p>
            Икона није украс који уносимо у домове и уклапамо у ентеријере, боје зидова и намештај. Она је огледало, али и портал између вечности и садашњости. Икона је слика неког догађаја у вечности, у којем ми активно учествујемо у садашњем тренутку - и тиме исповедамо Бога.

            Старозаветна забрана сликања Бога није укинута у новозаветно време. Ми смо могућност сликања Бога добили тек након што је Реч постала тело, постала видљива и опипљива. По Божанству Христос је неописив и немогуће га је насликати, но како су се у Исусу Христу божанска и човечанска суштина (природа) сјединиле несливено и нераздељиво у једну Личност, ми сликамо Богочовека Христа, који је ради нашега спасења дошао у свет и који ће и њему пребивати до свршетка века.
        </p>
    </div>
<div class="video-wrapper my-5 text-center">
    <video class="ikonopis-video" autoplay muted loop playsinline>
        <source src="/videos/atelje.mp4" type="video/mp4">
    </video>
</div>
</div>

                <div class="ikonopis-uvod text-center my-5 px-3 px-md-5">
                    <a href="{{route('info')}}" class="ikonopis-link">Како поручити икону ? &rarr;</a>
                </div>
            <h4 class="mt-5 mb-3 text-center ikonopis-tekst">ДОСУПНЕ ИКОНЕ</h4>
            <div class="row justify-content-center">
                @foreach($availableIcons as $icon)
                    <div class="col-md-6 col-lg-4 mb-4 d-flex">
                        <div class="card w-100 h-100 hover-shadow transition">
                            <img src="{{ url('storage/' . $icon->image) }}" class="card-img-top" alt="{{ $icon->name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $icon->name }}</h5>
                                <p class="card-text">{{ $icon->description }}</p>
                                <h6 class="card-text"><strong>{{ $icon->price }} дин</strong></h6>
                                <a href="{{ route('permalink', ['id' => $icon->id]) }}" class="btn btn-warning mt-auto text-white fw-bold">
                                    Погледај
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


            @if($unavailableIcons->isNotEmpty())
                <h4 id="galerija" class="mt-5 mb-3 text-center ikonopis-tekst">ГАЛЕРИЈА</h4>
                <div class="row justify-content-center">
                    @foreach($unavailableIcons as $icon)
                        <div class="col-md-6 col-lg-4 mb-4 d-flex">
                            <div class="card w-100 h-100 hover-shadow transition">
                                <img src="{{ url('storage/' . $icon->image) }}" class="card-img-top"
                                     alt="Икона {{ $icon->name }} - Иконописна радионица Анђел Шевић" loading="lazy">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $icon->name }}</h5>
                                    <p class="card-text">{{ $icon->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center mt-4 mb-5">
                    {{ $unavailableIcons->fragment('galerija')->links() }}
                </div>
            @endif


                <div class="ikonopis-uvod text-center my-5 px-3 px-md-5">
                    <a href="/shop" class="ikonopis-link">Галерија икона &rarr;</a>
                </div>
        </div>
    </div>
@endsection
