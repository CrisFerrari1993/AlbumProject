@extends('layouts.main-layout')
@section('head')
    <title>Cretae</title>
@endsection
@section('content')

    <h1><strong>Create new album</strong></h1>

    <form method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-xl-3 mb-2">
                    <label for="name">Album name</label>
                    <input type="text" id="name" name="name">
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3 mb-2">
                    <label for="publications_date">Album publication date</label>
                    <input type="date" id="publications_date" name="publications_date">
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3 mb-2">
                    <label for="album_img">Album img</label>
                    <input type="file" id="album_img" name="album_img">
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3 mb-2">
                    <label for="name">rating</label>
                    <input type="number" id="rating" name="rating">
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3 mb-2">
                    <label for="artist">Artist</label>
                    <select name="artist_id" id="artists">
                        @foreach ($artists as $artist)
                            <option value="{{$artist->id}}">{{$artist -> firstname}} {{$artist -> lastname}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3">
                    <div class="container d-flex flex-column">
                        <span>Genres</span>
                        @foreach ($genres as $genre)
                            <div class="d-flex ">
                                <input type="checkbox"
                                       value="{{$genre->id}}" 
                                       name="genre_id[]" 
                                       id="{{'genre-' . $genre->id}}">
                                <label for="{{'genre-' . $genre -> id}}">
                                    {{$genre -> name}}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <input class="btn btn-primary m-3" type="submit">
        </div>
    </form>
@endsection