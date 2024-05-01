
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container">
      <br>
    <h1>Dislodge</h1>
      <div class=" d-flex justify-content-center flex-column align-items-center"    style="height:100vh;"   >

                        <div class="">
                                  <div class="d-flex justify-content-center ">
                                  <iframe width="560" height="315" src="https://www.youtube.com/embed/-uspSN9HCEQ?si=0_mz9u2XIlwWltDw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                  </div>
<br>
                                    
                                     <br>
                                     <p class="text-justify">Dislodging refers to the stripping away and removal of loose pieces of rock, which were not completely released from the rock during the blasting procedure. This working step is completed by a robust tunnel excavator.</p>
                        </div>
      </div>



    

         <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
               <a class="text-decoration-none text-dark " href="{{ route('cycleope22') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
               <a class="text-decoration-none text-dark " href="{{ route('cycleope24') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
         </div>
   
   </div>

  

@endsection
