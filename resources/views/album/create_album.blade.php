
@extends('layout/main')
@section('tittle', 'Form Tambah Album')
@section('container')

    <div class="container">
        <div class="row">
            <div class="col-8">
            <h1 class="mt-2">Form Tambah Album</h1>
            <form method="post" action="/album">
            @csrf
                <div class="form-group">
                    <label for="album_nama">Nama</label>
                    <input type="text" class="form-control @error('album_nama') is-invalid @enderror" id="album_nama" placeholder="Masukkan Nama" name="album_nama" value="{{ old('album_nama') }}">
                    @error('album_nama')
                        <div class="invalid-feedback">{{$message}}
                    @enderror
                    <label for="album_id_artist">Nama Artist</label>
                    <!-- <input type="text" class="form-control @error('album_id_artist') is-invalid @enderror" id="album_id_artist" placeholder="Masukkan Nama" name="album_id_artist" value="{{ old('album_id_artist') }}"> -->

                    <select class="form-control @error('album_id_artist') is-invalid @enderror"  name="album_id_artist" id="album_id_artist">
                        @foreach($artists as $artist)
                        <option  value="{{ $artist->nama_id }}">{{ $artist->nama }}</option>
                        @endforeach
                    </select>

                </div>
                <button type="submit" class="btn btn-primary"> Tambah Data</button>
            </form>
            </div>
        </div>
    </div>
    @endsection 
