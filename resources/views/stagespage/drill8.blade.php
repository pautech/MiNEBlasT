
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


   <div class="container">
   <div class="container drill-main d-flex  justify-content-center mt-5">
        <div class="row ">
            <div class="col">
            <h3>Shank Adaptors</h3>
            <p>- These components are affixed to the rock drill chuck to transmit impact energy to the rods, rotation torque, and feed force effectively. </p>
            <p>- Two types of shank adaptors: <a class="text-dark fw-bold pop-up" href="#">Leyner Shank</a> and <a class="text-dark fw-bold pop-up1"href="#">Spilned Shank</a></p>
            <h3>Drill Steel </h3>
            <p>- The sections extending from the drill chuck typically consist of rods, bars, and pipes.</p>
            <h3>Couplings</h3>
            <p>- Couplings are used to link extension rods together until the desired length is achieved, ensuring proper alignment for effective energy transmission.</p>
          </div>
     </div>
      <div class=" mb-3 mt-5 btn d-flex justify-content-end outline-none  border-0">
        <a class="text-decoration-none text-dark " href="{{ route('drill7') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5">Back</button> </a>
        <a class="text-decoration-none text-dark " href="{{ route('drill8') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button> </a>
      
        
      </div>
</div>
   </div>
  




   <!-- Modal1 -->

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
                
        </div>

         <div class="modal-footer">
            <button type="button" class="btn btn-secondary close1" data-dismiss="modal">Close</button>
      
         </div>
      </div>
   </div>
</div>
<!-- Modal2 -->
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
