@extends("layout")
@section("Naslov")
    Продавница|Иконописна радионица-Анђел Шевић
@endsection

@section('meta_description', 'Pogledajte našu bogatu galeriju pravoslavnih ikona. Svaka ikona ručno rađena sa posebnom pažnjom.')

@section("Sadrzaj")
    <div class="container mt-4">

        <div class="ikonopis-tekst mb-5">

            <p>
                <strong>Икона у стваралачком смислу</strong> је непресушан извор идеја и надахнућа,
                стално трагање за што уверљивијом и лепшом сликом Бога.
                <strong>У духовном смислу</strong>, она је стална комуникација између Васкрслог Господа и човека,
                и <em>прозор у Царство Небеско</em> које свако може да пронађе у себи.
            </p>

            <p>
                Икона није украс који уносимо у домове и уклапамо у ентеријере, боје зидова и намештај.
                <strong>Она је огледало, али и портал између вечности и садашњости.</strong>
                Икона је слика неког догађаја у вечности, у којем ми активно учествујемо у садашњем тренутку —
                и тиме исповедамо Бога.
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



        <div class="ikonopis-uvod text-center my-5">
            <a href="{{ route('info') }}" class="ikonopis-link">
                Како поручити икону? &rarr;
            </a>
        </div>


        <div class="d-flex justify-content-center mt-3">
            <form action="{{ route('icon.search') }}" method="GET"
                  class="w-100 mb-4 p-4 border rounded shadow bg-white" style="max-width: 900px;">
                {{ csrf_field() }}
                <div class="row g-3">
                    <div class="col-md-6 col-lg-4">
                        <input type="text" name="query" class="form-control"
                               placeholder="Претражи иконе..." value="{{ request('query') }}">
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <input type="number" name="min_price" class="form-control"
                               placeholder="Мин. цена..." value="{{ request('min_price') }}">
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <input type="number" name="max_price" class="form-control"
                               placeholder="Макс. цена..." value="{{ request('max_price') }}">
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <button type="submit" class="btn btn-warning w-100 text-white fw-bold">
                            Филтрирај
                        </button>
                    </div>
                </div>
            </form>
        </div>


        @if($availableIcons->isEmpty() && $unavailableIcons->isEmpty())
            <p class="text-center">Тренутно нема икона које одговарају претрази.</p>
        @else
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
                <h4 class="mt-5 mb-3 text-center">Галерија</h4>
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
            @endif
        @endif

    </div>
    <div class="container my-5">
        <h3 class="text-center mb-4">Стандардне величине (једна фигура)</h3>

        <div class="table-responsive">
            <table class="table table-bordered text-center align-middle shadow-sm">
                <thead class="table-warning text-brown">
                <tr>
                    <th>Димензије (цм)</th>
                    <th>Цена (€)</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>15 x 20</td>
                    <td>170</td>
                </tr>
                <tr>
                    <td>20 x 26</td>
                    <td>250</td>
                </tr>
                <tr>
                    <td>20 x 30</td>
                    <td>300</td>
                </tr>
                <tr>
                    <td>26 x 36</td>
                    <td>350</td>
                </tr>
                <tr>
                    <td>30 x 40</td>
                    <td>400</td>
                </tr>
                <tr>
                    <td>40 x 50</td>
                    <td>550</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-4 px-3 py-4 bg-light border-start border-4 border-brown rounded">
            <p class="mb-2"><strong>*Позлата:</strong></p>
            <ul class="mb-3">
                <li>Цела позадина (26 x 36) — <strong>+10%</strong> на цену</li>
                <li>Цела позадина (30 x 40) — <strong>+15%</strong> на цену</li>
            </ul>

            <p class="mb-2"><strong>*Више од једне фигуре:</strong></p>
            <p>Умањење цене од <strong>10–30%</strong> у зависности од комплексности предлошка</p>

            <p class="mb-0"><strong>*Минијатуре:</strong> од <strong>30€</strong> па навише</p>
        </div>
    </div>

@endsection
