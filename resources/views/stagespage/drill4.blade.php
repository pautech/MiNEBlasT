
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
            <a class="text-decoration-none text-dark " href="#"><h5 class="pop-up">Rotary-percussive methods</h5></a>
            <p class="text-justify">- These are commonly employed in various rock types, utilizing top hammer and down-the-hole hammer techniques.</p>
            <a class="text-decoration-none text-dark " href="#"><h5 class="pop-up1">Rotary methods</h5></a>
            <p class="text-justify">- These are categorized based on the penetration mechanism: crushing with tricones for medium to hard rocks and cutting with drag bits for</p>
         </div>
      </div>
      <div class="mt-3 btn d-flex justify-content-end outline-none border-0">
         <a class="text-decoration-none text-dark " href="{{ route('drill3') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5">Back</button></a>
         <a class="text-decoration-none text-dark " href="{{ route('drill5') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
      </div>
   </div>
</div>

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Introduction</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                <img src="{{ asset('img/rotary.png') }}"alt="">
                <p>Figure 1: Drilling methods for surface operations (Atlas Copco).</p>
        </div>

         <div class="modal-footer">
            <button type="button" class="btn btn-secondary close1" data-dismiss="modal">Close</button>
      
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Introduction</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                <img src="{{ asset('img/rotary1.png') }}"alt="">
                <p>Figure 2: Drilling methods for surface operations (Atlas Copco).</p>
        </div>

         <div class="modal-footer">
            <button type="button" class="btn btn-secondary close1" data-dismiss="modal">Close</button>
      
         </div>
      </div>
   </div>
</div>

<!-- JavaScript to trigger the modal automatically and close it on button click -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   $(document).ready(function(){
      
       // Close modal on button click
       $('.close').on('click', function() {
           window.speechSynthesis.cancel(); // Stop text-to-speech
           $('#exampleModal').modal('hide');
       });
       $('.close1').on('click', function() {
           window.speechSynthesis.cancel(); // Stop text-to-speech
           $('#exampleModal').modal('hide');
       });
       
       $('.close').on('click', function() {
           window.speechSynthesis.cancel(); // Stop text-to-speech
           $('#exampleModal1').modal('hide');
       });
       $('.close1').on('click', function() {
           window.speechSynthesis.cancel(); // Stop text-to-speech
           $('#exampleModal1').modal('hide');
       });



       // Open modal when pop-up is clicked
       $('.pop-up').on('click', function() {
           $('#exampleModal').modal('show');
       });

       $('.pop-up1').on('click', function() {
           $('#exampleModal1').modal('show');
       });
   });
</script>

@endsection
