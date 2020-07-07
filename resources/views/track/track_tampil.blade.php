@extends('layout/main')
@section('tittle', 'Track')
@section('container')

    <div class="container">
        <div class="row">
            <div class="col-7">
            <h1 class="mt-2">Daftar Track</h1>
            <a href="/track/create_track" class="btn btn-primary my-3">Tambah Data</a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
            <ul class="list-group">
            @foreach($track as $track)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $track->track_name}}
        <a href="/track/{{ $track->track_id }}" class="badge badge-info">Detail</a>
    </li>
    </ul>
    @endforeach
            </div>
        </div>
    </div>
    @endsection 
