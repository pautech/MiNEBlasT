
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    
    <div class="container">
   <div class="container drill-main d-flex  justify-content-center mt-5 ">
    
    <div class="d-flex justify-content-center "> </div> 
      <div class="row ml-5 d-flex ">
            <div class="col  d-flex flex-column">   
               <h5>Shrinkage Stoping</h5>
               <img clas="shadow-lg" src="{{ asset('img/sublevel.png') }}" alt="" style="height:20rem; width:25rem;">
            </div>  

            <div class="col">   
                  <p class="text-justify"> Sublevel sloping is a vertical mining method in which a large open stope is created within the vein. </p>
                  <p>Three different variations of sublevel stoping:</p>
                  <ul>
                        <li>Blasthole Method</li>
                        <li>Open-ending Method</li>
                        <li>Vertical Crater Retreat</li>
                  </ul>
            <br>
           
            <p class="text-justify">The cycle of operations follows the basic production cycle: </p>
            <ul>
                  <li><span class="fw-bold">Drilling:</span> Normally done with (1) large-hole pneumatic percussion drills, (2) large-hole rotary drills, or (3) small-diameter pneumatic percussion drills. The emphasis today is on the large-hole rigs and long holes. </li>
                  <li><span class="fw-bold">Blasting </span>: ANFO, emulsions, or gels; charging by pneumatic loader, pumping system, or by cartridges; firing electrically, with detonating cord, or with non-electric initiation systems. </li>
                  <li><span class="fw-bold">Secondary blasting: </span> Drill and blast, mudcapping, impact hammer. </li>
                  <li><span class="fw-bold"> Loading:</span> Gravity flow to drawpoints; loading with front-end loader, LHD , shovel loader, slusher, belt conveyor (diesel equipment now highly favored).  </li>
                  <li><span class="fw-bold">Haulage:</span> LHD, truck, rail, belt conveyor (rare). </li>
            </ul>
        
      </div>
      </div>
      

      <div class=" mt-5 btn d-flex justify-content-end  outline-none    border-0">
         <a class="text-decoration-none text-dark " href="{{ route('blast9') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
         <a class="text-decoration-none text-dark " href="{{ route('blast11') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
        </div>
</div>
   </div>

  

@endsection
