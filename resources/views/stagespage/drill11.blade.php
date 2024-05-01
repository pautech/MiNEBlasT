
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


   <div class="container">

  <div class="container drill-main d-flex align-items-center justify-content-center mt-5">
    <div class="row">
        <div id="dynamicContent1" class="speech-bubble1"></div>
            <div class="col quiztext" style="position: relative;">
                <h3 style="position: absolute; top: 25%; left: 50%; transform: translate(-50%, -50%); z-index: 1;">It's time for a quiz!</h3>
                <p class="fs-5 text-justify ptext" style="position: absolute; top: 53%; left: 50%; width: 70%; transform: translate(-50%, -50%); z-index: 1;">Hello, {{ $userName }}! Engr. Lorry here with a challenge for you. I've sent you a message on the following page, and you'll need to respond with your answers to proceed to the next message. Once you've completed the challenge, you can move on to the next topic.</p>
                <img class="shadow-sm quiz-banner img-fluid" src="{{ asset('img/quiz.png') }}" alt="Quiz Image">
            </div>  
        </div>

    </div>


<div class=" mb-3 mt-3 btn d-flex justify-content-end outline-none  border-0">
        <a class="text-decoration-none text-dark " href="{{ route('drill10') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5">Back</button> </a>
        <a class="text-decoration-none text-dark " href="{{ route('drill12') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button> </a>
      
        
      </div>
   </div>
  

   <script>
            document.addEventListener('DOMContentLoaded', function () {
                var jsonData = [
                    { "message": "Hello, Paulo! Engineer. Lorry here with a challenge for you." },
                    { "introduction": "I've sent you a message on the following page, and you'll need to respond with your answers to proceed to the next message." },
                    { "introduction": "Once you've completed the challenge, you can move on to the next topic." },
                    
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
                    });

                    speechSynthesis.speak(message);
                }
            });
</script>

@endsection
