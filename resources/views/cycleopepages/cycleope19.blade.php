
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container">
    <h2 class="text-center">Nice!, we’re halfway there. Click next to proceed.</h2>
         <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
          
               <a class="text-decoration-none text-dark " href="{{ route('cycleope18') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
               <a class="text-decoration-none text-dark " href="{{ route('cycleope20') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
         </div>
   
   </div>

  

@endsection
