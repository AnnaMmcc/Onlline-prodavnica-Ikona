@extends("layout")
@section("Naslov")
    O nama-Ikonopisna radionica-Andjel Sevic
@endsection
@section("Sadrzaj")
    <div class="container mt-1">

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


        <div class="row justify-content-center">
            @forelse($allIcons as $icon)
                <div class="col-md-6 col-lg-4 mb-4 d-flex">
                    <div class="card w-100 h-100">
                        <img src="{{ url('storage/' . $icon->image) }}" class="card-img-top" alt="{{ $icon->name }}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $icon->name }}</h5>
                            <p class="card-text">{{ $icon->description }}</p>
                            <h6 class="card-text">{{ $icon->price }} дин</h6>
                            <a href="{{ route('permalink', ['id' => $icon->id]) }}"
                               class="btn btn-warning mt-auto text-white fw-bold">
                                Погледај
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">Тренутно нема икона које одговарају претрази.</p>
            @endforelse
        </div>
    </div>
@endsection


