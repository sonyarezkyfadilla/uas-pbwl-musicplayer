@extends('layout/main')
@section('tittle', 'Detail Artist')
@section('container')

    <div class="container">
        <div class="row">
            <div class="col-7">
            <h1 class="mt-2">Detail Artist</h1>
            <div class="card">
    <div class="card-body">
    
    <h5 class="card-title">{{ $artist->nama}}</h5>
    <a href="{{ $artist->nama_id }}/edit" class="btn btn-primary"> Edit</a>

    <form action=" /artist/{{ $artist->nama_id }}" method="post" class="d-inline">
    @method('delete')
    @csrf
        <button type="submit" class="btn btn-danger"> Delete</button>
    </form>
    <a href="/artist" class="card-link">Kembali</a>
    </div>
</div>
            </div>
        </div>
    </div>

    @endsection 
