@extends('layout')
@section('Naslov')
    Edit/Ikonopisna-radionica/Andjel-Sevic
@endsection
@section('Sadrzaj')
    <div class="container col-lg-6 mt-4">
        <form method="POST" action="{{route('product.update', ['id' => $icon->id])}}" enctype="multipart/form-data">
            {{csrf_field()}} @method('PUT')
            @if($errors->any())
                <div class="text-danger">{{$errors->first()}}</div>
            @endif
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="form-group mb-2">
                <label for="name">Naziv ikone</label>
                <input value="{{$icon->name}}" name="name" type="text" class="form-control" id="name"  placeholder="Unesite ime ikone">
            </div>
            <div class="form-group mb-2">
                <label for="description">Opis ikone</label>
                <input value="{{$icon->description}}" name="description" type="text" class="form-control" id="description"  placeholder="Unesite opis ikone">
            </div>
            <div class="form-group mb-2">
                <label for="amount">Kolicina</label>
                <input value="{{$icon->amount}}" name="amount" type="number" class="form-control" id="amount"  placeholder="Unesite kolicinu ikona">
            </div>
            <div class="form-group mb-2">
                <label for="price">Cena</label>
                <input value="{{$icon->price}}" name="price" type="number" class="form-control" id="price"  placeholder="Unesite cenu ikone">
            </div>
            <div>
                <label>Trenutna slika:</label><br>
                @if ($icon->image)
                    <img src="{{ asset('storage/' . $icon->image) }}" width="150">
                @else
                    <p>Nema slike.</p>
                @endif
            </div>

            <div>
                <label for="image">Nova slika (opciono):</label>
                <input type="file" name="image" accept="image/*">
            </div>
            <div class="form-check mb-2">
                <label class="form-check-label" for="is_available"> - Dostupno odmah</label>
                <input name="is_available" type="checkbox" class="form-check-input" id="is_available">
            </div>

            <button class="btn btn-primary" type="submit">Sacuvaj</button>
        </form>
    </div>
@endsection
