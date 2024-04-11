
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container">
   <h1 class="pt-3 mt-5 h1-drill1-title">Rotary-percussive Drilling</h1>
   <div class="container drill-main d-flex justify-content-center mt-5">
      <div class="row">
         <div class="col drill5 ">
            <p class="text-justify">Drilling using rotary percussion represents a traditional method for creating blastholes, originating in the nineteenth century alongside industrial advancements. </p>
            <br>
            <p class="text-justify">These rigs function by utilizing a piston to impact a tool, transferring energy to the blast hole's base through the bit. Rotary percussive rigs are classified into two primary groups based on the hammer's position:</p>
            <br>
            <a class="text-decoration-none text-dark " href="#"><h5 class="pop-up">1. Top Hammer</h5></a>
            <p class="text-justify">- In top hammer drills, both rotational and percussive actions take place outside the blast hole and are transmitted to the drill bit via the shank adaptor and drill steel. The hammers can be powered by hydraulic rock rigs or pneumatic drilling rigs.</p>
            <a class="text-decoration-none text-dark " href="#"><h5 class="pop-up1">2. Down the Hole Hammer</h5></a>
            <p class="text-justify">- Percussion is directly applied to the drill bit, while rotation occurs externally. The piston is driven pneumatically, and rotation can be achieved using hydraulic rock rigs or pneumatic drilling rigs.</p>
         </div>
      </div>
      <div class="mt-3 btn d-flex justify-content-end outline-none border-0">
         <a class="text-decoration-none text-dark " href="{{ route('drill4') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5">Back</button></a>
         <a class="text-decoration-none text-dark " href="{{ route('drill6') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
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
                <p class="text-justify">The drilling system, considered traditional or classic, was initially constrained by pneumatic power but saw a resurgence with the introduction of hydraulic hammers in the 1960s, enhancing and expanding its range of uses.</p>
                <p class="font-weight-bold">Pneumatic drilling rigs</p>
                <p>- using compressed air.</p>
                <p class="font-weight-bold">Hydraulic rock drills</p>
                <p class="text-justify">- the most important difference between both systems Is that instead of using compressed air as an energy transmission medium, this has been replaced by a more efficient medium, hydraulic oil, which is pumped around the circuits by gear or piston pumps, driven by a diesel engine or electric powerpack.</p>
                <img class="w-auto" src="{{ asset('img/hammer.jpg') }}"alt="Hydraulic rock drills machine" style="height:15rem; width:20rem;">
          </div>                                                                                          

         <div class="modal-footer">
            <button type="button" class="btn btn-secondary close1" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="textToSpeech">Speak</button>
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
         <div class="modal-body1 p-2" style="max-height: 400px; overflow-y: auto;">
                <p class="text-justify">These rock drills have been widely used in surface mining operations with the rocks of medium strength, and with diameter of 105 to 200mm, although there are models which reach 915 mm. It is also used in underground mines with the new long hole blasthole and inverted craters methods.</p>
                <br>
                <p class="text-justify">The functioning of the Down the hole hammer is based upon the fact that the piston delivers full impact directly on the drill bit.</p>
                <img class="w-auto" src="{{ asset('img/hammer1.png') }}"alt="Hydraulic rock drills machine">
                <br>
                <img class="w-auto" src="{{ asset('img/hammer2.gif') }}"alt="Hydraulic rock drills machine">
                <br>
                <img class="w-auto" src="{{ asset('img/hammer3.png') }}"alt="Hydraulic rock drills machine"style="height:18rem; width:23rem;">
        </div>

         <div class="modal-footer">
            <button type="button" class="btn btn-secondary close1" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="textToSpeech1">Speak</button>
      
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
        // Text to Speech functionality1
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
        // Text to Speech functionality2
        $('#textToSpeech1').on('click', function() {
           var text = '';
           $('.modal-body1 p').each(function() {
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

       $('.pop-up1').on('click', function() {
           $('#exampleModal1').modal('show');
       });
   });
</script>

@endsection
