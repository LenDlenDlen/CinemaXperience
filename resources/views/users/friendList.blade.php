@extends('layouts.master')

@section('title', 'Friend List')

@section('css')
<link rel="stylesheet" href="{{ asset('css/friendlist.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
<div class="bg-neutral-900 text-white">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/4 h-screen p-5 ">
            <div class="mb-5">
                <h2 class="SideTitle">Friends</h2>
                <ul>
                    <li class="my-2"><a href="{{route('friendlist')}}">Your Friends</a></li>
                    <li class="my-2"><a href="{{route('addfriend')}}">Add Friends</a></li>
                    <li class="my-2"><a href="{{route('friendrequests')}}">Pending Requests</a></li>
                </ul>
            </div>
            <div>
                <h2 class="SideTitle">Watch Party</h2>
                <ul>
                    <li class="my-2"><a href="#">Your Groups</a></li>
                    <li class="my-2"><a href="#">Create Group</a></li>
                    <li class="my-2"><a href="#">Find Group</a></li>
                </ul>
            </div>
        </div>
        <div class="garis bg-stone-800 w-2 h- m-8"></div>
        <!-- Main Content -->
        <div class="w-3/4 p-5">
            <h1 class="TopTitle">Your Friends</h1>
            <div class="flexbox column gap-4 relative mb-10">


                @if ($AllFriends->isEmpty())
                <p class = "font-bold text-xl">No Friends Available</p>
                @else
                @foreach ($AllFriends as $friend)
                <div class="inline-block h-14">
                    <div class="flex space-x-4">
                        <div class="friend-item">
                            <div class="friendcontainer items-center flex gap-2 w-full">


                                <div class="pic-container bg-black rounded-full w-1/24">
                                    <img src="{{$friend->profile_picture}}" class="friend-img" alt="Pic">
                                </div>
                                <div class="nama text-black font-bold text-base flex text-center items-center w-9/12">
                                    {{$friend->name}}
                                </div>
                                <form action="{{route('removefriend', $friend->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="friend-btn remove-btn text-xl" style="display: none;"><i class="fa fa-trash-o"></i></button>
                                </form>
                                <div class="button">
                                    <button class="friend-btn text-xl">+</button>
                                </div>

                                <div class="button">
                                    <button type="submit" class="friend-btn text-xl" ><i class="fas fa-comment-alt" style="font-size:1rem"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                @if(!$AllFriends->isEmpty())
                <div class="button">
                    <button onclick="toggleRemoveButtons()" class="rmv-btn mt-10">Remove Friend</button>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
     function toggleRemoveButtons() {
        const buttons = document.querySelectorAll('.remove-btn');
        const toggleButton = document.querySelector('.rmv-btn');
        buttons.forEach(button => {
            button.style.display = button.style.display === 'none' ? 'block' : 'none';
        });
        // Toggle the text of the rmv-btn
        if (toggleButton.innerHTML.trim() === 'Remove Friend') {
            toggleButton.innerHTML = 'Cancel';
        } else {
            toggleButton.innerHTML = 'Remove Friend';
        }
    }
</script>

@endsection
