@extends('layouts.master')

@section('title', 'Profile Dashboard')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profileDashboard.css') }}">
@endsection


@section('content')
<!-- @if(auth()->user()->role === 'non-member')
@endif -->
<div class="profile-container">
    <h2 class="profile-title">My Profile</h2>
    <div class="profile-content">
        <div class="profile-photo-section">
        <img class="profile-photo" src="{{ asset('assets/HomePage/Qot.jpg') }}" alt="">
        <button class="change-photo-button">Change photo</button>
        </div>
        <div class="profile-info-section">
            <form class="profile-form">
                <label for="name">Name</label>
                <input type="text" id="name" value="">

                <label for="username">Username</label>
                <input type="text" id="username" value="">

                <label for="email">Email address</label>
                <input type="email" id="email" value="">

                <label for="phone">Phone number</label>
                <input type="text" id="phone" value="">

                <button type="submit" class="save-changes-button">Save Changes</button>
            </form>
        </div>
    </div>
</div>

@endsection
