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

    @include('layouts.navbar')
    <div class="bg-info p-4 position-absolute" style="border-top-left-radius: 50px; border-top-right-radius: 50px; border-bottom-right-radius: 50px; width: 300px; font-family:cursive; font-weight: bold; top: 170px; left: 850px;">
        Greetings, Mining Engineers! This is Engr. Lorry!

        </div>
        <img class="image mx-auto d-block" src="{{asset('Avatar.png')}} " style="width: 450px; margin-top: 6.8em;" alt="Avatar"/>
        
@endsection

