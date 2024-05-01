
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


   <div class="container">
   <div class="container drill-main  mt-5 ">
    <h3>Drill and Blast Method</h3>
    <p class="text-justify fs-5">Drill and blast method is mostly used method for the excavation throughout the world. The method can be used in all types of rocks and the initial cost is lower than the mechanical method like TBM. This tunneling method involves the use of explosives. Compared with bored tunneling by Tunnel Boring Machine, blasting generally results in higher duration of vibration levels. The excavation rate is also less than TBM (usually 3 to 5m a day).</p>
    <div class="d-flex justify-content-center">
    <div class="row ml-5">
            <div class="col ">
               
                 <img class="mt-5" src="{{ asset('img/cycle.png') }}" alt="drill picture" style="height:90%; width:88%;">
    
            </div>
        
    </div>
    
    </div>
    <br>
    <h5>The typical cycle of excavation by blasting is performed in the following steps:</h5>
    <ul>
        <li>Drilling blast holes and loading them with explosives.</li>
        <li>Detonating the blast, followed by ventilation to remove blast fumes.</li>
        <li>Removal of the blasted rock (mucking).</li>
        <li>Scaling crown and walls to remove loosened pieces of rock.</li>
        <li>Installing initial ground support.</li>
        <li>Advancing rail, ventilation, and utilities.</li>
    </ul>

    <h5>Advantages:</h5>
    <ul>
        <li>Potential environmental impacts in terms of noise, dust and visual on sensitive receives are significantly reduced and are restricted to those located near the tunnel portal;</li>
        <li>Compared with the cut-and-cover approach, quantity of C&D materials generated would be much reduced;</li>
        <li>Compared with the cut-and-cover approach, disturbance to local traffic and associated environmental impacts would be much reduced;</li>
        <li>Blasting would significantly reduce the duration of vibration, though the vibration level would be higher compared with bored tunnelling;</li>
    </ul>

    <h5>Disadvantages:</h5>
    <ul>
        <li>Potential hazard associated with establishment of a temporary magazine site for overnight storage of explosives shall be addressed through avoiding populated areas in the site selection process.</li>
    </ul>
        <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
                <a class="text-decoration-none text-dark " href="{{ route('cycleope1') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
        </div>
    </div>
   </div>
  

@endsection
