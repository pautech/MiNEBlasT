
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container">

      <div class=" d-flex justify-content-center flex-column align-items-center"   >
                        <div class="">
                        <br>
                        <h4>Drilling Pattern Design</h4>
                        <br>
                        <p class="text-justify">The drilling pattern ensures the distribution of the explosive in the rock and desired blasting result. Several factors must be taken into account when designing the drilling pattern: rock drillability and blastability, the type of explosives, blast vibration restrictions and accuracy
requirements of the blasted wall etc. The basic drilling & blasting factors, and drilling pattern design are discussed below. Since every mining and construction site has its own characteristics, the given drilling patterns should be considered merely as guidelines.
</p>
                        <br>
                                  <div class="d-flex justify-content-center ">
                                 <img src="{{ asset('img/drillp.png') }}" alt="drill design" style="height:20rem; width:35rem;">
                                  </div>
                                                <br>
                                    
                                                <br>
                                                <p class="text-justify">Drilling pattern design in tunneling and drifting is based on the following factors:</p>


                                          <ul>
                                                <li>Tunnel dimensions</li>
                                                <li>Tunnel geometry</li>
                                                <li>Hole size</li>
                                                <li>Final quality requirements</li>
                                                <li>Geological and rock mechanical conditions</li>
                                                <li>Explosives availability and means of detonation</li>
                                                <li>Expected water leaks</li>
                                                <li>Vibration restrictions</li>
                                                <li>Drilling equipment</li>
                                            
                                          </ul>
                                          <p class="text-justify">Depending on site conditions, all or some of the above factors are considered important enough to determine the tunnel drilling pattern.Construction sites typically have several variations of drilling patterns to take into account the changing conditions in each tunnel. Drifting in mines is carried out with 5 to 10 drilling patterns for different tunnel sizes (production drifters, haulage drifters, drawpoints, ramps etc.) The pattern is finalized at the drilling site.Tunnel blasting differs from bench blasting in that tunnels have only one free surface available when blasting starts. This restricts round length, and the volume of rock that can be blasted at one time. Similarly, it means that specific drilling and charging increases as the tunnel face area decreases.When designing a drilling pattern in tunneling, the main goal is to ensure the optimum number of correctly placed and accurately drilled holes. This helps to ensure successful charging and blasting, as well as produce accurate and smooth tunnel walls, roof and floor. A drilling pattern optimized in this way is also the most economical and efficient for the given conditions.</p>

                                    </div>
      </div>





         <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
               <a class="text-decoration-none text-dark " href="{{ route('cycleope11') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
               <a class="text-decoration-none text-dark " href="{{ route('cycleope13') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
         </div>
         <br>
   
   </div>

  

@endsection
