
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container">

      <div class=" d-flex justify-content-center flex-column align-items-center"    style="height:70vh;"   >
                        <div class="">
                                    <h1 class="" style="font-size:3em;">Geological mapping</h3>
                                   <br>
                                    <p class="text-justify">The working face is now freely accessible and the geologist has a few minutes to map it. In the process, he determines what type of rock is present and how the rocks lie, i.e. whether they dip in a flat or steep manner, whether they are folded or even broken. He uses a special compass as an aid to measure the angle of incidence and direction of incidence of the rock structures. At the same time, the strength of the rock, the reaction of the rock mass to the excavation process and any mountain water infiltration are also documented. The mapping report created from this – with sketches and photos – serves as the basis for the selection of appropriate supporting measures.</p>
                        </div>
      </div>

    

         <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
               <a class="text-decoration-none text-dark " href="{{ route('cycleope2') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
               <a class="text-decoration-none text-dark " href="{{ route('cycleope4') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
         </div>
   
   </div>

  

@endsection
