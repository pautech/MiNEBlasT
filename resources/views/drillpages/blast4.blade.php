
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container">
   <div class="container drill-main d-flex  justify-content-center mt-5 ">
    <p class="text-justify fs-5"><span class="fw-bold">Secondary</span> blasting involves the use of smaller charges to further break the rock and remove any remaining unbroken areas. This process allows for a more precise excavation and can significantly reduce the amount of overbreak and underbreak. To control overbreak, secondary blasting can be used to fragment rock that was not adequately fragmented by the initial production blast. This technique can improve the quality of the rock face and reduce overbreak.</p>
    <br>
    <p class="text-justify fs-5">The two methods available include plaster or mud-cap blasting and pop-shooting.</p>
    <div class="d-flex justify-content-center "> </div> 
      <div class="row ml-5 d-flex ">
            <div class="col-4  d-flex">   
               <p class="align-self-end">This method involves firing a charge of explosive placed on the rock and covered with clay (or, a “mud-cap”).</p>
            </div>   
            <div class="col">   
              
                <a class="text-decoration-none text-dark " > <img class="mt-5" src="{{ asset('img/plasting.png') }}" alt="drill picture" style="height:10rem; width:30rem;"></a>
                
            </div>
       
   
      </div>

      <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
         <a class="text-decoration-none text-dark " href="{{ route('blast3') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
         <a class="text-decoration-none text-dark " href="{{ route('blast4') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
        </div>
</div>
   </div>

  

@endsection
