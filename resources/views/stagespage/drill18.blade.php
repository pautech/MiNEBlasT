
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


   <div class="container">
   <div class="container drill-main d-flex  justify-content-center mt-3 ">
        <div class="row ">
            <div class="col">
                <h1 class=" pt-3 mt-3 h1-drill1-title">Shaft Sinking</h1>
                <p class="fs-5 text-justify">- Shaft sinking in underground mining is the procedure of digging a vertical or inclined passage (shaft) to reach underground mineral reserves. This process encompasses various activities aimed at creating a safe and efficient pathway for miners, equipment, and materials to move between surface and underground operations. 
                </p>
                <br>
                <p class="fs-5 text-justify">- The main objectives of shaft sinking include facilitating the transportation of ore and waste, ensuring ventilation, and enabling personnel entry.
                </p>
            </div>
        
        </div>
        <div class="row ml-5">
            <div class="col d-flex justify-content-around flex-wrap">
            <img class="mt-5 " src="{{ asset('img/shaft1.jpg') }}" alt="drill picture" style="height:15rem; width:20rem;">
            <img class="mt-5  " src="{{ asset('img/shaft2.jpg') }}" alt="drill picture" style="height:15rem; width:20rem;">
            </div>
        
        </div>

      <div class=" mt-4 btn d-flex justify-content-end  outline-none  border-0">
      <a class="text-decoration-none text-dark " href="{{ route('drill17') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5">Back</button></a>
         <a class="text-decoration-none text-dark " href="{{ route('drill18') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
      </div>
</div>
   </div>
  

@endsection
