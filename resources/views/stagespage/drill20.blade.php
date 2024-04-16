
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


   <div class="container">
   <div class="container drill-main d-flex  justify-content-center mt-5 ">
        <div class="row ">
            <div class="col">
                <h1 class=" pt-3 mt-3 h1-drill1-title">Raise Driving</h1>
                <p class="fs-5 text-justify">- Raises are smaller excavations inclined at angles greater than 45 degrees. Raise driving, a prevalent technique in mining, entails constructing passages of varying lengths, occasionally surpassing 100 meters.</p>                
                <br>
                <p class="fs-5 text-justify">- These raises fulfill multiple functions like linking drifts at various levels to complete ventilation circuits, aiding in the transportation of ore and waste, and commencing sublevel stoping operations. Traditionally, raise driving has been one of the most demanding activities in rock fragmentation using drilling and blasting techniques until the advent of the long-hole method. </p>
        </div>
        

      <div class=" mt-4 btn d-flex justify-content-end  outline-none  border-0">
      <a class="text-decoration-none text-dark " href="{{ route('drill19') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5">Back</button></a>
         <a class="text-decoration-none text-dark " href="{{ route('drill21') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
      </div>
</div>
   </div>
  

@endsection
