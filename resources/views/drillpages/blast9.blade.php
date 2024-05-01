
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    
    <div class="container">
   <div class="container drill-main d-flex  justify-content-center mt-5 ">
    
    <div class="d-flex justify-content-center "> </div> 
      <div class="row ml-5 d-flex ">
            <div class="col  d-flex flex-column">   
               <h5>STOPE-AND-PILLAR MINING</h5>
               <img src="{{ asset('img/stope-p.jpg') }}" alt="" style="height:20rem; width:25rem;">
            </div>  

            <div class="col">   
                  <p class="text-justify"> Stope-and-pillar mining is the unsupported method in which openings are driven horizontally in regular or random pattern to form pillars for ground support.</p>
            <br>
            <p class="text-justify">The stope-and-pillar mining process is similar to room-and-pillar mining in several ways. However, most references (Stewart, 1981; Hustrulid, 1982; and Haycocks, 1992) generally differentiate stope-and-pillar mining if it meets at least two of the following qualifications: </p>
            <ol type="1">
                  <li class="text-justify">The pillars are irregularly shaped and sized and either randomly located or located in low-grade ore. </li>
                  <li class="text-justify">The mineral deposit is < 20 ft (6 m) in thickness, the openings are higher than they are wide, or a benching or slabbing technique must be utilized. </li>
                  <li class="text-justify">The commodity being exploited is a mineral other than coal. Although some noncoal deposits are mined by the room-and-pillar method, no coal deposits are mined by the stope-and-pillar method.</li>
            </ol>
      
            <h4 class="text-center ">Cycle of Operations</h4>
            <p class="text-justify">Nearly all stope-and-pillar mines use conventional mining practice, with the production cycle involving: 
            <p>Production cycle = drill + blast + load + haul </p>
            </p>
            <h6>The cycle of operations consists of the following: </h6>
            <ul>
                  <li><span class="fw-bold">Drilling:</span> Hydraulic or pneumatic drill jumbos are heavily favored; rotary  drill rigs can be used in softer rocks. </li>
                  <li><span class="fw-bold">Blasting:</span> Ammonium nitrate and fuel oil (ANFO), gels, or emulsions; charging by hand or by pneumatic loader; firing by electric, nonelectric, or detonating fuse. </li>
                  <li><span class="fw-bold">Secondary blasting:</span> Drill and blast; impact hammer; drop ball. </li>
                  <li><span class="fw-bold"> Loading:</span> A load-haul-dump (LHD) device and front-end loader are very common; shovel, overhead mucker, and slusher occasionally used. </li>
                  <li><span class="fw-bold">Haulage:</span> Truck, LHD , belt conveyor, shuttle car.</li>
            </ul>
        
      </div>
       
   
      </div>
      

      <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
         <a class="text-decoration-none text-dark " href="{{ route('blast8') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
         <a class="text-decoration-none text-dark " href="{{ route('blast10') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
        </div>
</div>
   </div>

  

@endsection
