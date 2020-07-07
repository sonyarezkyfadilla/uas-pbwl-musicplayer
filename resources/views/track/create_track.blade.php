
@extends('layout/main')
@section('tittle', 'Form Tambah Track')
@section('container')

    <div class="container">
        <div class="row">
            <div class="col-8">
            <h1 class="mt-2">Form Tambah Track</h1>
            <form method="post" action="/track">
            @csrf
                <div class="form-group">
                    <label for="track_name">Judul</label>
                    <input type="text" class="form-control @error('track_name') is-invalid @enderror" id="track_name" placeholder="Masukkan Nama" name="track_name" value="{{ old('track_name') }}">
                    @error('track_name')
                        <div class="invalid-feedback">{{$message}}
                    @enderror
                    <label for="nama">Album</label>
                    <!-- <input type="text" class="form-control @error('album_id_artist') is-invalid @enderror" id="album_id_artist" placeholder="Masukkan Nama" name="album_id_artist" value="{{ old('album_id_artist') }}"> -->

                    <select class="form-control @error('track_id_album') is-invalid @enderror"  name="track_id_album" id="track_id_album">
                        @foreach($albums as $album)
                        <option  value="{{ $album->album_id }}">{{ $album->album_nama }}</option>
                        @endforeach
                    </select>

                    <label for="track_time">Durasi</label>
                    <input type="text" class="form-control @error('track_time') is-invalid @enderror" id="track_time" placeholder="Masukkan durasi" name="track_time" value="{{ old('track_time') }}">
                    @error('track_time')
                        <div class="invalid-feedback">{{$message}}
                    @enderror

                    <label for="track_file">File</label>
                    <input type="file" class="form-control @error('track_file') is-invalid @enderror" id="track_file" placeholder="Masukkan durasi" name="track_file" value="{{ old('track_file') }}">
                    @error('track_file')
                        <div class="invalid-feedback">{{$message}}
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary"> Tambah Data</button>
            </form>
            </div>
        </div>
    </div>
    @endsection 
