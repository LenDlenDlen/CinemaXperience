@extends('layouts.master')

@section('title', 'Chatbox')

@section('css')
<link rel="stylesheet" href="{{ asset('css/chatbox.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
<div class="bg-neutral-900 text-white">
    <div class="flex">
        <div class="w-1/4 h-screen p-5">
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

        <div class="garis bg-stone-800 w-2 h- m-12"></div>

        <div class="w-3/4 mr-6 overflow-auto">

            <div class="flex flex-row user_info h-16  mt-4 gap-4">
                @if(isset($friends))
                    <img class="friend-img ml-4 border-2" src="{{$friends->profile_picture}}" alt="Profile_Pic">
                    <div class="text-white font-extrabold text-2xl flex text-center items-center w-9/12">
                        {{$friends->name}}
                    </div>
                @endif
            </div>

            <div class="w-full h-1 mt-4 mb-1 bg-stone-800"></div>

            <div class="msg_box h-3/4 mt-2 mb-2 p-4 overflow-auto" id="message_box">
                @foreach ($messages as $msg)
                    <div class="flex {{ $msg->user_id == auth()->id() ? 'justify-end' : 'justify-start' }}">
                        <div class="{{ $msg->user_id == auth()->id() ? 'bg-yellow-300' : 'bg-gray-300' }} text-black p-2 rounded mb-2 max-w-sm min-w-xs">
                        {{ $msg->message }}
                        <span class="timeline justify-end text-xs text-gray-500 ml-2">{{ \Carbon\Carbon::parse($msg->created_at)->format('H:i') }}</span>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="relative flex items-center w-full">
                <form id="message_form" class="w-full" action="{{route('chat.store', ['friendId' => $friendId])}}" method="POST">
                    @csrf
                    <input id="message" class="input_box flex-grow pl-3 rounded-full" type="text" name="message" placeholder="Type your message here">
                    <button type="submit" class="absolute inset-y-0 right-0 pr-3 flex item-center">
                        <i class="mt-1 fa fa-paper-plane text-yellow-500 hover:text-yellow-600 text-2xl"></i>
                    </button>
                </form>
            </div>

        </div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
    $('#message_form').on('submit', function(e) {
        e.preventDefault();

        let message = $('#message').val();
        let friendId = {{ $friendId }};
        $.ajax({
            url: "{{ route('chat.store', ['friendId' => $friendId]) }}",
            type: 'POST',
            data: {
                _token: $('input[name="_token"]').val(),
                message: message
            },
            success: function(response) {
                let alignment = response.message.user_id == {{ auth()->id() }} ? 'justify-end' : 'justify-start';
                let bgColor = response.message.user_id == {{ auth()->id() }} ? 'bg-yellow-300' : 'bg-gray-300';

                $('#message_box').append(
                    '<div class="flex ' + alignment + '"><div class="' + bgColor + ' text-black p-2 rounded mb-2 max-w-xs">' + response.message.message + '</div></div>'
                );
                $('#message').val('');
            }
        });
    });
});
</script>

@endsection
