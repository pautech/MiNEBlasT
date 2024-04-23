
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container">

      <div class=" d-flex justify-content-center flex-column align-items-center"    style="height:100vh;"   >
                        <div class="">
                                  <div class="d-flex justify-content-center ">
                                  <iframe width="560" height="315" src="https://www.youtube.com/embed/KHXEG8lXuBI?si=CtgN0hjqzx8LA7Ag" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                  </div>
<br>
                                    
                                     <br>
                                     <p class="text-justify">The drill holes are now filled with explosives, detonators are attached to the explosive devices and the individual explosive devices are connected to one another. The holes are blasted in a proper sequence, from the center outward, one after the other. Although more than 100 explosions may be set off, one after the other, the blastsequence is completed in several seconds. The devices should not explode at the same time, but rather one after the other at specified intervals. Only when the blast master has ensured that nobody is left in the danger zone can the explosion be triggered by the blasting machine.</p>
                        </div>
      </div>



    

         <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
               <a class="text-decoration-none text-dark " href="{{ route('cycleope15') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
               <a class="text-decoration-none text-dark " href="{{ route('cycleope17') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
         </div>
   
   </div>

  

@endsection
