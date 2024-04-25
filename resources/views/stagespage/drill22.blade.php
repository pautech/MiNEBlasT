
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')

    <div class="container">
   <div class="container drill-main d-flex  justify-content-center mt-5">
        <div class="row ">
            <div class="col">
            <h1>Drilling Pattern</h1>
            <p class="fs-5 text-justify">The arrangement of drill holes is essential for achieving the desired blasting results by ensuring the correct distribution of explosives in the rock. Designing an efficient drilling pattern requires considering several factors, including the rock's drillability and blastability, the type of explosives used, limitations on blast vibrations, and the precision requirements for the blasted wall.</p>
            
            <br>
            <p class="fs-4">Various drilling patterns have been developed for blasting solid rock faces, such as:</p>
            <br>
            <a class="text-dark fw-bold pop-up"href="#"><h3>Wedge Cut or V-cut</h3></a>
            
            <p class="fs-5 text-justify">- Drill holes are created at an angle to the face in a consistent wedge formation, with 	the symmetry axis positioned at the centerline of the face. The initial blast dislodges a wedge 	of rock from the face, which is gradually expanded to the full width of the drift in 	subsequent blasts. Each blast is triggered with detonators set at appropriate delay times. </p>
            <br>
            <p class="fs-5 text-justify">- This type of cut is particularly effective for large-sized drifts with well-laminated or 	fissured rocks. Careful preplanning of hole placement and precise drilling of hole alignment 	are crucial for successful implementation.</p>
            <a class="text-dark fw-bold pop-up1"href="#"> <h3>Pyramid or Diamond Cut </h3></a>
           
            <p>- The pyramid or diamond cut is a variation of the wedge cut where the blastholes for the 	initial cavity may have a line of symmetry along horizontal axis as well as the vertical axis.</p>
            <h3>Drag Cut </h3>
            <p class="fs-5 text-justify">- The drag cut is particularly suitable in small sectional drifts where a pull of up to 1 m is 	very useful.</p>
            <h3>Fan Cut </h3>
            <p class="fs-5 text-justify">- The fan cut is one-half of a wedge cut and is applicable mainly where only one machine is 	employed in a narrow drive. Generally the depth of pull obtainable is limited to 1.5 m.</p>
            <a class="text-dark fw-bold pop-up2" href="#">  <h3>Burn Cut </h3></a>
            <p class="fs-5 text-justify">- A series of parallel holes are drilled closely spaced at right angles to the face. One hole or 	more at the centre of the face are uncharged. The uncharged holes are often of larger diameter than the charged holes and form zones of weakness that assist the adjacent charged holes in breaking out the ground. </p>
            <p class="fs-5 text-justify">- Since all holes are at right angles to the face, hole placement and alignment are easier than 	in other types of cuts. The burn cut is particularly suitable for use in massive rock such as granite, 	basalt etc. </p> 
         </div>
     </div>
      <div class=" mb-3 mt-5 btn d-flex justify-content-end outline-none  border-0">
        <a class="text-decoration-none text-dark " href="{{ route('drill21') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5">Back</button> </a>
        <a class="text-decoration-none text-dark " href="{{ route('drill23') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button> </a>
      
        
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
