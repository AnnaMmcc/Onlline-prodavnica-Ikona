@extends('layout')
@section('Naslov')
    Sve ikone-Ikonopisna radionica-Andjel Sevic
@endsection
@section('Sadrzaj')
    <table class="table table-striped">
        <thead>
        <tr class="col-10">
            <th>Ime</th>
            <th>Opis</th>
            <th>Kolicina</th>
            <th>Cena</th>
            <th>Slika</th>
            <th>Akcije</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allProducts as $product)

            <tr><td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->amount}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->image}}</td>
                <td>
                    <a href="{{route('product.delete', ['icon' => $product->id])}}"  class="btn btn-danger">Obrisi</a>
                    <a href="{{route('product.edit', ['icon' => $product->id])}}" class="btn btn-primary">Edituj</a>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>
@endsection
