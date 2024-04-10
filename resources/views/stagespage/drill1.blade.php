
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


   <div class="container">
   <h1 class=" pt-3 mt-5 h1-drill2-title">DRILLING</h1>
   <div class="container drill-main d-flex  justify-content-center mt-5">
        <div class="row ">
            <div class="col">
           <p class="drill2-content">Rock drilling, within the realm of blasting, serves as the initial step aimed at creating holes in rock masses with the appropriate shape and distribution to accommodate explosive charges and their initiating devices. 
            </p>
            <br>
            <br>
            <p class="drill2-content">Various systems of rock drilling have been developed and categorized based on their current practicality, including:
            </p>
            <ul>
                <li class="drilling-systems"><span class="font-weight-bold">Mechanical</span> methods like percussion, rotary, and rotary-percussion;</li>
                <li class="drilling-systems"><span class="font-weight-bold">Thermal</span>techniques such as flame, plasma, hot fluid, and freezing; </li>
                <li class="drilling-systems"><span class="font-weight-bold">Hydraulic</span> approaches like jet, erosion, and cavitation; </li>
                <li class="drilling-systems"><span class="font-weight-bold">Sonic </span> methods involving high-frequency vibration; </li>
                <li class="drilling-systems"><span class="font-weight-bold">Chemical</span> processes like microblast and dissolution;</li>
                <li class="drilling-systems"><span class="font-weight-bold">Electrical</span> methods such as electric arc and magnetic induction; </li>
                <li class="drilling-systems"><span class="font-weight-bold">Seismic</span> techniques like laser rays; and </li>
                <li class="drilling-systems"><span class="font-weight-bold">Nuclear </span> methods encompassing fusion and fission.</li>
            </ul>
            </div>
        </div>
      <div class=" mb-3 mt-3 btn d-flex justify-content-end outline-none  border-0">
        <a class="text-decoration-none text-dark " href="{{ route('drill') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5">Back</button> </a>
        <a class="text-decoration-none text-dark " href="{{ route('drill2') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button> </a>
      
        
      </div>
</div>
   </div>
  

@endsection
