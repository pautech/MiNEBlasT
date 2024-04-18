
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container">
   <div class="container drill-main d-flex  justify-content-center mt-5 ">
    <p class="text-justify fs-5">Both overbreak and underbreak can have significant impacts on the stability of the excavated area, the efficiency of the excavation process, and the cost of the project. The primary blasting should proceed to secondary blasting to achieve better control over the excavation boundary and minimize overbreak and underbreak.</p>
    <div class="d-flex justify-content-center "> </div> 
    <div class="row ml-5">
            <div class="col">   
                <h1 class=" pt-3 mt-3 h1-drill1-title ">Underbreak</h1>
                <a class="text-decoration-none text-dark "> <img class="mt-5" src="{{ asset('img/Underbreak.png') }}" alt="drill picture" style="height:20rem; width:30rem;"></a>

            </div>
            <div class="col">
                <h1 class=" pt-3 mt-3 h1-drill1-title">Overbreak</h1>
                <a class="text-decoration-none text-dark " > <img class="mt-5" src="{{ asset('img/overbreak.png') }}" alt="drill picture" style="height:20rem; width:30rem;"></a>
                
            </div>
        </div>
      <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
         <a class="text-decoration-none text-dark " href="{{ route('blast2') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
         <a class="text-decoration-none text-dark " href="{{ route('blast4') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
        </div>
</div>
   </div>

  

@endsection
