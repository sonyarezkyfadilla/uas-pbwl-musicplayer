@extends('layout/main')
@section('tittle', 'Detail Track')
@section('container')

    <div class="container">
        <div class="row">
            <div class="col-7">
            <h1 class="mt-2">Detail Track</h1>
            <div class="card">
    <div class="card-body">
    
    <h5 class="card-title">{{ $track->track_name}}</h5>
    <label class="card-subtitle mb-2 text-muted for=">Album</label>
    <h6 class="card-subtitle mb-2 text-muted"> {{ $track->album->album_nama }}</h6>
    <h4 class="card-title">{{ $track->track_time}}</h4>
    

    @if(isset($track->track_file)) 
			<audio controls>
				<source value=" {{ $track->track_file}} "  type="audio/mpeg">
			</audio>					
	@endif


    <a href="{{ $track->track_id }}/edit" class="btn btn-primary"> Edit</a>

    <form action=" /track/{{ $track->track_id }}" method="post" class="d-inline">
    @method('delete')
    @csrf
        <button type="submit" class="btn btn-danger"> Delete</button>
    </form>
    <a href="/track" class="card-link">Kembali</a>
    </div>
</div>
            </div>
        </div>
    </div>

    @endsection 
