
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container">

      <div class=" d-flex justify-content-center flex-column align-items-center"    style="height:70vh;"   >
                        <div class="">
                                    <h1 class="text-center " style="font-size:5em;">ROCK BOLT</h3>
                                   <br><br>
                        </div>
                        <p class="text-justify">A rock bolt is a steel threaded rod utilized to stabilize underground rock and soil structures during excavation. Essentially, it is embedded within the rock and capable of withstanding the tension applied to the rod.</p>
                        <br>
                        <p class="text-justify">The anchoring arrangement created by a rock bolt involves a prestressed bolt group, which can transmit the tensile stress of the structure to the deeper, stable layers of the strata or reinforce unstable rock masses. This configuration establishes a structural system wherein the rock bolt and the rock mass collaborate and interact, forming a cohesive bearing structure. Serving as a foundational element in geotechnical engineering, rock bolts play a pivotal role in enhancing the stability and safety of tunnels, mines, and other subsurface constructions.</p>
      </div>

    

         <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
               <a class="text-decoration-none text-dark " href="{{ route('cycleope27') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
               <a class="text-decoration-none text-dark " href="{{ route('cycleope29') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
         </div>
   
   </div>

  

@endsection
