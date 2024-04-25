
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


   <div class="container">
   <h1 class=" pt-3 mt-5 h1-drill2-title">Fundamentals of Rotary Percussive Drilling</h1>
   <div class="container drill-main d-flex  justify-content-center mt-5">
        <div class="row ">
            <div class="col">
           <p class="drill2-content">Rotary percussion drilling is based upon the combination of the following:</p>
            <br>
            <h3>Percussion</h3>
            <p>- The shock waves created by the piston's repeated impacts are transferred to the bit through the drill steel (in top hammer) or directly onto it (down the hole). </p>
            <h3>Rotation</h3>
            <p>- Rotation involves turning the bit to ensure impacts occur on the rock from various angles.</p>
            <h3>Feed, or thrust load</h3>
            <p>- To keep the drill bit in contact with the rock, a thrust load or feed force is exerted on the drill string.</p>
            <h3>Flushing</h3>
            <p>- The process of removing drill cuttings from the blasthole.</p>

          </div>
     </div>
      <div class=" mb-3 mt-3 btn d-flex justify-content-end outline-none  border-0">
        <a class="text-decoration-none text-dark " href="{{ route('drill5') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5">Back</button> </a>
        <a class="text-decoration-none text-dark " href="{{ route('drill7') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button> </a>
      
        
      </div>
</div>
   </div>
  

@endsection
