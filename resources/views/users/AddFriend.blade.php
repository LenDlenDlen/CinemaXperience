@extends('layouts.master')

@section('title', 'Add Friend')

@section('css')
<link rel="stylesheet" href="{{ asset('css/AddFriendPage.css') }}">

@endsection

@section('content')
<div class="bg-neutral-900 text-white">
    <div class="flex">

        @include('partials.sidebar-friend')

        <!-- Main Content -->
        <div class="w-3/4 p-5">
            <div class="mb-10">
                <h1 class="TopTitle">Add Friend</h1>
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                <form action="{{ route('friendsearch') }}" method="GET">
                    <input class="text-black" type="text" name="search_id" placeholder=" Input Friend's ID" required>
                    <button type="submit" class="friend-btn bg-yellow">Search</button>
                </form>
                @if(isset($searchResult))
                <div class="mt-5">
                    @if($searchResult)
                    <p>Found user:</p>
                    <form action="{{ route('friendrequests.add') }}" method="POST">
                        @csrf
                        <div class="inline-block h-14">
                            <div class="friend-item" >
                                <div class="friendcontainer items-center flex gap-3 w-full">
                                    <div class="pic-container bg-black rounded-full w-1/24">
                                        <img src="{{$searchResult->profile_picture}}" class="friend-img" alt="Pic">
                                    </div>
                                    <div class="nama text-black font-bold text-base flex text-center items-center w-9/12 overflow-hidden">
                                        {{$searchResult->name}}
                                    </div>
                                    <input type="hidden" name="friend_id" value="{{ $searchResult->id }}">
                                    <button type="submit" class="friend-btn text-2xl ">+</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    @else
                    @endif
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
