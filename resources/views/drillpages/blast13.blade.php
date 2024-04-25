
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    
    <div class="container">
   <div class="container drill-main d-flex  justify-content-center mt-5 ">
    
    <div class="d-flex justify-content-center "> </div> 
      <div class="row ml-5 d-flex ">
            <div class="col  d-flex flex-column">   
               <h5>Stull Stoping</h5>
               <img class="shadow-lg" src="{{ asset('img/stull1.png') }}" alt="" style="height:18rem; width: 35rem;">
            <br><br>
            </div>  

            <div class="col">   
                <h4 class="text-center">Cycle of Operations</h4>
                  <p class="text-justify">Unlike cut-and-fill stoping, stull stoping cannot easily utilize mechanization] 
                  Ore movement in the stopes is primarily by gravity or slushers. The stopes arc 
                  small and cannot accommodate mobile equipment. Hence, the cycle of oper«i 
                  ations is labor-intensive and uses the following basic pattern: 
                  </p>
            </div>
           
           
            <p class="text-justify">Drilling: hand-held pneumatic drills (airleg drill or stoper); hole size 1.5 to 
2.5 in. (38 to 68 mm) 
Blasting: ANFO, slurries; charging by hand (cartridge) or machine (bulk); 
firing electrically, by detonating fuse, or by nonelectric methods 
Secondary blasting: (in stope) drill and blast, mudcap 
Loading: gravity flow to chutes or drawpoints, slusher transport to loadout 
points 
Haulage: LHD , truck, rail
</p>
      </div>
      

      <div class=" mt-5 btn d-flex justify-content-end  outline-none    border-0">
         <a class="text-decoration-none text-dark " href="{{ route('blast12') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
         <a class="text-decoration-none text-dark " href="{{ route('blast14') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
        </div>
</div>
   </div>

  

@endsection
