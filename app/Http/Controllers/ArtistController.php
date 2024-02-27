<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Album;
use App\Models\Genre;
class ArtistController extends Controller
{
    public function show($id){
        $genres = Genre :: find($id);

        $artists = Artist :: find($id);

        $albums = Album :: find($id);

        return view('pages.artist.show', compact('albums', 'artists', 'genres'));
    }
}
