@extends("layout")
@section("Naslov")
    О нама|Иконописна радионица-Анђел Шевић
@endsection
@section('meta_description', 'Pogledajte našu bogatu galeriju pravoslavnih ikona i stranicu o nama, videcete na kojim je izlozbama ucestvovala Ikonopisna radionica Anđel Šević. Svaka ikona ručno rađena sa posebnom pažnjom.')
@section("Sadrzaj")
    <div class="ikonopis-tekst my-4">

        <h3 class="text-center text-brown mb-4">Иконописна радионица - Анђел Шевић</h3>

        <p>
            Атеље је основан 2020. године у Инђији. Јувелир по струци, иконописац по занимању,
            након завршеног курса на Академији СПЦ у Београду код проф. Маре Ђуровић,
            почиње активно да се бави иконописом.
        </p>

        <p>Атеље је учествовао на неколико изложби до сада:</p>

        <ul style="list-style-position: inside; padding-left: 0; text-align: left; max-width: 800px; margin: 0 auto;">
            <li><strong>Проповед о бојама о Богородици</strong> – <em>Конак кнегиње Љубице, Београд</em> (2022)</li>
            <li><strong>Светлописи за Сирију</strong> – <em>Галерија Прогрес, Београд</em> (2023)</li>
            <li><strong>Пут духовности</strong> – <em>КО центар Раковица, Београд</em> (2022)</li>
            <li><strong>Светославље Православље</strong> – <em>Крипта храма Светог Саве, Београд</em> (2022)</li>
            <li><strong>Портрет на икони</strong> – <em>Коларчева задужбина, Београд</em> (2024)</li>
            <li><strong>29. традиционална изложба икона</strong> – <em>Шабац</em> (2025)</li>
            <li><strong>Поглед у небо</strong> – <em>Стара Пазова</em> (2025)</li>
            <li><strong>Земаљско је за малена царство, а небеско увек и до века</strong> – <em>Green Door галерија, Београд</em> (2025)</li>
            <li>
                <strong>Христианско Искуство</strong> – Током 2024. и 2025. године учествујемо у каталогу,
                који се по благослову патријарха московског и целе Русије Кирила проширио широм света,
                представљајући уметнике сакралних уметности.
            </li>
        </ul>
        <div class="text-center my-4">
            <img src="{{ asset('storage/images/DSC09999.JPG') }}"
                 alt="Слика атељеа Иконописне радионице Анђел Шевић"
                 class="responsive-image rounded shadow-lg">
            <p>Наш кутак молитве, мира и стварања.</p>
        </div>

    </div>
@endsection
