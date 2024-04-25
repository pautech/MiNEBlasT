
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    
    <div class="container">
   <div class="container drill-main d-flex  justify-content-center mt-5 ">
    
    <div class="d-flex justify-content-center "> </div> 
      <div class="row ml-5 d-flex ">
            <div class="col  d-flex flex-column">   
               <h5>Shrinkage Stoping</h5>
               <img class="shadow-lg" src="{{ asset('img/cut1.jpg') }}" alt="" style="height:18rem; width: 35rem;">
               <br><br> 
               <p class="text-justify">The only method of the supported class in common use today, cut-and-fill stoping, is normally used in an overhand fashion. The ore is extracted in horizontal slices and replaced with backfill material. </p>
            </div>  

            <div class="col">   
                <h4 class="text-center">Cycle of Operations</h4>
                  <p class="text-justify">Mechanization using diesel equipment is the normal method of making cut-and-fill stopes both productive and efficient.</p>
                  <p class="text-justify">The production cycle is much like that for stope-and-pillar operations in many ways. The following operations are normally used: </p>
           
           
            <ol type="1">
                  <li class="text-justify"><span class="fw-bold">Drilling:</span> pneumatic or hydraulic percussion or rotary-percussion drills (usually mounted and highly mechanized); handheld drill now avoided except in extremely rare situations; hole sizes normally 2 to 3 in. (51 to 76 mm). </li>
                  <li><span class="fw-bold">Blasting:</span> ammonium nitrate and fuel oil (ANFO), slurries, emulsions; charging by cartridge or by bulk methods; firing electrically or by nonelectric methods  </li>
                  <li><span class="fw-bold"> Secondary Breakage: </span> drill and blast, mudcapping, impact hammer (all performed in the stope). </li>
                  <li><span class="fw-bold"> Loading:</span> (in the stope) load-haul-dump (LHD) device, front-end loader, slusher; (on the haulage level) LHD, front-end loader.</li>
                  <li><span class="fw-bold">Haulage:</span> LLHD, truck, rail </li>
            </ol>
        
      </div>
      </div>
      

      <div class=" mt-5 btn d-flex justify-content-end  outline-none    border-0">
         <a class="text-decoration-none text-dark " href="{{ route('blast11') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
         <a class="text-decoration-none text-dark " href="{{ route('blast13') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
        </div>
</div>
   </div>

  

@endsection
