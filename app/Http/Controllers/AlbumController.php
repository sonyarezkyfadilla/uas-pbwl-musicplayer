<?php

namespace App\Http\Controllers;

use App\Album;
use App\artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $album = Album::all();
            return view('album/album_tampil', ['album' => $album]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // //
        $artists= Artist::all();
        return view('album.create_album', ['artists'=> $artists]);

        // return view('album.create_album');
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
            'album_nama' =>'required'
        ]);
    Album::create($request->all());
    return redirect('/album')->with('status', 'Data Album berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        //
        // dd($album->artist->nama);
        return view('album/show_album', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        //
        $artists= Artist::all();

        // dd($artists);
        return view('album.edit_album', ['album' => $album,
                                    'artists'=> $artists]);

        // return view('album/edit_album', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        //
        Album::where('album_id', $album->album_id)
        ->update([
            'album_nama' => $request->album_nama,
            'album_id_artist' => $request->album_id_artist,
        ]);
        return redirect('/album')->with('status', 'Data album berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        //
        Album::destroy($album->album_id);
        return redirect('/album')->with('status', 'Data album berhasil dihapus');
    }
}
