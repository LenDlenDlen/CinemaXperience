@extends('layouts.master')

@section('title', 'Profile Dashboard')

@section('css')

@endsection

@section('content')
<h1 style="color: white">INI ADALAH PROFILE DASHBOARD</h1>

@if(auth()->user()->role === 'non-member')
    <h1 style="color: white">INI NON-MEMBER YA</h1>
@endif

@endsection
