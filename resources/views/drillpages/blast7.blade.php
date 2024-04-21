
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container d-flex justify-content-center align-items-center" style="height:70vh; margin-top:35px;">
                  <div class="container-1 ">
                              <div class="row"> 
                                          <div class="tree">
                                                <ul>
                                                      <li> <a href="#"><span>Underground Mining:Unsupported Methods</span></a>
                                                      <ul>	
                                                            <li><a href="#" class="pop-up"><span class="fw-bold">Room-and-Pillar Mining</span></a></li>
                                                            <li> <a href="#" class="pop-up-2"><span class="fw-bold">Stope-and-Pillar Mining</span></a></li>
                                                            <li><a href="#"class="pop-up-3"><span class="fw-bold">Shrinkage Stoping</span></a></li>
                                                            <li><a href="#"class="pop-up-4"><span >Sublevel Stoping</span></a></li>
                                                      </ul>
                                                </ul>
                                          </div>
                              </div>
                                    <p class="text-justify fs-5">The criteria which must be kept in mind when selecting a method are those which refer, on one hand, to the morphology of the deposit and the grade distribution, and on the other hand, the geo-mechanic properties of the rock mass, taking into consideration the mineralization as well as the host rock, and also the technical, and economical aspects that each one offers in the conditions of the operation in question.</p>
                                    
                  </div>         
                        
                      
   
   </div>
   <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
                              <a class="text-decoration-none text-dark " href="{{ route('blast6') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
                              <a class="text-decoration-none text-dark " href="{{ route('blast8') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
      </div>





<!-- Modal1 -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Room-and-Pillar Mining</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
               <img src="{{ asset('img/room-p.png') }}" alt="" style="width:35rem; height:auto;"> 
               <ul>
                  <li><span class="fw-bold">Blasting:</span> Permissible explosive, ANFO.</li>
                  <li><span class="fw-bold">Secondary blasting: </span>drilling holes strategically and loading them with explosives. </li>
               </ul>
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
            <h5 class="modal-title" id="exampleModalLabel">Stope-and-Pillar Mining</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body2" style="max-height: 400px; overflow-y: auto;">
               <img src="{{ asset('img/stope-p.jpg') }}" alt="" style="width:20rem; height:auto;"> 
               <ul>
                  <li><span class="fw-bold">Blasting:</span> Ammonium nitrate and fuel oil (ANFO), gels, or emulsions; charging by hand or by pneumatic loader; firing by electric, nonelectric, or detonating fuse. </li>
                  <li><span class="fw-bold">Secondaryblasting:</span> Drill and blast; impact hammer; drop ball. </li>
               </ul>
        </div>

         <div class="modal-footer">
            <button type="button" class="btn btn-secondary close1" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="textToSpeech2">Speak</button>
         </div>
      </div>
   </div>
</div>


<!-- Modal3 -->

<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Shrinkage Stoping</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body3" style="max-height: 400px; overflow-y: auto;">
               <img src="{{ asset('img/shrinkage-s.png') }}" alt="" style="width:20rem; height:auto;"> 
               <ul>
                  <li><span class="fw-bold">Blasting:</span> ANFO, gels, or emulsions; charging by hand, pneumatic loader, or pumping system; firing electrically or by detonating cord.</li>
                  <li><span class="fw-bold">Secondary breakage:</span> drill and blast, packaged boulder charge, impact hammer.</li>
               </ul>
        </div>

         <div class="modal-footer">
            <button type="button" class="btn btn-secondary close1" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="textToSpeech3">Speak</button>
         </div>
      </div>
   </div>
</div>



<!-- Modal4 -->

<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sublevel Stoping</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body4" style="max-height: 400px; overflow-y: auto;">
               <img src="{{ asset('img/sublevel.png') }}" alt="" style="width:20rem; height:auto;"> 
               <ul>
                  <li><span class="fw-bold">Blasting:</span> ANFO, emulsions, or gels; charging by pneumatic loader, pumping system, or by cartridges; firing electrically, with detonating cord, or with non-electric initiation systems.  </li>
                  <li><span class="fw-bold">Secondary blasting:</span> Drill and blast, mudcapping, impact hammer. </li>
               </ul>
        </div>

         <div class="modal-footer">
            <button type="button" class="btn btn-secondary close1" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="textToSpeech4">Speak</button>
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
           $('.modal-body ul li').each(function() {
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
   });



   /*script 2 */


   $(document).ready(function(){
      

      // Close modal on button click
      $('.close').on('click', function() {
          window.speechSynthesis.cancel(); // Stop text-to-speech
          $('#exampleModal2').modal('hide');
      });
      $('.close1').on('click', function() {
          window.speechSynthesis.cancel(); // Stop text-to-speech
          $('#exampleModal2').modal('hide');
      });

      // Text to Speech functionality
      $('#textToSpeech2').on('click', function() {
          var text = '';
          $('.modal-body2 ul li').each(function() {
              text += $(this).text() + ' ';
          });
          var speech = new SpeechSynthesisUtterance();
          speech.lang = 'en-US';
          speech.text = text;
          window.speechSynthesis.speak(speech);
      });

      // Open modal when pop-up is clicked
      $('.pop-up-2').on('click', function() {
          $('#exampleModal2').modal('show');
      });
  });



  /*script 3 */


  $(document).ready(function(){
      

      // Close modal on button click
      $('.close').on('click', function() {
          window.speechSynthesis.cancel(); // Stop text-to-speech
          $('#exampleModal3').modal('hide');
      });
      $('.close1').on('click', function() {
          window.speechSynthesis.cancel(); // Stop text-to-speech
          $('#exampleModal3').modal('hide');
      });

      // Text to Speech functionality
      $('#textToSpeech3').on('click', function() {
          var text = '';
          $('.modal-body3 ul li').each(function() {
              text += $(this).text() + ' ';
          });
          var speech = new SpeechSynthesisUtterance();
          speech.lang = 'en-US';
          speech.text = text;
          window.speechSynthesis.speak(speech);
      });

      // Open modal when pop-up is clicked
      $('.pop-up-3').on('click', function() {
          $('#exampleModal2').modal('show');
      });
  });




  /*script 4 */


  $(document).ready(function(){
      

      // Close modal on button click
      $('.close').on('click', function() {
          window.speechSynthesis.cancel(); // Stop text-to-speech
          $('#exampleModal4').modal('hide');
      });
      $('.close1').on('click', function() {
          window.speechSynthesis.cancel(); // Stop text-to-speech
          $('#exampleModal4').modal('hide');
      });

      // Text to Speech functionality
      $('#textToSpeech4').on('click', function() {
          var text = '';
          $('.modal-body4 ul li').each(function() {
              text += $(this).text() + ' ';
          });
          var speech = new SpeechSynthesisUtterance();
          speech.lang = 'en-US';
          speech.text = text;
          window.speechSynthesis.speak(speech);
      });

      // Open modal when pop-up is clicked
      $('.pop-up-4').on('click', function() {
          $('#exampleModal4').modal('show');
      });
  });
</script>
  

@endsection
