@extends('layout/main')
@section('tittle', 'Form Ubah Track')
@section('container')

    <div class="container">
        <div class="row">
            <div class="col-8">
            <h1 class="mt-2">Form Ubah Track</h1>
            <form method="post" action="/track/{{ $track->track_id }}">
            @method('patch')
            @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('track_name') is-invalid @enderror" id="track_name" placeholder="Masukkan Nama" name="track_name" value="{{ $track->track_name }}">
                    @error('track_name')
                        <div class="invalid-feedback">{{$message}}
                    @enderror
                    <label for="nama">Nama</label>
                    <select class="form-control @error('track_id_album') is-invalid @enderror"  name="track_id_album" id="track_id_album">
                        @foreach($albums as $album)
                        <option  value="{{ $album->album_id }}">{{ $album->album_nama }}</option>
                        @endforeach
                    </select>

                    <label for="track_time">Nama</label>
                    <input type="text" class="form-control @error('track_time') is-invalid @enderror" id="track_time" placeholder="Masukkan Nama" name="track_time" value="{{ $track->track_time }}">
                    @error('track_time')
                        <div class="invalid-feedback">{{$message}}
                    @enderror

                    <label for="track_file">Nama</label>
                    <input type="file" class="form-control @error('track_file') is-invalid @enderror" id="track_file" placeholder="Masukkan Nama" name="track_file" value="{{ $track->track_file }}">
                    @error('track_file')
                        <div class="invalid-feedback">{{$message}}
                    @enderror
                    </div>
                <button type="submit" class="btn btn-primary"> Ubah Data</button>
            </form>
            </div>
        </div>
    </div>

    @endsection 
