@extends('layouts.lay') 
@include('layouts.navbar')
@section('content')

<div id="carouselExampleIndicators" class="carousel slide">
   
    <div class="carousel-inner">
            
                     <div class="carousel-item active container-fluid courses d-flex align-items-center justify-content-center">

                     <div class="course-item h-50 w-25 mr-5 border-0 shadow-lg rounded d-flex flex-column align-items-center justify-content-center">
                                <a href="{{ route('blast') }}">
                                   <!-- <img class="shadow-sm rounded" src="{{ asset('img/blasting.gif') }}" style="max-width: 90%; max-height: 90%;" alt="drilling logo">-->
                                </a>
                                <a href="{{ route('quizzeseasy') }}" class="text-decoration-none text-dark">
                                    <h3 class=" text-center ">Easy</h3>
                                </a>
                            </div>

                            

                            <div class="course-item h-50 w-25 mr-5 border-0 shadow-lg rounded d-flex flex-column align-items-center justify-content-center">
                                <a href="{{ route('blast') }}">
                                   <!-- <img class="shadow-sm rounded" src="{{ asset('img/blasting.gif') }}" style="max-width: 90%; max-height: 90%;" alt="drilling logo">-->
                                </a>
                                <a href="{{ route('minequiz') }}" class="text-decoration-none text-dark">
                                    <h3 class=" text-center ">Moderate</h3>
                                </a>
                            </div>

                            <div class="course-item h-50 w-25 mr-5 border-0 shadow-lg rounded d-flex flex-column align-items-center justify-content-center">
                                <a href="{{ route('cycleope') }}">
                                  <!--  <img class="shadow-sm rounded ml-3 mt-4" src="{{ asset('img/cycle.png') }}" style="max-width: 90%; max-height: 90%;" alt="drilling logo">-->
                                </a>
                                <a href="{{ route('cycleope') }}" class="text-decoration-none text-dark">
                                    <h3 class=" text-center mt-3">Hard</h3>
                                </a>
                            </div>






                    </div>
  </div>
        
    

   
</div>



@endsection
