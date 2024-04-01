
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')
    <div class="container-fluid landing ">
        <img src="{{ asset('img/LOGO.png') }}" alt="logo" ">
        <a href="{{ route('checkpoint') }}" class="d-flex align-items-center justify-content-center text-decoration-none"> <button type="button" class="rock-btn shadow-lg">Start Journey</button></a>
    </div>
    
    <div id="dynamicContent1" class="speech-bubble1"></div>
 


<script>
            document.addEventListener('DOMContentLoaded', function () {
                var jsonData = [
                    { "message": "Welcome to the Mina Drill Blast" },
                    { "introduction": "Your gateway to Underground Mining Excellence" },
                    { "introduction": "Let's start Your Journey" },
                    
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