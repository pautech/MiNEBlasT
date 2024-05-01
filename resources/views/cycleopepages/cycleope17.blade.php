
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container">
   <div class="container drill-main d-flex  justify-content-center mt-5 ">
      <br>
      <p class="text-justify">Blasting in a mine generally occurs in two phases, primary blasting and secondary blasting. Primary blasting involves breaking down of in-situ rock in development and stoping as well as by drilling holes in rocks. Secondary blasting is performed to get rid of overburden.
</p><br>
         <p class="text-justify">Primary blasting is the initial stage of blasting in a rock mass, where the main objective is to break the rock into smaller pieces that can be easily removed. The primary blast can lead to two types of deviations from the desired excavation boundary: overbreak and underbreak. In practical smooth blasting, rock fracturing is influenced by in-situ stress, which frequently leads to underbreak/overbreak and excavation damaged zone and consequently poses a serious threat to the safety of the excavated structure.

</p>
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


      <p>Both overbreak and underbreak can have significant impacts on the stability of the excavated area, the efficiency of the excavation process, and the cost of the project. The primary blasting should proceed to secondary blasting to achieve better control over the excavation boundary and minimize overbreak and underbreak. 
</p><br>

    <p class="text-justify fs-5"><span class="fw-bold">Secondary</span> blasting involves the use of smaller charges to further break the rock and remove any remaining unbroken areas. This process allows for a more precise excavation and can significantly reduce the amount of overbreak and underbreak. To control overbreak, secondary blasting can be used to fragment rock that was not adequately fragmented by the initial production blast. This technique can improve the quality of the rock face and reduce overbreak.</p>
    <br>
    <p class="text-justify fs-5">The two methods available include plaster or mud-cap blasting and pop-shooting.</p>
    <div class="d-flex justify-content-center "> </div> 
      <div class="row ml-5 d-flex ">
            <div class="col-4  d-flex">   
               <p class="align-self-end">This method involves firing a charge of explosive placed on the rock and covered with clay (or, a “mud-cap”).</p>
            </div>   
            <div class="col">   
              
                <a class="text-decoration-none text-dark" > <img class="shadow-lg mt-5" src="{{ asset('img/plasting.png') }}" alt="drill picture" style="height:10rem; width:30rem;"></a>
                
            </div>
       
   
      </div>
      <div class=" " >
         <br>
      <h4><strong>3. Pop shooting- </strong> blast hole is usually drilled near a crack or depression in the rock, and is directed toward the center of the mass and then charge is filled in it and denoted.</h4>
      </div>

      <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
         <a class="text-decoration-none text-dark " href="{{ route('cycleope16') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
         <a class="text-decoration-none text-dark " href="{{ route('cycleope18') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
        </div>
</div>
   </div>

  

@endsection
