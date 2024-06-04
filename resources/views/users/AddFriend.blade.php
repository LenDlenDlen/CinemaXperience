@extends('layouts.master')

@section('title', 'Add Friend')

@section('css')
<link rel="stylesheet" href="{{ asset('css/AddFriendPage.css') }}">
@endsection

@section('content')
<div class="bg-neutral-900 text-white">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/4 h-screen p-5 ">
            <div class="mb-5">
                <h2 class="text-lg font-semibold">Friends</h2>
                <ul>
                    <li class="my-2"><a href="{{ route('friendlist') }}">Your Friends</a></li>
                    <li class="my-2"><a href="{{ route('addfriend') }}">Add Friends</a></li>
                    <li class="my-2"><a href="{{ route('friendrequests') }}">Pending Requests</a></li>
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
                <h1 class="TopTitle">Add Friend</h1>
                <form action="{{ route('friendsearch') }}" method="GET">
                    <input type="text" name="search_id" placeholder="Input Friend's ID" required>
                    <button type="submit" class="friend-btn bg-yellow">Search</button>
                </form>
                @if(isset($searchResult))  <!-- ini klo ketemu masuk, tapi klo gaketemu <p> di else ga masuk -->
                <div class="mt-5">
                    @if($searchResult)
                    <p>Found user: {{ $searchResult->name }}</p>
                    <form action="{{ route('friendrequests.add') }}" method="POST">
                        @csrf
                        <input type="hidden" class="text-black" name="friend_id" value="{{ $searchResult->id }}">
                        <button type="submit" class="friend-btn">Add Friend</button>
                    </form>
                    @else
                    <p class="text-white">No user found with that ID.</p>
                    @endif
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
