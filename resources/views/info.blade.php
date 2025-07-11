@extends("layout")
@section("Naslov")
    Како поручити|Ikonopisna radionica-Andjel Sevic
@endsection
@section('meta_description', 'Pogledajte našu bogatu galeriju pravoslavnih ikona i način na koji se iste mogu poručiti. Svaka ikona ručno rađena sa posebnom pažnjom.')
@section("Sadrzaj")
    <div class="ikonopis-tekst mb-5" style="display: flex; flex-direction: column; gap: 1.5rem;">
        <h3 class="text-brown"><i class="fas fa-question-circle me-2"></i>Како поручити икону?</h3>
        <p>На нашем сајту иконе можете поручити на два начина:</p>

        <div>
            <h5>Иконе доступне одмах</h5>
            <ul class="ps-3">
                <li>У делу Продавница налазе се иконе које су већ готове и одмах доступне за куповину.</li>
                <li><i class="fas fa-check-circle text-success me-2"></i>Додајте жељену икону у корпу</li>
                <li><i class=" fas fa-check-circle text-success me-2"></i>Завршите поруџбину онлајн, уметник вас контактира ради потврде поруџбине и адресе</li>
                <li><i class="fas fa-check-circle text-success me-2"></i>Достава се врши у најкраћем року, платите приликом доставе или уплате на рачун</li>
            </ul>
        </div>

        <div>
            <h5>Поручивање по жељи - Галерија примера</h5>
            <ul class="ps-3">
                <li>У делу Продавница са поднасловом Галерија можете видети примере претходно израђених икона.</li>
                <li>Ако желите сличну икону, или потпуно јединствену по вашој жељи, могуће је наручити:</li>
                <ul>
                    <li><i class="fas fa-check-circle text-success me-2"></i>Икону по узору на постојеће примере</li>
                    <li><i class="fas fa-check-circle text-success me-2"></i>Икону са изменама (величина, детаљи, посвета итд.)</li>
                    <li><i class="fas fa-check-circle text-success me-2"></i>Икону по вашој замисли, уз консултацију са уметником</li>
                </ul>
                <li><i class="fas fa-check-circle text-success me-2"></i>Договарамо заједно мотив, димензије, цену и рок израде</li>
                <li><i class="fas fa-check-circle text-success me-2"></i>Уметник израђује икону посебно за вас</li>
                <li><i class="fas fa-check-circle text-success me-2"></i>Након израде, икона се шаље на вашу адресу</li>
            </ul>
                <div class="ps-3 mt-3">
                    <p>За информације и договор, слободно нас контактирајте:</p>
                    <p><i class="fas fa-mobile-alt me-2 text-primary"></i>Телефон: +381 63 899 4803</p>
                    <p><i class="fas fa-envelope me-2 text-primary"></i>Email: sevicandjel@gmail.com</p>
                </div>
        </div>
        <a href="/shop" class="btn btn-warning mt-auto text-white fw-bold">
            Посети продавницу икона
        </a>
    </div>
@endsection
