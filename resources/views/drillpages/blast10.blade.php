
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    
    <div class="container">
   <div class="container drill-main d-flex  justify-content-center mt-5 ">
    
    <div class="d-flex justify-content-center "> </div> 
      <div class="row ml-5 d-flex ">
            <div class="col  d-flex flex-column">   
               <h5>Shrinkage Stoping</h5>
               <img clas="shadow-lg" src="{{ asset('img/shrinkage-s.png') }}" alt="" style="height:20rem; width:25rem;">
            </div>  

            <div class="col">   
                  <p class="text-justify"> Shrinkage stoping is an overhand method in which the ore is mined in horizontal slices from bottom to top and remains in the stope as temporary support to the walls and to provide a working platform for the miners. Because the ore swells when breakage occurs, about 10 to 40% of the broken</p>
            <br>
            <h4 class="text-center ">Cycle of Operations</h4>
            <p class="text-justify">Operations in shrinkage stopes employ the following steps in the production cycle:  </p>
            <ul>
                  <li><span class="fw-bold">Drilling:</span> pneumatic airleg drill or stoper; small hydraulic drill jumbo Blasting: ANFO, gels, or emulsions; charging by hand, pneumatic loader, or pumping system; firing electrically or by detonating cord.</li>
                  <li><span class="fw-bold">Secondary breakage: </span> drill and blast, packaged boulder charge, impact hammer. </li>
                  <li><span class="fw-bold">Loading: </span> gravity flow, front-end loader, LHD , overhead loader, slusher.  </li>
                  <li><span class="fw-bold"> Loading:</span> A load-haul-dump (LHD) device and front-end loader are very common; shovel, overhead mucker, and slusher occasionally used. </li>
                  <li><span class="fw-bold">Haulage:</span> LHD, truck, rail</li>
            </ul>
        
      </div>
      <p class="text-justify">Continuous extraction is not normally a part ofl shrinkage stoping, because of the nature of the operations and the hardness of the rock. The only opportunity for this type of operation is in the development stages of the method.
</p>
       
   
      </div>
      

      <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
         <a class="text-decoration-none text-dark " href="{{ route('blast8') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
         <a class="text-decoration-none text-dark " href="{{ route('blast9') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
        </div>
</div>
   </div>

  

@endsection
