<?php

namespace App\Http\Controllers;

use App\Track;
use App\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $track = Track::all();
        return view('track/track_tampil', ['track' => $track]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $albums= Album::all();
        return view('track.create_track', ['albums'=> $albums]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'track_name' =>'required'
        ]);
    Track::create($request->all());
    return redirect('/track')->with('status', 'Data Track berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function show(Track $track)
    {
        //
        // dd($track->album->album_nama);
        return view('track/show_track', compact('track'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function edit(Track $track)
    {
        //
        $albums= Album::all();

        // dd($albums);
        return view('track.edit_track', ['track' => $track,
                                    'albums'=> $albums]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Track $track)
    {
        //
        Track::where('track_id', $track->track_id)
        ->update([
            'track_name' => $request->track_name,
            'track_id_album' => $request->track_id_album,
            'track_time' => $request->track_time,
            'track_file' => $request->track_file,
        ]);
        return redirect('/track')->with('status', 'Data track berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function destroy(Track $track)
    {
        //
        Track::destroy($track->track_id);
        return redirect('/track')->with('status', 'Data track berhasil dihapus');
    }
}
