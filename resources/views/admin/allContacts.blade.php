@extends('layout')
@section('Naslov')
    Kontakti-Ikonopisna radionica-Andjel Sevic
@endsection
@section('Sadrzaj')
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
                <th>Email</th>
                <th>Telefon</th>
                <th>Uloga</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->role }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

