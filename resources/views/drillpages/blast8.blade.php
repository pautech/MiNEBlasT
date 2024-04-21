
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    
    <div class="container">
   <div class="container drill-main d-flex  justify-content-center mt-5 ">
    
    <div class="d-flex justify-content-center "> </div> 
      <div class="row ml-5 d-flex ">
            <div class="col  d-flex flex-column">   
               <h5>ROOM-AND-PILLAR MINING</h5>
               <img src="{{ asset('img/room-p.png') }}" alt="" style="height:20rem; width:25rem;">
            </div>  

            <div class="col">   
                  <p class="text-justify">Room-and-pillar mining is a very old method applied to horizontal or nearly horizontal deposits that has been adapted and refined over the years.</p>
            <br>
            <p class="text-justify">In room-and-pillar mining of coal and soft minerals, two common variations are conventional mining and continuous mining. Conventional mining is cyclical, using mobile mechanized equipment for production operations. It accounts for only 5% of underground coal mining. Continuous mining replaces separate operations with a single continuous miner, and it constitutes approximately 48% of underground coal production. In hard-rock formations, only conventional mining is feasible due to the inability of continuous miners to cut harder mineral deposits.</p>
            <h4 class="text-center ">Cycle of Operations</h4>
            <p class="text-justify">Conventional Mining: Production cycle = cut + drill + blast + load + haul </p>

            <table class="table table-bordered">
                  <tr>
                        <th class="">Operation</th>
                        <th class="">Coal Mining</th>
                        <th class="">Non Coal Mining</th>
                  </tr>
                  <tr>
                        <td class="">Cutting</td>
                        <td class="">Cutting Machine</td>
                        <td class="">Not performed</td>
                  </tr>
                  <tr>
                        <td class="">Drilling</td>
                        <td class="">Drag-bit rotary drill</td>
                        <td class="">Hydraulic percussion drill jumbo</td>
                  </tr>
                  <tr>
                        <td class="">Blasting</td>
                        <td class="">Permasive Explosive</td>
                        <td class="">ANFO</td>
                  </tr>
                  <tr>
                        <td class="">Loading</td>
                        <td class="">Gathering-arm loader</td>
                        <td class="">Diesel front-end loader</td>
                  </tr>
                  <tr>
                        <td class="">Hauling</td>
                        <td class="">Shuttle car</td>
                        <td class="">Diesel truck or LHD</td>
                  </tr>
            </table>
            <p>Continuous Mining: Production cycle = mine + haul </p>
      </div>
       
   
      </div>
      

      <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
         <a class="text-decoration-none text-dark " href="{{ route('blast7') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
         <a class="text-decoration-none text-dark " href="{{ route('blast9') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
        </div>
</div>
   </div>

  

@endsection
