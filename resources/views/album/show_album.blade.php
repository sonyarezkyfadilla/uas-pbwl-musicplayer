@extends('layout/main')
@section('tittle', 'Detail Album')
@section('container')

    <div class="container">
        <div class="row">
            <div class="col-7">
            <h1 class="mt-2">Detail Album</h1>
            <div class="card">
    <div class="card-body">
    
    <h5 class="card-title">{{ $album->album_nama}}</h5>
    <label class="card-subtitle mb-2 text-muted for=">Artis</label>
    <h6 class="card-subtitle mb-2 text-muted"> {{ $album->artist->nama }}</h6>
    
    <a href="{{ $album->album_id }}/edit" class="btn btn-primary"> Edit</a>

    <form action=" /album/{{ $album->album_id }}" method="post" class="d-inline">
    @method('delete')
    @csrf
        <button type="submit" class="btn btn-danger"> Delete</button>
    </form>
    <a href="/album" class="card-link">Kembali</a>
    </div>
</div>
            </div>
        </div>
    </div>

    @endsection 
