<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Artist;
use App\Models\Album;
use App\Models\Genre;

class AlbumController extends Controller
{
    public function index(){

        $albums = Album :: all();

        return view('pages.album.index', compact('albums'));
    }
    public function show($id){

        $albums = Album :: find($id);
        $genres = Genre :: find($id);
        $artist = Artist :: find($id);

        return view('pages.album.show', compact('albums', 'artist', 'genres'));
    }
    public function create() {
        $artists = Artist :: all();
        $genres = Genre :: all();
        return view('pages.album.create', compact('artists', 'genres'));
    }
    public function store(Request $request){

        $data = $request -> all();
        
        $img = $data['album_img'];
        $img_path = Storage :: disk('public') -> put('images', $img);
        $album = new Album();

        $album -> name = $data['name'];
        $album -> publications_date = $data['publications_date'];
        $album -> album_img = $img_path;
        $album -> rating = $data['rating'];

        $album -> artist() -> associate($data['artist_id']);

        $album -> save();

        $album -> genres() -> attach($data['genre_id']);

        return redirect() -> route('album.show', $album -> id);

    } 
    public function edit($id){

        $album = Album :: find($id);
        $artists = Artist :: all();
        $genres = Genre :: all();

        return view('pages.album.edit', compact('artists', 'genres', 'album'));
    }
    public function update(Request $request, $id){

        $data = $request -> all();
        

        $album = Album :: find($id);

        $album -> name = $data['name'];
        $album -> publications_date = $data['publications_date'];
        $album -> album_img = $data['album_img'];
        $album -> rating = $data['rating'];

        $album -> artist() -> associate($data['artist_id']);

        $album -> save();

        $album -> genres() -> sync($data['genre_id']);

        return redirect() -> route('album.show', $album -> id);

    }
    public function delete($id){

        $album = Album :: find($id);
        $album -> genres() -> sync([]);
        $album -> delete();

        return redirect() -> route('album.index');

    }
}
