
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


   <div class="container">
   <h1 class=" pt-3 mt-5 h1-drill1-title">DRILLING</h1>
   <div class="container drill-main d-flex  justify-content-center mt-5">
        <div class="row ">
            <div class="col">
           <p class="drill1-content">Drilling is a mechanical technique where holes or voids are made in different materials using a drill bit or similar cutting tools. This process usually involves rotating or striking the drill bit to enable it to pierce the material and extract material in the shape of chips or debris.
            </p>
            </div>
            <div class="col">
            <img src="{{ asset('img/drillpic1.png') }}" alt="drill picture" style="height:20rem; width:33rem;">
            </div>
        </div>
      <div class=" mt-3 btn d-flex justify-content-end  outline-none  border-0">
      <a class="text-decoration-none text-dark " href="{{ route('drill1') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 outline-none">Next</button></a>    
      </div>
</div>
   </div>
  

@endsection
