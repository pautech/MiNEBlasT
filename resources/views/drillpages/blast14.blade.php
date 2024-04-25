
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    
    <div class="container">
   <div class="container drill-main d-flex  justify-content-center mt-5 ">
    
    <div class="d-flex justify-content-center "> </div> 
      <div class="row ml-5 d-flex ">
            <div class="col  d-flex flex-column">   
               <h5>Stull Stoping</h5>
               <img class="shadow-lg" src="{{ asset('img/square1.jpg') }}" alt="" style="height:23rem; width: 35rem;">
            <br><br>
            </div>  

            <div class="col">   
                <h4 class="text-center">Cycle of Operations</h4>
                  <p class="text-justify">Ulimited and the load-bearing capacity of the sets is inadequate to accommodate 
heavy equipment. The only possibilities for stope transport are small slusheri 
or a very small loader. Airleg drills or mounted drifters are irsed. However, the' 
limitations of the stope space severely restrict productivity. The production 
cycle (Section 5.1) consists of the following: 
 
                  </p>
                  <ol type="1">
                  <li class="text-justify"><span class="fw-bold">Drilling:</span> handheld percussion drills of the airleg type; column-and-barmounted drifters </li>
                  <li><span class="fw-bold">Blasting:</span> ANFO, slurries; charging by hand (cartridges) or machine (bulk); firing by electric, detonating fuse, or nonelectric methods.</li>
                  <li><span class="fw-bold"> Secondary Blasting: </span> generally not required.</li>
                  <li><span class="fw-bold"> Loading:</span>gravity flow to chutes (if possible); small slusher or small loader otherwise. </li>
                  <li><span class="fw-bold">Haulage:</span>rail, LH D As in stull stoping. </li>
            </ol>
            </div>
      </div>
      

      <div class=" mt-5 btn d-flex justify-content-end  outline-none    border-0">
         <a class="text-decoration-none text-dark " href="{{ route('blast13') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
         <a class="text-decoration-none text-dark " href="{{ route('blast15') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
        </div>
</div>
   </div>

  

@endsection
