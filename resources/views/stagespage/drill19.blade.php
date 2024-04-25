
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


   <div class="container">
   <div class="container drill-main d-flex  justify-content-center mt-3 ">
        <div class="row ">
            <div class="col">
                <h1 class=" pt-3 mt-3 h1-drill1-title">Shaft Sinking</h1>
                <h3>The methods for shaft sinking can be divided in three groups:</h3>
                <br>
                <h5>The benching method (half-bottom method)</h5>
                <p class="fs-5 text-justify">- This method 1s particularly suitable for square or rectangular sided shafts. It consists in drilling one half of the shaft cross section with a fan, leaving the other half (lower) as a sump for water or spoil, if necessary, or as a free cavity.</p>
                <br>
                <h5>The spiral method</h5>
                <p class="fs-5 text-justify">- The spiral method, also known as the Swedish method, this was first used in Sweden and consists in excavating downwards in a spiral, with a height that depends upon the diameter of the shaft and the type of ground to be fragmented. Within each cut, a section of the spiral is blasted with an angle large enough to make the time necessary to carry out a complete cut coincide with a whole unit of the available work time.</p>
                <br>
                <h5>The full-bottom method</h5>
                <p class="fs-5 text-justify">- The full-bottom method is used frequently in shaft sinking, as it suits either rectangular or round sections shafts. </p>
                <p class="fs-5 text-justify">Numerous methods are employed for the arrangement of blastholes since, akin to drilling and tunnelling scenarios, establishing an open surface is essential with a limited number of blastholes, unless a sizable diameter pilot hole or expansion raises are accessible. The excavation face is initiated using plough cuts, V-cuts, cone cuts, and relief blastholes.</p>
                <br>
                <p class="fs-5 text-justify"><span class="fw-bold">V-shaped cuts </span>are used in shafts that have a rectangular shape. The angles of the dihedral planes formed by the inclined blastholes, which typically range from 50 to 75 degrees, need to match the existing fractures. This matching ensures that these fractures are effectively utilized during the fracturing process. </p>
                <p class="fs-5 text-justify">In contrast, <span class="fw-bold">cone cuts </span>are mainly employed in shafts that have a circular shape. This choice is influenced by the convenience of mechanizing the drilling process and the lower powder factor compared to the plough cut technique.</p>
            </div>
        
        </div>
        

      <div class=" mt-4 btn d-flex justify-content-end  outline-none  border-0">
      <a class="text-decoration-none text-dark " href="{{ route('drill18') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5">Back</button></a>
         <a class="text-decoration-none text-dark " href="{{ route('drill20') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
      </div>
</div>
   </div>
  

@endsection
