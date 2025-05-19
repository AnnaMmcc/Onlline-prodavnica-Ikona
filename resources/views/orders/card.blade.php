@extends("layout")
@section("Naslov")
    Placanje/racun-Ikonopisna radionica-Andjel Sevic
@endsection
@section("Sadrzaj")
    <div class="container">
        Hvala Vam na poverenju. Molimo ostavite kontakt radi potvrde narudzbine:
        <form class="col-lg-6 m-3">
            <div class="form-group">
                <input class="form-control" type="number" placeholder="Unesite Vas broj telefona.." name="telefon" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Potvrdi</button>
        </form>
        Kontaktiracemo Vas radi potvrde porudzbine!
    </div>

@endsection



