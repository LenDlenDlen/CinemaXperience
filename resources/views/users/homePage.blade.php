@extends('layouts.master')

@section('title', 'Home Page')

@section('css')
<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@endsection

@section('content')

    <div class="carousel">
        <h1 style = "color:white">INI BUAT TOP 10 TODAY -> CAROUSEL</h1>
    </div>

    <div class="border"></div>

    <h3 class="TopTitle" >Recently Watched</h3>
    <div class="hero-section">
        <div id="card">
            <div class="photo">
                <img src="{{ asset('assets/HomePage/Qot.jpg') }}" alt="Qot">
            </div>
            <div class="title">
                <p>Queen of Tears</p>
            </div>
        </div>
        <div id="card">
            <div class="photo">
                <img src="{{ asset('assets/HomePage/DOTS.jpg') }}" alt="DOTS">
            </div>
            <div class="title">
                <p>Descendant Of The Sun</p>
            </div>
        </div>
    </div>

    <div class="border"></div>


    <h3 class="TopTitle" >Korean Drama</h3>
    <div class="hero-section">
    @foreach ($medias as $media)
        @if($media->genre->contains('genre_type', 'korean-drama'))
        <div id= "card">
            <div class="photo">
                    <img src="{{ asset($media->poster) }}" alt="aos">
            </div>
            <div class="title">
                <p>{{ $media->title }}</p>
            </div>
        </div>
        @endif
    @endforeach

    </div>

    <h3 class="TopTitle" >Anngap Saja Action Drama</h3>
    <div class="hero-section">
    @foreach ($medias as $media)
        @if($media->genre->contains('genre_type', 'action'))
        <div id= "card">
            <div class="photo">
                    <img src="{{ asset($media->poster) }}" alt="aos">
            </div>
            <div class="title">
                <p>{{ $media->title }}</p>
            </div>
        </div>
        @endif
    @endforeach
    </div>

    <div class="border"></div>

@endsection
