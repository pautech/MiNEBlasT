
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


   <div class="container">
   <h1 class=" pt-3 mt-5 h1-drill2-title">Rotary Percussive Drilling Accessories</h1>
   <div class="container drill-main d-flex  justify-content-center mt-5">
        <div class="row ">
            <div class="col">
           <h2>Types of Threads</h2>
           <p>The primary role of drill steel threads is to secure shanks, coupling sleeves, rods, and bits together during the drilling process.</p>
            <br>
            <h3>R-thread:</h3>
            <p>-Utilized in small blastholes with drill rods ranging from 22 to 38 mm, paired with robust independent rotation rock drills featuring air flushing. </p>
            <h3>T-thread: </h3>
            <p>-Suitable for a wide range of drilling conditions, compatible with drill rod diameters between 38 to 51 mm.</p>
            <h3>C-thread: </h3>
            <p>- Specifically designed for large extension rods of 51 mm.</p>
            <h3>GD or HL-thread: </h3>
            <p>-Exhibits characteristics between R and T threads, featuring an asymmetrical 'sawtooth' profile.</p>
          </div>
     </div>
      <div class=" mb-3 mt-3 btn d-flex justify-content-end outline-none  border-0">
        <a class="text-decoration-none text-dark " href="{{ route('drill6') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5">Back</button> </a>
        <a class="text-decoration-none text-dark " href="{{ route('drill8') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button> </a>
      
        
      </div>
</div>
   </div>
  

@endsection
