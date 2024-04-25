
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container">
         <div class=" d-flex justify-content-center" >
            <img class=" shadow-lg mt-5" src="{{ asset('img/drill-d.png') }}" alt="drill picture" style="height:80%; width:80%;">
         </div>
         <div class="container drill-main d-flex  justify-content-center mt-5 ">
               <p class="fs-5 text-justify">For many years dynamite was the primary explosive used underground, but this has largely been replaced by blasting agents based on ammonium nitrate (AN; chemical formula NH4NO3) and fuel oil (FO; chemical formula CH2). Neither of these components is explosive by itself, but, when mixed in the proper weight ratio (94.5 percent AN, 5.5 percent FO) and ignited, they cause the following chemical reaction:</p>  
         </div>

         <div class=" d-flex justify-content-center" >
            <img class=" shadow-lg " src="{{ asset('img/formula.png') }}" alt="drill picture" style="height:3rem; width:20rem;">
         </div>
         <div class="container drill-main d-flex  justify-content-center mt-5 ">
               <p class="fs-5 text-justify">The products of the above reaction (carbon dioxide, water, and nitrogen, respectively) are commonly present in air. If there is too much fuel oil in the mixture, however, the poisonous gas carbon monoxide will be formed. For this reason gases are carried out of the mine through the ventilation system, and blasting is normally done between shifts or at the end of the last shift, when the miners are out of the mine.
</p>  
         </div>
         <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
               <a class="text-decoration-none text-dark " href="{{ route('blast4') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
               <a class="text-decoration-none text-dark " href="{{ route('blast6') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
         </div>
   
   </div>

  

@endsection
