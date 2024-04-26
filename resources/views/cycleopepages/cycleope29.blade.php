
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container">

      <div class=" d-flex justify-content-center flex-column "    style="height:70vh;"   >
                        <div class="">
                                    <h1 class="" style="font-size:2em;">TYPES OF ROCK BOLT</h3>
                                   <br><br>
                        </div>

                        <ol type="1">
                             <li><strong>Self-Drilling Rock Bolt</strong></li>
                              
                              <p class="text-justify">Self-drilling rock bolts, also referred to as hollow bars, constitute a self-drilling anchor system comprising a hollow anchor bar, nut, plate, coupler, centralizer, and drill bit. Distinguished by their hollow core, these bolts facilitate simultaneous drilling and injection of grout to consolidate the surrounding rock. This integration of drilling, grouting, and anchoring functionalities makes them particularly suitable for fractured rocks and challenging geological formations where conventional drilling is impractical. Self-drilling rock bolts excel in stabilizing broken or loose rock formations prone to collapse, thereby significantly enhancing support in complex geological conditions and optimizing construction outcomes. <a href="#"class="pop-up  text-danger" data-toggle="modal" data-target="#exampleModal">Click more</a></p>
                             
                             
                           
                              <li><strong>. Expansion Shell Hollow Rock Bolt</strong></li>
                              <p class="text-justify">The expansion shell hollow anchor bar comprises a hollow anchor bar, plate, nut, and expansion shell. This type of anchor bar can be prestressed and adjusted using a torque wrench. Ranging from 1 to 5 meters in length, these bolts are capable of carrying capacities ranging from 100 up to approximately 500KN. Primarily employed in mining and tunnel systematic support, they provide essential reinforcement for underground structures. <a href="#"class="pop-up2  text-danger" data-toggle="modal2" data-target="#exampleModal2">Click more</a> </p>
                        </ol>
                       
                        <br>
                        
      </div>

    

         <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
               <a class="text-decoration-none text-dark " href="{{ route('cycleope28') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
               <a class="text-decoration-none text-dark " href="{{ route('cycleope29') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
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
                <p class="font-weight-bold">Advantages </p>
                <p class="text-justify">– Efficient installation</p>
                <p class="">- Reduced time and labor costs</p>
                <p>- Enhanced grouting for improved rock reinforcement.</p>
                <br>
                <p class="font-weight-bold">Applications </p>
                <p class="text-justify">- Tunneling</p>
               
                <p class="text-justify">–Slope stabilization.</p>
                
                <p class="text-justify">– Underground mining.</p>
                <img src="{{ asset('img/rockbolt.png') }}"alt=""style="height:100%; width:100%;"> 
        </div>

         <div class="modal-footer">
            <button type="button" class="btn btn-secondary close1" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="textToSpeech">Speak</button>
         </div>
      </div>
   </div>
</div>



 <!-- Modal2 -->

 <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Introduction</h5>
            <button type="button" class="close3" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                <p class="font-weight-bold">Advantages </p>
                <p class="text-justify">– Versatile in different rock types</p>
                <p class="">- High load-bearing capacity</p>
                <p>- Suitable for dynamic rock conditions</p>
                <br>
                <p class="font-weight-bold">Applications </p>
                <p class="text-justify">- Civil engineering projects</p>
               
                <p class="text-justify">–Roadway support</p>
                
                <p class="text-justify">– Excavations in variable rock formations.</p>
                <img src="{{ asset('img/rockbolt.png') }}"alt=""style="height:100%; width:100%;"> 
        </div>

         <div class="modal-footer">
            <button type="button" class="btn btn-secondary close2" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="textToSpeech">Speak</button>
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

       // Text to Speech functionality
       $('#textToSpeech').on('click', function() {
           var text = '';
           $('.modal-body p').each(function() {
               text += $(this).text() + ' ';
           });
           var speech = new SpeechSynthesisUtterance();
           speech.lang = 'en-US';
           speech.text = text;
           window.speechSynthesis.speak(speech);
       });

       // Open modal when pop-up is clicked
       $('.pop-up').on('click', function() {
           $('#exampleModal').modal('show');
       });

       //modal2
       // Open modal when pop-up is clicked
       $('.pop-up2').on('click', function() {
           $('#exampleModal2').modal('show');
       });

        // Close modal on button click
        $('.close2').on('click', function() {
           window.speechSynthesis.cancel(); // Stop text-to-speech
           $('#exampleModal2').modal('hide');
       });
       $('.close3').on('click', function() {
           window.speechSynthesis.cancel(); // Stop text-to-speech
           $('#exampleModal2').modal('hide');
       });
   });
</script>
  

@endsection
