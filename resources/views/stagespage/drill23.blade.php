
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')

    <div class="container">
   <div class="container drill-main d-flex  justify-content-center mt-5">
        <div class="row ">
            <div class="col">
            <h1>Drilling Pattern</h1>
            <p class="fs-5 text-justify">Drilling pattern design in tunneling and drifting is based on the following factors:</p>
            <br>
            <ol type="a" class="fs-5">
               <li class="fw-bold">Tunnel dimensions</li>
               <li class="fw-bold">Hole size</li>
               <li class="fw-bold">Final quality requirements</li>
               <li class="fw-bold">Geological and rock mechanical conditions</li>
               <li class="fw-bold">Explosives availability and means of detonation</li>
               <li class="fw-bold">Expected water leaks</li>
               <li class="fw-bold">Vibration restrictions</li>
               <li class="fw-bold">Drilling equipment</li>
               
            </ol>
            <br>
            <p class="fs-5 text-justify">The tunnel drilling pattern is determined based on the significance of the mentioned factors, with considerations varying depending on the specific conditions at the site.
</p>
         </div>
     </div>
      <div class=" mb-3 mt-5 btn d-flex justify-content-end outline-none  border-0">
        <a class="text-decoration-none text-dark " href="{{ route('drill22') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5">Back</button> </a>
        <a class="text-decoration-none text-dark " href="{{ route('courses') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Done</button> </a>
      
        
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
                <img src="{{ asset('img/airleg.png') }}"alt="">
                <p>Cross section of a pneumatic airleg (Padley and Venables)</p>
                
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
                <img src="{{ asset('img/chain.png') }}"alt="">
                <p>Chain feed (Padley and Venables)</p>
                

         <div class="modal-footer">
            <button type="button" class="btn btn-secondary close1" data-dismiss="modal">Close</button>
      
         </div>
      </div>
   </div>
</div>
<!-- Modal3 -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Introduction</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                <img src="{{ asset('img/hydraulic.png') }}"alt="">
                <p>Hydraulic drifter feed</p>
                

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
       $('.close').on('click', function() {
           window.speechSynthesis.cancel(); // Stop text-to-speech
           $('#exampleModal2').modal('hide');
       });
       $('.close1').on('click', function() {
           window.speechSynthesis.cancel(); // Stop text-to-speech
           $('#exampleModal2').modal('hide');
       });



       // Open modal when pop-up is clicked
       $('.pop-up').on('click', function() {
           $('#exampleModal').modal('show');
       });

       $('.pop-up1').on('click', function() {
           $('#exampleModal1').modal('show');
       });
       $('.pop-up2').on('click', function() {
           $('#exampleModal1').modal('show');
       });
   });
</script>


@endsection
