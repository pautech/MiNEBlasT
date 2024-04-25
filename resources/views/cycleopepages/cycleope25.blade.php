
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container">
      <br>
    <h1>Scale</h1>
      <div class=" d-flex justify-content-center flex-column align-items-center"    style="height:100vh;"   >

                        <div class="">
                                  <div class="d-flex justify-content-center ">
                                  <iframe width="560" height="315" src="https://www.youtube.com/embed/Sn3D9WHS_eg?si=nnH_jimFRbyNj_xN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                  </div>
<br>
                                    
                                     <br>
                                     <p class="text-justify">After the loose pieces of rock have been dislodged from the working face, the blasted material – the rubble or spoil – is carried out of the tunnel. The material is either loaded onto dump trucks with wheel loaders and taken from the tunnel to an outside landfill or it is transported from the site of excavation to the landfill on conveyer belts. During the construction of the Brenner Base Tunnel, the transportation of the excavated material mainly takes place automatically using conveyor belts.</p>
                        </div>
      </div>



    

         <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
               <a class="text-decoration-none text-dark " href="{{ route('cycleope24') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
               <a class="text-decoration-none text-dark " href="{{ route('cycleope26') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
         </div>
   
   </div>

  

@endsection
