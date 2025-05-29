@extends('layout')
@section('Naslov')
    Sve ikone-Ikonopisna radionica-Andjel Sevic
@endsection
@section('Sadrzaj')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Ime</th>
                    <th>Opis</th>
                    <th>Količina</th>
                    <th>Cena</th>
                    <th>Slika</th>
                    <th>Akcije</th>
                </tr>
                </thead>
                <tbody>
                @foreach($allProducts as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->amount }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->image }}</td>
                        <td>
                            <a href="{{ route('product.delete', ['icon' => $product->id]) }}" class="btn btn-danger btn-sm">Obriši</a>
                            <a href="{{ route('product.edit', ['icon' => $product->id]) }}" class="btn btn-primary btn-sm">Edituj</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

