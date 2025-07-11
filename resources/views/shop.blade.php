@extends("layout")
@section("Naslov")
    Продавница|Иконописна радионица-Анђел Шевић
@endsection

@section('meta_description', 'Pogledajte našu bogatu galeriju pravoslavnih ikona. Svaka ikona ručno rađena sa posebnom pažnjom.')

@section("Sadrzaj")
    <div class="container mt-4">
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
                    <td>500</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-4 px-3 py-4 bg-light border-start border-4 border-brown rounded">
            <p class="mb-2"><strong>*Позлата:</strong></p>
            <ul class="mb-3">
                <li>Ако се ради цела позадина, до димензије 30х40цм је <strong>+10%</strong> на цену, а 30х40цм и навише је <strong>+15%.</strong></li>
            </ul>

            <p class="mb-2"><strong>*Више од једне фигуре:</strong></p>
            <p>Увећање цене од <strong>10–30%</strong> у зависности од комплексности предлошка</p>

            <ul class="mt-3">
                <li><strong>*Минијатуре:</strong> од <strong>30€</strong></li>
            </ul>

        </div>
    </div>

@endsection
