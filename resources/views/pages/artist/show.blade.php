@extends('layouts.main-layout')
@section('head')
    <title>Artist</title>
@endsection
@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-sm-12 col-md-6 col-xl-6">
                <img src="{{$artists->artist_img}}" alt="{{$artists->firstname}} {{$artists->lastname}}">
            </div>
            <div class="col-sm-12 col-md-6 col-xl-6">
                <div class="container">
                    <h2 class='text-center mb-5'><strong>Artist info</strong></h2>
                    <ul class="m-0 p-0">
                        <li class="text-start"><h5><strong>Name: </strong>{{$artists -> firstname}} {{$artists -> lastname}}</h5></li>
                        <li class="text-start"><h5><strong>Date of Birth: </strong>{{$artists->date_of_birth}}</h5></li>
                        <li class="text-start"><h5><strong>Publicated Albums: </strong></h5>
                            <ul>
                                @foreach ($artists->albums as $aAlbum)
                                    <li>{{$aAlbum -> name}}</li> 
                                @endforeach
                            </ul>
                        </li>
                        <li class="text-start"><h5><strong>Favourite Genres: </strong></h5>
                            <ul>
                                @foreach ($albums->genres as $gen)
                                    <li>{{$gen ->name}}</li> 
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
