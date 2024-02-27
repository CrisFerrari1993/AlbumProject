@extends('layouts.main-layout')
@section('head')
    <title>Edit</title>
@endsection
@section('content')
    <h1><strong>Update Album</strong></h1>

    <form method="POST">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-xl-3 mb-2">
                    <label for="name">Album name</label>
                    <input type="text" id="name" name="name" value='{{$album->name}}'>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3 mb-2">
                    <label for="publications_date">Album publication date</label>
                    <input type="date" id="publications_date" name="publications_date" value="{{$album->publications_date}}">
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3 mb-2">
                    <label for="album_img">Album img url</label>
                    <input type="file" id="album_img" name="album_img" value="{{$album->album_img}}">
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3 mb-2">
                    <label for="name">rating</label>
                    <input type="number" id="rating" name="rating" value="{{$album->rating}}">
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3 mb-2">
                    <label for="artist">Artist</label>
                    <select name="artist_id" id="artist">
                        @foreach ($artists as $artist)
                            <option 
                                value="{{$artist->id}}"
                                @selected($album ->artist ->id === $artist ->id)
                                >{{$artist->firstname}} {{$artist->lastname}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3">
                    <div class="container d-flex flex-column">
                        <span>Genres</span>
                        @foreach ($genres as $genre)
                            <div>
                                <input type="checkbox" 
                                    value="{{$genre->id}}" 
                                    name="genre_id[]" 
                                    id="{{'genre-' . $genre ->id}}"

                                    @foreach ($album ->genres as $albumGenre)
                                        @checked($albumGenre ->id === $genre ->id)
                                    @endforeach
                                >
                                <label for="{{'genre-' . $genre->id}}">
                                    {{$genre ->name}}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <input class="btn btn-primary m-3" onclick="return confirm('Le modifiche sono corrette?')" type="submit">
        </div>
    </form>
@endsection