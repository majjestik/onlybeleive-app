<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Rules\Obliger;

class SongsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // To exclude routes from "auth" middleware
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $songs = Song::orderBy('numero', 'ASC')->get();
        
        return view('songs.index', [
            'songs' => $songs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // If it's valid, it'll display an error
        /* 
            - use 'bail' rule in case you wish to stop validation on the first validation failure
        */
        $request->validate([
            'numero' => 'required|unique:songs|min:0|max:230',
            'titre' => 'required|unique:songs|string'
        ]); 

        // Stores data in DB
        $song = Song::create([
            'numero' => $request->old('numero'),
            'refrain' => $request->old('refrain'),
            'titre' => $request->old('titre'),
            'couplet_1' => $request->old('couplet_1'),
            'couplet_2' => $request->old('couplet_2'),
            'couplet_3' => $request->old('couplet_3'),
            'couplet_4' => $request->old('couplet_4'),
            'couplet_5' => $request->old('couplet_5')
        ]);
        
        return redirect('/songs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $song = Song::find($id);

        return view('songs.lyrics')->with('song', $song);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $song = Song::find($id);
        
        return view('songs.edit')->with('song', $song);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $song = Song::where('id', $id)->update([
            'numero' => $request->input('numero'),
            'refrain' => $request->input('refrain'),
            'titre' => $request->input('titre'),
            'couplet_1' => $request->input('couplet_1'),
            'couplet_2' => $request->input('couplet_2'),
            'couplet_3' => $request->input('couplet_3'),
            'couplet_4' => $request->input('couplet_4'),
            'couplet_5' => $request->input('couplet_5')
        ]);

        return redirect('/songs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        $song->delete();

        return redirect('/songs');
    }
}
