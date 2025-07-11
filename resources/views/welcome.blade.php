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

                <div class="ikonopis-uvod text-center my-5 px-3 px-md-5">
                    <p class="ikonopis-citat">
                        „Икона је ствар божанствена, но не и обожена.“
                    </p>
                    <div class="ikonopis-tekst">
                        <p>
                            <strong>Икона у стваралачком смислу</strong> је непресушан извор идеја и надахнућа,
                            стално трагање за што уверљивијом и лепшом сликом Бога.
                            <strong>У духовном смислу</strong>, она је стална комуникација између Васкрслог Господа и човека,
                            и <em>прозор у Царство Небеско</em> које свако може да пронађе у себи.
                        </p>
                        <p>
                            Икона није украс који уносимо у домове и уклапамо у ентеријере, боје зидова и намештај.
                            <strong>Она је огледало, али и портал између вечности и садашњости.</strong>
                            Икона је слика неког догађаја у вечности, у којем ми активно учествујемо у садашњем тренутку — и тиме исповедамо Бога.
                        </p>
                        <p>
                            У нашем атељеу, процес стварања тече као и пре више од две хиљаде година —
                            <em>онако како је свети Лука писао прве иконе</em>.
                            Користимо квалитетне даске, грундиране руком врхунских мајстора, писане јајчаном темпером и природним пигментима,
                            позлаћене златним листићима 23.75 или 24 карата и лакиране по жељи.
                        </p>
                        <p>
                            У атељеу, поред готових икона, можете се упознати и са самим процесом настанка иконе,
                            осетити пут стварања и присуствовати тренутку када
                            <strong>рад кроз руку иконописца постаје и уметничко и духовно дело.</strong>
                        </p>
                    </div>
                </div>

                <div class="ikonopis-uvod text-center my-5 px-3 px-md-5">
                    <a href="{{route('info')}}" class="ikonopis-link">Како поручити икону ? &rarr;</a>
                </div>

                <div class="ikonopis-uvod text-center my-5 px-3 px-md-5">
                    <a href="/shop" class="ikonopis-link">Галерија икона &rarr;</a>
                </div>
@endsection
