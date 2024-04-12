
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


   <div class="container">

  <div class="container drill-main d-flex align-items-center justify-content-center mt-5">
    <div class="row">
        <div class="col" style="position: relative;">
            <h3 style="position: absolute; top: 25%; left: 50%; transform: translate(-50%, -50%); z-index: 1;">It's time for a quiz!</h3>
            <p class=" fs-5  text-justify"style=" position: absolute; top: 53%; left: 50%; width: 70%; transform: translate(-50%, -50%); z-index: 1;">Hello, {{ $userName }}! Engr. Lorry here with a challenge for you. I've sent you a message on the following page, and you'll need to respond with your answers to proceed to the next message. Once you've completed the challenge, you can move on to the next topic.</p>
            <img class="shadow-sm" src="{{ asset('img/quiz.png') }}" alt="" style="width:45rem; height:28rem; position: relative; z-index: 0;"> 
        </div>
    </div>
</div>


<div class=" mb-3 mt-3 btn d-flex justify-content-end outline-none  border-0">
        <a class="text-decoration-none text-dark " href="{{ route('drill10') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5">Back</button> </a>
        <a class="text-decoration-none text-dark " href="{{ route('drill12') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button> </a>
      
        
      </div>
   </div>
  

@endsection
