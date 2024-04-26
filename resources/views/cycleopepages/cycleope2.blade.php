
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container">

      <div class=" d-flex justify-content-center flex-column align-items-center"    style="height:70vh;"   >
                        <div class="">
                                    <h1 class="text-center " style="font-size:5em;">Surveying</h3>
                                    <p class="text-center">(Geological mapping)</p>
                        </div>
      </div>

    

         <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
               <a class="text-decoration-none text-dark " href="{{ route('cycleope1') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
               <a class="text-decoration-none text-dark " href="{{ route('cycleope3') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
         </div>
   
   </div>

   <div id="dynamicContent1" class="speech-bubble1"></div>
 


 <script>
             document.addEventListener('DOMContentLoaded', function () {
                 var jsonData = [
                     { "message": "Surveying, Geological mapping " },
                     { "introduction": " Let's start learning" },
                     
                     
                 ];
 
                 var currentIndex = 0;
 
                 updateDynamicContent();
 
                 function updateDynamicContent() {
                     var dynamicContentDiv = document.getElementById('dynamicContent1');
                     var data = jsonData[currentIndex];
                  
 
                     const message = new SpeechSynthesisUtterance();
                     message.text = Object.values(data)[0];
                     const speechSynthesis = window.speechSynthesis;
 
                     // Set voice to a woman's voice (you may need to adjust this based on available voices)
                     var womanVoice = speechSynthesis.getVoices().find(voice => voice.name.includes('female'));
                     if (womanVoice) {
                         message.voice = womanVoice;
                     }
 
                     // Calculate delay based on text length
                     var textLength = Object.values(data)[0].length;
                     var delay = textLength * 5; // Adjust the multiplier as needed
 
                     // Set an event listener for the 'end' event
                     message.addEventListener('end', function () {
                         // Increment index or reset to 0
                         currentIndex = (currentIndex + 1) % jsonData.length;
 
                         // Set a delay before updating the content again
                         setTimeout(updateDynamicContent, delay);


                         if (currentIndex === jsonData.length - 1) {
                // Redirect to home route if at the last index
                window.location.href = '{{ route("cycleope3") }}';
                return;
            }
                     });
 
                     speechSynthesis.speak(message);
                 }
             });
 </script>

@endsection
