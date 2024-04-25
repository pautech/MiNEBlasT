
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container">

      <div class=" d-flex justify-content-center flex-column "    style="height:70vh;"   >
                        <div class="">
                                    <h1 class="" style="font-size:2em;">TYPES OF ROCK BOLT</h3>
                                   <br><br>
                        </div>

                        <ol type="1">
                              <li><strong>Self-Drilling Rock Bolt</strong></li>
                              <p class="text-justify">Self-drilling rock bolts, also referred to as hollow bars, constitute a self-drilling anchor system comprising a hollow anchor bar, nut, plate, coupler, centralizer, and drill bit. Distinguished by their hollow core, these bolts facilitate simultaneous drilling and injection of grout to consolidate the surrounding rock. This integration of drilling, grouting, and anchoring functionalities makes them particularly suitable for fractured rocks and challenging geological formations where conventional drilling is impractical. Self-drilling rock bolts excel in stabilizing broken or loose rock formations prone to collapse, thereby significantly enhancing support in complex geological conditions and optimizing construction outcomes. Click more</p>
                              <li><strong>. Expansion Shell Hollow Rock Bolt</strong></li>
                              <p class="text-justify">The expansion shell hollow anchor bar comprises a hollow anchor bar, plate, nut, and expansion shell. This type of anchor bar can be prestressed and adjusted using a torque wrench. Ranging from 1 to 5 meters in length, these bolts are capable of carrying capacities ranging from 100 up to approximately 500KN. Primarily employed in mining and tunnel systematic support, they provide essential reinforcement for underground structures. Click more</p>
                        </ol>
                       
                        <br>
                        
      </div>

    

         <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
               <a class="text-decoration-none text-dark " href="{{ route('cycleope28') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
               <a class="text-decoration-none text-dark " href="{{ route('cycleope29') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
         </div>
   
   </div>

  

@endsection
