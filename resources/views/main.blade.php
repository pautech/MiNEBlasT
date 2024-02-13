
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')
    <div class="container-fluid landing ">
    <img src="{{ asset('img/LOGO.png') }}" alt="logo" ">
    <a href="{{ route('checkpoint') }}" class="d-flex align-items-center justify-content-center text-decoration-none"> <button type="button" class="rock-btn shadow-lg">Get Started</button></a>
    </div>
    

@endsection