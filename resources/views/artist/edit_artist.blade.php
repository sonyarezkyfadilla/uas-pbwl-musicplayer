@extends('layout/main')
@section('tittle', 'Form Ubah Artist')
@section('container')

    <div class="container">
        <div class="row">
            <div class="col-8">
            <h1 class="mt-2">Form Ubah Artist</h1>
            <form method="post" action="/artist/{{ $artist->nama_id }}">
            @method('patch')
            @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $artist->nama }}">
                    @error('nama')
                        <div class="invalid-feedback">{{$message}}
                    @enderror
                    </div>
                <button type="submit" class="btn btn-primary"> Ubah Data</button>
            </form>
            </div>
        </div>
    </div>

    @endsection 
