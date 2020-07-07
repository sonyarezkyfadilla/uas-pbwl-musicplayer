@extends('layout/main')
@section('tittle', 'Album')
@section('container')

    <div class="container">
        <div class="row">
            <div class="col-7">
            <h1 class="mt-2">Daftar Album</h1>
            <a href="/album/create_album" class="btn btn-primary my-3">Tambah Data</a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
            <ul class="list-group">
            @foreach($album as $album)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $album->album_nama}}
        <a href="/album/{{ $album->album_id }}" class="badge badge-info">Detail</a>
    </li>
    </ul>
    @endforeach
            </div>
        </div>
    </div>
    @endsection 
