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
                    <li class="my-2"><a href="#">Your Friends</a></li>
                    <li class="my-2"><a href="#">Add Friends</a></li>
                    <li class="my-2"><a href="{{route('friendrequests')}}">Pending Requests</a></li>
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
        <div class="garis bg-stone-800 w-2 h- m-12"></div>
        <!-- Main Content -->
        <div class="w-3/4 p-5">
            
            <div class="mb-10">
                {{-- <h2 class="text-2xl font-semibold mb-3">Recently Contacted</h2> --}}
                <h1 class="TopTitle">Add Friend</h1>
                <input type="text" placeholder="Input Friend">
                
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
