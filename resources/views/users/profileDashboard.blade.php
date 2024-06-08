@extends('layouts.master')

@section('title', 'Profile Dashboard')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profileDashboard.css') }}">
@endsection

@section('content')
<div class="profile-container">
    <h2 class="profile-title">My Profile</h2>
    <div class="profile-content">
        <div class="profile-photo-section">
            <!-- <img class="profile-photo" src="{{ asset('assets/HomePage/Qot.jpg') }}" alt=""> -->
            <img class="profile-photo" alt="">
            <button class="change-photo-button">Change photo</button>
        </div>
        <div class="profile-info-section">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form class="profile-form" method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PUT')
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ Auth::user()->name }}">

                <label for="email">Email address</label>
                <input type="email" id="email" name="email" value="{{ Auth::user()->email }}">

                <label for="date_of_birth">Date of Birth</label>
                <input type="date" id="date_of_birth" name="date_of_birth" value="{{ Auth::user()->dob }}">

                <label for="password">Password</label>
                <input type="password" id="password" name="password" value="{{ Auth::user()->password }}">

                <button type="submit" class="save-changes-button">Save Changes</button>
            </form>
        </div>
    </div>
</div>
@endsection
