@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
    <div class="container d-flex justify-content-center">
        <img class="show_img" src="{{asset('storage/' .$albums->album_img)}}" alt="{{$albums->name}}">
        <div class="mx-3 text-start">
            <h5><strong>Album name: </strong>{{$albums->name}}</h5>
            <h5><strong>Artist name: </strong><a href="{{route('artist.show', $albums ->artist ->id)}}">{{$albums->artist->firstname}} {{$albums->artist->lastname}}</a></h5>
            <h5><strong>Publication date: </strong>{{$albums->publications_date}}</h5>
            <h5><strong>Rating: </strong>{{$albums->rating}}/10</h5>
            <h5><strong>Genre: </strong></h5>
            <ul>
                @foreach ($albums->genres as $gen)
                    <li>{{$gen->name}}</li>
                @endforeach
            </ul>

            <button class="btn btn-primary"><a class="link_buttons" href="/">Back to Home</a></button>
        </div>
    </div>
@endsection
