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
    <div id= "card">
        <div class="photo">
                <img src="{{ asset('assets/HomePage/aos.jpeg') }}" alt="aos">
            </div>  
            <div class="title">
                <p>Alchemy Of Souls</p>
            </div>
        </div>
    <div id= "card">
        <div class="photo">
                <img src="{{ asset('assets/HomePage/WYWS.jpg') }}" alt="aos">
            </div>  
            <div class="title">
                <p>While You Were Sleeping</p>
            </div>
        </div>
    <div id = "card">
        <div class="photo">
                <img src="{{ asset('assets/HomePage/obs.jpg') }}" alt="aos">
            </div>  
            <div class="title">
                <p>Our Beloved Summer</p>
            </div>
        </div>
    <div id = "card">
        <div class="photo">
                <img src="{{ asset('assets/HomePage/shopforkiller.jpg') }}" alt="sfk">
            </div>  
            <div class="title">
                <p>Shop For Killer</p>
            </div>
        </div>
    </div>

    <div class="border"></div>

@endsection
