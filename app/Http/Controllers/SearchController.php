<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if(isset($_GET['query'])) {
            $search = $_GET['query'];
            //echo "Get text!!!";
            $songs = Song::where('titre', 'LIKE', '%'. $search .'%' )->get();
            //$songs = DB::table('songs')->where('numero', 'LIKE', '%'. $search_text .'%' )->get();
            //dd($songs);
            return view('search', ['songs' => $songs]);
        }
        else {
            return view('search');
        }

        
    }
}
