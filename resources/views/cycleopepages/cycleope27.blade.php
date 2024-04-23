
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container">
      <br>
    <h1>Bolting</h1>
      <div class=" d-flex justify-content-center flex-column align-items-center"    style="height:100vh;"   >

                        <div class="">
                                  <div class="d-flex justify-content-center ">
                                  <iframe width="560" height="315" src="https://www.youtube.com/embed/g5DxHddv12o?si=HIdaZjnlSLrRjGPM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                  </div>
<br>
                                    
                                     <br>
                                     <p class="text-justify">Bolting involves the installation of rock bolts or anchors into the surrounding rock to provide additional support and reinforcement. After blasting, some underground excavations may be prone to instability. Bolting helps secure the rock mass, preventing collapses or rockfalls. It contributes to the overall safety and stability of the underground workings.

</p>
                        </div>
      </div>



    

         <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
               <a class="text-decoration-none text-dark " href="{{ route('cycleope26') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
               <a class="text-decoration-none text-dark " href="{{ route('cycleope28') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
         </div>
   
   </div>

  

@endsection
