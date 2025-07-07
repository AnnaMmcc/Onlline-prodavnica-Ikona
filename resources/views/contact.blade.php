@extends("layout")
@section("Naslov")
    Kонтакт|Иконописна радионица-Анђел Шевић
@endsection
@section('title', 'Galerija ikona - Ikonopisna radionica Anđel Šević - Ikona - Kontakt')

@section('meta_description', 'Pogledajte našu bogatu galeriju pravoslavnih ikona. Svaka ikona ručno rađena sa posebnom pažnjom.Kontaktirajte nas')
@section("Sadrzaj")
    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow border-0">
                    <div class="card-body text-center">

                        <p class="mb-3 fs-5">За све информације, наруџбине и сарадњу слободно нас контактирајте:</p>

                        <ul class="list-unstyled fs-5">
                            <li class="mb-3">
                                <i class="fa-solid fa-phone-volume text-brown me-2"></i>
                                <a href="tel:+381601234567" class="text-dark text-decoration-none">+381 63 899 4803</a>
                            </li>

                            <li class="mb-3">
                                <i class="fa-regular fa-envelope text-brown me-2"></i>
                                <a href="mailto:ikonopis@andjelsevic.rs" class="text-dark text-decoration-none">sevicandjel@gmail.com</a>
                            </li>

                            <li class="mb-3">
                                <i class="fa-brands fa-instagram text-brown me-2"></i>
                                <a href="https://www.instagram.com/andjelandjel" target="_blank" class="text-dark text-decoration-none">@andjelandjel</a>
                            </li>
                            <li class="mb-3">
                                <i class="fa-solid fa-location-dot text-brown me-2"></i>
                                <span class="text-dark text-decoration-none">Краља Петра првог 9, Инђија</span>
                            </li>
                        </ul>

                        <div class="map-responsive" style="overflow:hidden; padding-bottom:56.25%; position:relative; height:0;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2818.8928714755207!2d20.07922977542685!3d45.047395761153226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475af8bf3a571939%3A0x6fcc296e2e6a5374!2z0JrRgNCw0ZnQsCDQn9C10YLRgNCwIEkg0JrQsNGA0LDRktC-0YDRktC10LLQuNGb0LAgOSwg0JjQvdGS0LjRmNCwIDIyMzIw!5e0!3m2!1ssr!2srs!4v1751052829633!5m2!1ssr!2srs"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <p class="mt-4">Одговарамо у најкраћем могућем року. Хвала вам на поверењу! 🕊️</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
