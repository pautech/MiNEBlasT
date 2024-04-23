
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container">
      <br>
    <h1>Ventilating</h1>
      <div class=" d-flex justify-content-center flex-column align-items-center"    style="height:100vh;"   >

                        <div class="">
                                  <div class="d-flex justify-content-center ">
                                  <iframe width="560" height="315" src="https://www.youtube.com/embed/CjSkVU9rnRk?si=QZxv3I_c7GgpJ08B" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                  </div>
<br>
                                    
                                     <br>
                                     <p class="text-justify">The blast causes lots of rock to be flung through the tunnel, dispersing clouds of dust that then mix with the combustion gases of the explosion. So that the miners can resume work in the tunnel, the bad air must be removed from the tunnel. This is done by using so-called air-ducting systems, long steel or plastic pipes, which are attached to the roof of the tunnel and blow fresh air onto the working face. This gives rise to localized excess pressure and the bad air is pushed towards the tunnel exit.</p>
                        </div>
      </div>



    

         <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
               <a class="text-decoration-none text-dark " href="{{ route('cycleope20') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
               <a class="text-decoration-none text-dark " href="{{ route('cycleope22') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
         </div>
   
   </div>

  

@endsection
