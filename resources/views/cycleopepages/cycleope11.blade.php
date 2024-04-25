
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container">

      <div class=" d-flex justify-content-center flex-column align-items-center"    style="height:100vh;"   >
                        <div class="">
                                  <div class="d-flex justify-content-center ">
                                  <iframe width="560" height="315" src="https://www.youtube.com/embed/vVsuUbf4vOM?si=AkxXx-M_BnAsWPC4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                  </div>
                                    <br>
                             
                                     <br>
                                     <p class="text-justify">Drilling is a mechanical technique where holes or voids are made in different materials using a drill bit or similar cutting tools. This process usually involves rotating or striking the drill bit to enable it to pierce the material and extract material in the shape of chips or debris.</p>
                        </div>
      </div>



    

         <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
               <a class="text-decoration-none text-dark " href="{{ route('cycleope10') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
               <a class="text-decoration-none text-dark " href="{{ route('cycleope12') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
         </div>
   
   </div>

  

@endsection
