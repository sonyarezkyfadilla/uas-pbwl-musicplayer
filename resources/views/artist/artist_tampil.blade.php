@extends('layout/main')
@section('tittle', 'Artist')
@section('container')

    <div class="container">
        <div class="row">
            <div class="col-7">
            <h1 class="mt-2">Daftar Artist</h1>
            <a href="/artist/create_artist" class="btn btn-primary my-3">Tambah Data</a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
            <ul class="list-group">
            @foreach($artist as $artist)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $artist->nama}}
        <a href="/artist/{{ $artist->nama_id }}" class="badge badge-info">Detail</a>
    </li>
    </ul>
    @endforeach
            </div>
        </div>
    </div>

    @endsection 
