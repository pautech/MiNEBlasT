
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container">

      <div class=" d-flex justify-content-center flex-column align-items-center"    style="height:100vh;"   >
                        <div class="">
                                  <div class="d-flex justify-content-center ">
                                    <video width="600" height="400" controls>
                                                      <source src="{{ asset('video/surveying.mp4') }}" type="video/mp4">
                                     </video>
                                  </div>
<br>
                                     <h1 class="" style="font-size:2em;">Total stations</h3>
                                     <br>
                                     <p class="text-justify">are advanced surveying instruments that combine a theodolite and electronic distance meter (EDM) to measure angles and distances accurately. They are widely used in underground exploration tunnels for tasks such as setting out, surveying, and monitoring. In drilling and blasting, total stations can be used for precise stakeout of key features like rock bolts, anchors, blast holes, and other construction equipment. By using a high-powered laser pointer and specialized field software like Trimble Access Tunnels, surveyors can efficiently stake out these features in challenging underground conditions. After the drilling and blasting process, total stations can be used to create comprehensive excavation control and overbreak/underbreak reports. By scanning the excavated area and processing the data with software like Trimble Business Center (TBC) Tunneling, surveyors can quickly and easily generate detailed reports on the excavation progress and accuracy. Total stations can also be used for convergence monitoring, which involves measuring the movement of the tunnel walls and roof over time to ensure safety and stability. By using automated total station rounds and processing the data with TBC Monitoring, engineers can generate displacement reports and ensure proper convergence tolerances are met.In summary, total stations are versatile instruments that can be used throughout the drilling and blasting process in underground exploration tunnels. They provide accurate measurements, efficient data processing, and valuable insights into the excavation progress and safety of the tunnel. </p>
                        </div>
      </div>



    

         <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
               <a class="text-decoration-none text-dark " href="{{ route('cycleope3') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
               <a class="text-decoration-none text-dark " href="{{ route('cycleope5') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
         </div>
   
   </div>

  

@endsection
