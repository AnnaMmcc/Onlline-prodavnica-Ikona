@extends("layout")
@section("Naslov")
    Dodaj-Novu-Ikonu
@endsection
@section("Sadrzaj")
    <div class="container col-lg-6 mt-4">
        <form method="POST" action="{{route('product.saveNew')}}" enctype="multipart/form-data">
            {{csrf_field()}}
             @if($errors->any())
                <div class="text-danger">{{$errors->first()}}</div>
            @endif
            <div class="form-group mb-2">
                <label for="name">Naziv ikone</label>
                <input name="name" type="text" class="form-control" id="name"  placeholder="Unesite ime ikone">
            </div>
            <div class="form-group mb-2">
                <label for="description">Opis ikone</label>
                <input name="description" type="text" class="form-control" id="description"  placeholder="Unesite opis ikone">
            </div>
            <div class="form-group mb-2">
                <label for="amount">Kolicina</label>
                <input name="amount" type="number" class="form-control" id="amount"  placeholder="Unesite kolicinu ikona">
            </div>
            <div class="form-group mb-2">
                <label for="price">Cena</label>
                <input name="price" type="number" class="form-control" id="price"  placeholder="Unesite cenu ikone">
            </div>
            <div class="form-group mb-2">
                <label for="image">Slika</label>
                <input name="image" type="file" class="form-control" id="image"  placeholder="Unesite sliku ikone">
            </div>

            <button>Sacuvaj</button>
        </form>
    </div>

@endsection
