<!-- resources/views/i_dash.blade.php -->

@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')
    <!-- <div class="container">




        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Instructor Dashboard') }}</div>

                    <div class="card-body"> -->
                        <!-- <p>Welcome, {{ Auth::guard('web')->user()->username }}!</p> -->
                        <!-- You can add more content to your dashboard as needed -->
                        <!-- For example, display instructor-specific information or actions -->
                    <!-- </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <img class="image" src={{asset('mineblast-final.png')}}  style="width: 250px;" alt="Mineblast Image"/> -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light py-5 border border-bottom border-5">
        <!-- <a class="navbar-brand" href="#">Navbar w/ text</a> -->
        <img class="image" src={{asset('mineblast-final.png')}}  style="width: 250px;" alt="Mineblast Image"/>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">References</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!-- <div class="container">
        <div class="item">Item 1</div>
        <div class="item">Item 2</div>
        <div class="item">Item 3</div>
    </div> -->
        <div class="bg-info p-4 position-absolute" style="border-top-left-radius: 50px; border-top-right-radius: 50px; border-bottom-right-radius: 50px; width: 300px; font-family:cursive; font-weight: bold; top: 170px; left: 850px;">
            Are we meeting today? Project has been already finished and I have results to show you.
        </div>
        <img class="image mx-auto d-block" src={{asset('Avatar.png')}}  style="width: 450px; margin-top: 50px;" alt="Avatar"/>
@endsection

