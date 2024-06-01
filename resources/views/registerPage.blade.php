@extends('layouts.master')

@section('title', 'Register Page')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/registerPage.css') }}">
@endsection

@section('content')

<div class="overlay">

    <div class="main-content">

        <div class="register-container">
           <h2 class="mt-3">Register Your Account</h2>

           @if ($errors->any())
               @foreach ($errors->all() as $error)
                   <div class="alert alert-danger">{{ $error }}</div>
               @endforeach
           @endif

           <form method="POST" action="{{ route('register') }}">
            @csrf
               <div class="name mb-3">
                   <input type="text" name="first_name" placeholder="First Name" class="first" value="{{ old('first_name') }}">
                   <input type="text" name="last_name" placeholder="Last Name" class="last" value="{{ old('last_name') }}">
               </div>
               <div class="credentials ">
                   <input type="date" name="dob" value="{{ old('dob') }}">
                   <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                   <input type="password" name="password" placeholder="Password">
                   <input type="password" name="password_confirmation" placeholder="Confirm Password">

               </div>
               <div class="tc">
                <input type="checkbox" class="CB-TC"  {{ old('CB-TC') ? 'checked' : '' }}> <span>I agree with the Terms & Conditions</span>
               </div>
               <button type="submit" class="register-btn">Register</button>
           </form>

           <span>Already have an account? <a href="{{ route('login') }}">Login</a></span>
       </div>

       <div class="hero-section-1">
           <div class="photo photo-1"></div>
           <div class="photo photo-2"></div>
           <div class="photo photo-3"></div>
       </div>

       <div class="hero-section-2">
           <div class="photo photo-3"></div>
           <div class="photo photo-2"></div>
           <div class="photo photo-1"></div>
       </div>
   </div>
</div>



@endsection
