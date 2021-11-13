<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::all();
        
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
        $song = Song::create([
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
