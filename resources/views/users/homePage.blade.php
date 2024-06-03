@extends('layouts.master')

@section('title', 'Home Page')

@section('css')
<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

@endsection

@section('content')
<h3 class="TopTitle" >Trending Watches</h3>
    <div id="carousel">
        <div class="slider">
          <div class="item">
            <img src="assets/HomePage/EOY.jpg" alt="" />
            <p class = info >Queen Of Tears</p>
          </div>
          <div class="item">
            <img src="assets/HomePage/Qot.jpg" alt="" />
            <p class = info>Queen Of Tears</p>
          </div>
          <div class="item">
            <img src="assets/HomePage/WYWS.jpg" alt="" />
            <p class = info>Queen Of Tears</p>
          </div>
          <div class="item">
            <img src="assets/HomePage/obs.jpg" alt="" />
            <p class = info>Queen Of Tears</p>
          </div>
          <div class="item">
            <img src="assets/HomePage/EOY.jpg" alt="" />
            <p class = info>Queen Of Tears</p>
          </div>
          <button id="next">></button>
          <button id="prev"><</button>
        </div>
        
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

    <div class="border"></div>

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

    // javascript for carousel

    <script>
    let items = document.querySelectorAll(".slider .item");
    let next = document.getElementById("next");
    let prev = document.getElementById("prev");

    let active = 2;
    function loadShow() {
    let stt = 0;
    items[active].style.transform = `scale(1)`;
    items[active].style.zIndex = 1;
    items[active].style.filter = "none";
    items[active].style.opacity = 1;
    for (var i = active + 1; i < items.length; i++) {
        stt++;
        items[i].style.transform = `translateX(${120 * stt}px) scale(${
        1 - 0.2 * stt
        })`;
        items[i].style.zIndex = -stt;
        items[i].style.filter = "blur(5px)";
        items[i].style.opacity = stt > 2 ? 0 : 0.6;
    }
    stt = 0;
    for (var i = active - 1; i >= 0; i--) {
        stt++;
        items[i].style.transform = `translateX(${-120 * stt}px) scale(${
        1 - 0.2 * stt
        })`;
        items[i].style.zIndex = -stt;
        items[i].style.filter = "blur(5px)";
        items[i].style.opacity = stt > 2 ? 0 : 0.6;
    }
    }
    loadShow();
    next.onclick = function () {
    // active = active + 1 < items.length ? active + 1 : active;
    active = (active + 1) % items.length;
    loadShow();
    };
    prev.onclick = function () {
    // active = active - 1 >= 0 ? active - 1 : active;
    if(active == 0){
        active = items.length - 1;
    }else{
        active--;
    }
    loadShow();
    };
    </script>


@endsection
