<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\artist;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $artist = DB::table('tb_artist')->get();
        $artist = Artist::all();
            return view('artist/artist_tampil', ['artist' => $artist]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('artist.create_artist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //cara 1
        // $artist = new artist;
        // $artist->nama =$request->nama;

        // $artist->save();

        // cara 2
        // artist::create([
        //     'nama' => $request->nama
        // ]);

        // cara 3

            $request->validate([
                'nama' =>'required'
            ]);
        Artist::create($request->all());
        return redirect('/artist')->with('status', 'Data Artist berhasi ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        //
        return view('artist/show_artist', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        //
        return view('artist/edit_artist', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artist $artist)
    {
        // return $request;
        //

        Artist::where('nama_id', $artist->nama_id)
                ->update([
                    'nama' => $request->nama
                ]);
                return redirect('/artist')->with('status', 'Data Artist berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist)
    {
        // return $artist;
        // //
        Artist::destroy($artist->nama_id);
        return redirect('/artist')->with('status', 'Data Artist berhasi dihapus');
    }
}
