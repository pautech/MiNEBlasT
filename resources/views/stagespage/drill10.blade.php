
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


   <div class="container">

   <div class="container drill-main d-flex align-items-center justify-content-center mt-5">
        <div class="row ">
            <div class="col">
            <img class="shadow-lg" src="{{ asset('img/letter.gif') }}"alt="" style="width:40rem; hieght:40rem;">
            </div>
        </div>
      
</div>
<div class=" mb-3 mt-3 btn d-flex justify-content-end outline-none  border-0">
        <a class="text-decoration-none text-dark " href="{{ route('drill9') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5">Back</button> </a>
        <a class="text-decoration-none text-dark " href="{{ route('drill11') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button> </a>
      
        
      </div>
   </div>
  

@endsection
