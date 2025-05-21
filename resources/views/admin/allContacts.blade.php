@extends('layout')
@section('Naslov')
    Kontakti-Ikonopisna radionica-Andjel Sevic
@endsection
@section('Sadrzaj')
    @if(session('success'))
        <div class="alert alert-succes">
            {{session('success')}}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
        <tr class="col-10">
            <th>ID</th>
            <th>Ime</th>
            <th>Email</th>
            <th>Telefon</th>
            <th>Uloga</th>
            <th>Akcije</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)

            <tr><td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->role}}</td>

                <td>
                    <a class="btn btn-danger">Obrisi</a>
                    <a class="btn btn-primary">Edituj</a>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>
@endsection
