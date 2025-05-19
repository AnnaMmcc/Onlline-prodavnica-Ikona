@extends('layout')
@section('Naslov')
    Placanje/Pouzecem-Ikonopisna radionica-Andjel Sevic
@endsection
@section('Sadrzaj')
    <div class="container">
        Hvala Vam na poverenju. Molimo ostavite kontakt radi potvrde narudzbine:
        <form class="col-lg-6 m-3" method="POST" action="{{route('add.contact')}}">
            @csrf
            @if(session('success'))
                <div class="text-success">{{session('success')}}</div>
            @endif
            <div class="form-group">
                <input class="form-control" type="number" placeholder="Unesite Vas broj telefona.." name="phone" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Potvrdi</button>
        </form>
        Kontaktiracemo Vas radi potvrde porudzbine!
    </div>
@endsection
