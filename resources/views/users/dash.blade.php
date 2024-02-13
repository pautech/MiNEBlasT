<!-- resources/views/i_dash.blade.php -->

@extends('layouts.lay') 
@include('layouts.navbar')
@section('content')

<div class="container-fluid dashboard d-flex align-items-center justify-content-center">
    <img class="" src="{{asset('Avatar.png')}} " style="width: 30em;height:auto; margin-top:8em;" alt="Avatar"/>
    <div id="dynamicContent" class="speech-bubble p-4 shadow-lg" style="margin-top:-10em; margin-left:-4em;"></div>
  
</div>

<!--<script>
document.addEventListener('DOMContentLoaded', function () {
    var jsonData = [
        { "message": "Greetings, Mining Engineers! This is Engineer Lorry" },
        { "introduction": "We are thrilled to welcome you to our digital hub, a space designed to revolutionize the way you engage information and learning!" },
        { "invitation": "Here at MinaDrillBlast, we believe that learning should be more than just a passive experience. It should be an adventure that captivates, challenges, and leaves you inspired!" },
        { "question": "Are you excited? Now, click the explore button below." }
    ];

    var currentIndex = 0;

    updateDynamicContent();

    function updateDynamicContent() {
        var dynamicContentDiv = document.getElementById('dynamicContent');
        var data = jsonData[currentIndex];
        dynamicContentDiv.innerHTML = '<p>' + Object.values(data)[0] + '</p>';

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
        var delay = textLength * 30; // Adjust the multiplier as needed

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
--->
@endsection
