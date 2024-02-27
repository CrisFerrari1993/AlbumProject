@extends('layouts.main-layout')
@section('head')
    <title>Albums</title>
@endsection
@section('content')
    <h1><strong>Albums: </strong>{{count($albums)}}</h1>
    <button class="btn btn-primary m-5"><a class="link_buttons" href="{{route('album.create')}}">Create new Album</a></button>
    <div class="container">
        <div class="row">
            @foreach ($albums as $album)
                <div class="col-sm-12 col-md-6 col-xl-3 mb-5">
                    <div class="container">
                        <a class="link_index" href="{{route('album.show', $album ->id)}}">
                            <h4 class=""><strong>Name: </strong>{{$album -> name}}</h4>
                            <img src="{{asset('storage/' . $album->album_img)}}" alt="{{$album->name}}">
                            <span class="d-block"><strong>Publication Year: </strong>{{$album->publications_date}}</span>
                            <span class="d-block"><strong>Rating: </strong>{{$album->rating}}/10</span>
                        </a>
                        <div class="row mt-2">
                            <div class="col">
                                <button class='btn btn-primary'><a class="link_buttons" href="{{route('album.edit', $album->id)}}">Edit</a></button>
                            </div>
                            <div class="col">
                               <form action="{{route('album.delete', $album ->id)}}"
                                method="POST">
                                @csrf
                                @method("DELETE")
                                    <input class="btn btn-danger" type="submit" value="Delete">
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
