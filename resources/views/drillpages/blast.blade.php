
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


   <div class="container">
   <div class="container drill-main d-flex  justify-content-center mt-5 ">
    <p class="text-justify fs-5">Blasting in a mine generally occurs in two phases, primary blasting and secondary blasting. Primary blasting involves breaking down of in-situ rock in development and stoping as well as by drilling holes in rocks. Secondary blasting is performed to get rid of overburden.</p>
    <div class="d-flex justify-content-center "><h3>Two phases of blasting</h3>   </div> 
    <div class="row ml-5">
            <div class="col">
                <h1 class=" pt-3 mt-3 h1-drill1-title">Shaft Sinking</h1>
                <a class="text-decoration-none text-dark " href="{{ route('drill18') }}"> <img class="mt-5" src="{{ asset('img/shaft.png') }}" alt="drill picture" style="height:20rem; width:20rem;"></a>

            </div>
            <div class="col">
                <h1 class=" pt-3 mt-3 h1-drill1-title">Raise Driving</h1>
                <a class="text-decoration-none text-dark " href="{{ route('drill17') }}"> <img class="mt-5" src="{{ asset('img/raise.png') }}" alt="drill picture" style="height:20rem; width:20rem;"></a>
            </div>
        </div>
      <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
      <a class="text-decoration-none text-dark " href="{{ route('drill16') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5">Back</button></a>
         <a class="text-decoration-none text-dark " href="{{ route('drill18') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
      </div>
</div>
   </div>
  

@endsection
