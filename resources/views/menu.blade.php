@extends('layouts.lay')

@section('content')
    <div class="main-container">
                <div class="container container-fluid">
                    <img src="{{ asset('img/LOGO.png') }}" alt="logo" class="shadow-lg">
                    <div class="buttons mt-4">
                    <a href="{{ route('ulogin') }}"> <button type="button" class="rock-btn shadow-lg">Sign In</button></a>
                    <a href="{{ route('registration') }}"><button type="button" class="rock-btn shadow-lg">Create Account</button></a>
                    </div>
                </div>
    </div>

    @endsection
