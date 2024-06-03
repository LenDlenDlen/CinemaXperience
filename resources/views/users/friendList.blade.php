@extends('layouts.master')

@section('title', 'Friend List')

@section('css')
<link rel="stylesheet" href="{{ asset('css/friendlist.css') }}">
@endsection

@section('content')
<div class="bg-neutral-900 text-white">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/4 h-screen p-5 ">
            <div class="mb-5">
                <h2 class="text-lg font-semibold">Friends</h2>
                <ul>
                    <li class="my-2"><a href="#" class="text-yellow-500">Your Friends</a></li>
                    <li class="my-2"><a href="#">Add Friends</a></li>
                    <li class="my-2"><a href="#">Pending Requests</a></li>
                </ul>
            </div>
            <div>
                <h2 class="text-lg font-semibold">Groups</h2>
                <ul>
                    <li class="my-2"><a href="#">Your Groups</a></li>
                    <li class="my-2"><a href="#">Create Group</a></li>
                    <li class="my-2"><a href="#">Find Group</a></li>
                </ul>
            </div>
        </div>
        <div class="garis"></div>
        <!-- Main Content -->
        <div class="w-3/4 p-5">
            <h1 class="text-3xl font-bold mb-5">Your Friends</h1>
            <div class="mb-10">
                <h2 class="text-2xl font-semibold mb-3">Recently Contacted</h2>
                <div class="flex space-x-4">
                    <div class="friend-item w-1/3 flex space-x-16" >
                        <div class="profilepic-name flex gap-2">
                            <div class="pic-container bg-black rounded-full">
                                <img src="path/to/image.jpg" class="friend-img" alt="Pic">
                            </div>  
                            <div class="nama bg-red-900 flex-grow text-center items-center">
                                DlenzzGanzz                            
                            </div>                   
                        </div> 
                        <div class="button"></div> 
                        

                            <button class="friend-btn justify-items-end">+</button>   
                    </div>
                    <div class="friend-item w-1/3">
                        <img src="path/to/image.jpg" class="friend-img" alt="Dyanto">
                        <span>Dyantooooooooooo</span>
                        <button class="friend-btn">+</button>
                    </div>
                    <div class="friend-item w-1/3">
                        <img src="path/to/image.jpg" class="friend-img" alt="Princess Syel...">
                        <span>Princess Syel...</span>
                        <button class="friend-btn">+</button>
                    </div>
                </div>
            </div>
            <div class="mb-10">
                <h2 class="text-2xl font-semibold mb-3">Online</h2>
                <div class="flex space-x-4">
                    <div class="friend-item">
                        <img src="path/to/image.jpg" class="friend-img" alt="OhMyHarie">
                        <span>OhMyHarie</span>
                        <button class="friend-btn">+</button>
                    </div>
                    <div class="friend-item">
                        <img src="path/to/image.jpg" class="friend-img" alt="DlenzzGanzz">
                        <span>DlenzzGanzz</span>
                        <button class="friend-btn">+</button>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="text-2xl font-semibold mb-3">Offline</h2>
                <div class="grid grid-cols-3 gap-4">
                    <div class="friend-item">
                        <img src="path/to/image.jpg" class="friend-img" alt="Berutoruto">
                        <span>Berutoruto</span>
                        <button class="friend-btn">+</button>
                    </div>
                    <div class="friend-item">
                        <img src="path/to/image.jpg" class="friend-img" alt="Tygbtw">
                        <span>Tygbtw</span>
                        <button class="friend-btn">+</button>
                    </div>
                    <div class="friend-item">
                        <img src="path/to/image.jpg" class="friend-img" alt="Zikirin">
                        <span>Zikirin</span>
                        <button class="friend-btn">+</button>
                    </div>
                    <div class="friend-item">
                        <img src="path/to/image.jpg" class="friend-img" alt="Batoran">
                        <span>Batoran</span>
                        <button class="friend-btn">+</button>
                    </div>
                    <div class="friend-item">
                        <img src="path/to/image.jpg" class="friend-img" alt="Gilbert Ganse...">
                        <span>Gilbert Ganse...</span>
                        <button class="friend-btn">+</button>
                    </div>
                    <div class="friend-item">
                        <img src="path/to/image.jpg" class="friend-img" alt="DlenzzGanzz">
                        <span>DlenzzGanzz</span>
                        <button class="friend-btn">+</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection