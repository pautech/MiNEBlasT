
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


   <div class="container">
   <h1 class=" pt-3 mt-5 h1-drill1-title">Classification of Drilling Methods
</h1>
   <div class="container drill-main d-flex align-items-center justify-content-center mt-5">
        <div class="row ">
            
                <img src="{{ asset('img/classification.png') }}" alt="drill picture" style="height:91%; width:91%;">
            

        </div>
   </div>
   <div class=" mt-3 btn d-flex justify-content-end  outline-none  border-0">
      <a class="text-decoration-none text-dark " href="{{ route('drill1') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5">Back</button> </a>
        <a class="text-decoration-none text-dark " href="{{ route('drill3') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button> </a>
      
      </div>
  

@endsection
