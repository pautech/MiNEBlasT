
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container">
   <h1 class="pt-3 mt-5 h1-drill1-title">Fields of Application for the Different Drilling Methods</h1>
   <div class="container drill-main d-flex justify-content-center mt-5">
      <div class="row">
         <div class="col drill3 ">
            <h3>The two most used mechanical drilling methods are;</h3>
            <br>
            <h5>Rotary-percussive methods</h5>
            <p>- These are commonly employed in various rock types, utilizing top hammer and down-the-hole hammer techniques.</p>
            <h5>Rotary methods</h5>
            <p>- These are categorized based on the penetration mechanism: crushing with tricones for medium to hard rocks and cutting with drag bits for</p>
         </div>
      </div>
      <div class="mt-3 btn d-flex justify-content-end outline-none border-0">
         <a class="text-decoration-none text-dark " href="{{ route('drill3') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5">Back</button></a>
         <a class="text-decoration-none text-dark " href="{{ route('drill4') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
      </div>
   </div>
</div>



@endsection
