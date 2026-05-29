@extends("layout")

@section("Naslov")
    О нама | Иконописна радионица - Анђел Шевић
@endsection

@section('meta_description', 'Погледајте више о раду иконописне радионице Анђел Шевић, изложбама, процесу настанка икона, часовима и радионицама.')

@section("Sadrzaj")

<div class="ikonopis-tekst my-4">

    {{-- HERO --}}
    <div class="about-hero text-center mb-5">

        <h1 class="about-title">
            Иконописна радионица — Анђел Шевић
        </h1>

        <p class="about-subtitle">
            Простор молитве, тишине, учења и стварања,
            у којем икона настаје кроз традицију,
            канон и живо искуство Цркве.
        </p>

    </div>


    {{-- O ATELJEU --}}
    <div class="about-section">

        <h2 class="section-heading">О атељеу</h2>

        <p>
            Атеље је основан 2020. године у Инђији. Јувелир по струци, иконописац по занимању,
            након завршеног курса на Академији СПЦ у Београду код проф. Маре Ђуровић,
            почиње активно да се бави иконописом.
        </p>

        <p>Атеље је учествовао на неколико изложби до сада:</p>

        <ul class="exhibition-list">

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

    </div>


    {{-- SLIKA ATELJEA --}}
    <div class="text-center my-5">

        <img src="{{ asset('storage/images/DSC09999.webp') }}"
             alt="Слика атељеа Иконописне радионице Анђел Шевић"
             class="responsive-image rounded shadow-lg atelier-main-image">

        <p class="atelier-image-caption">
            Наш кутак молитве, мира и стварања.
        </p>

    </div>



    {{-- PUT NASTANKA IKONE --}}
    <div class="about-section my-5">

        <h2 class="section-heading">Пут настанка иконе</h2>

        <div class="media-grid">

            {{-- VIDEO 1 --}}
            <div class="media-card">

                <video controls muted playsinline class="atelier-video">
                    <source src="{{ asset('videos/detalj.mp4') }}" type="video/mp4">
                </video>

                <h4>Писање иконе</h4>

                <p>
                    Од припреме даске и првих слојева,
                    до последњег потеза четкицом.
                </p>

            </div>


            {{-- VIDEO 2 --}}
            <div class="media-card">

                <video controls playsinline class="atelier-video">
                    <source src="{{ asset('videos/pripremazapozlatu.mp4') }}" type="video/mp4">
                </video>

                <h4>Припрема украса и позлате</h4>

                <p>
                    Традиционална техника украшавања
                    и позлате иконе.
                </p>

            </div>


            {{-- VIDEO 3 --}}
            <div class="media-card">

                <video controls muted playsinline class="atelier-video">
                    <source src="{{ asset('videos/lakiranje.mp4') }}" type="video/mp4">
                </video>

                <h4>Завршна обрада радова</h4>

                <p>
                    Лакирање и завршна припрема
                    пре излагања и благослова.
                </p>

            </div>

        </div>

    </div>



    {{-- IKONOPIS I DUHOVNOST --}}
    <div class="about-section my-5">

        <h2 class="section-heading">Иконопис и духовност</h2>

        <div class="row g-4 my-5">

            <div class="col-12">

                <div class="text-box owner-box">

                    <p>
                        Иконописање је црквено служење, а не стваралаштво у оном смислу како га схватају световни уметници.
                        Рађајући се из литургије, икона се јавља као њено продужење,
                        и живи само у богослужењу, као и црквено појање, одјејаније, архитектура.
                    </p>

                </div>

            </div>


            <div class="col-md-6">

                <div class="quote-card light">

                    <p>
                        Иконографски канон само дисциплинује ствараоца.
                        Иконописац не допушта никакве незаконитости, самовољу,
                        као што и у области вере постоје истине које не подлежу промени.
                    </p>

                    <span>— Архимандрит Зинон</span>

                </div>

            </div>


            <div class="col-md-6">

                <div class="quote-card light">

                    <p>
                        Постоји стара црквенословенска реч — ИКОНИК.
                        То је човек који ствара дела у оквирима црквеног канона.
                    </p>

                    <span>— Архимандрит Зинон</span>

                </div>

            </div>


            <div class="col-12">

                <div class="big-quote-section">

                    <p class="big-quote">
                        „Не гледамо ми икону, већ она гледа нас.“
                    </p>

                    <span class="big-quote-author">
                        — кнез Јевгениј Трубецкој
                    </span>

                </div>

            </div>

        </div>

    </div>



    {{-- CASOVI I RADIONICE --}}
    <div class="about-section my-5">

        <h2 class="section-heading">Часови и радионице</h2>

        <div class="media-grid two-columns">

            {{-- VIDEO 4 --}}
            <div class="media-card">

                <video controls muted playsinline class="atelier-video">
                    <source src="{{ asset('videos/detalj2.mp4') }}" type="video/mp4">
                </video>

                <h4>Детаљ са часа иконописа</h4>

                <p>
                    Тренуци учења, тишине и стварања у атељеу.
                </p>

            </div>


            {{-- VIDEO 5 --}}
            <div class="media-card">

                <video controls muted playsinline class="atelier-video">
                    <source src="{{ asset('videos/perlica.mp4') }}" type="video/mp4">
                </video>

                <h4>Радионица са децом</h4>

                <p>
                    У сарадњи са креативном радионицом „Перлица“,
                    деца се кроз игру и боју упознају са лепотом иконописа.
                </p>

            </div>

        </div>

    </div>



    {{-- ZIVOT ATELJEA --}}
    <div class="about-section my-5">

        <h2 class="section-heading">Живот атељеа</h2>

        <div class="media-grid two-columns">

            {{-- VIDEO 6 --}}
            <div class="media-card">

                <video controls muted playsinline class="atelier-video">
                    <source src="{{ asset('videos/arhangeli.mp4') }}" type="video/mp4">
                </video>

                <h4>Припрема радова за изложбу 2026.</h4>

                <p>
                    Паковање и припрема икона
                    за предстојећу изложбу.
                    Рад Анђела Шевића и његових ученика.
                </p>

            </div>


            {{-- VIDEO 7 --}}
            <div class="media-card">

                <video controls muted playsinline class="atelier-video">
                    <source src="{{ asset('videos/pakovanje.mp4') }}" type="video/mp4">
                </video>

                <h4>Поставка радова</h4>

                <p>
                    Тренуци завршетка икона, качење и паковање.
        .
                </p>

            </div>

        </div>

    </div>

</div>

@endsection
