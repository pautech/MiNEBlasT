<!-- resources/views/i_dash.blade.php -->

@extends('layouts.lay') 
@include('layouts.navbar')
@section('content')

<div class="container-fluid dashboard d-flex align-items-center justify-content-center">
    <img class="" src="{{asset('img/robot.png')}} " style="width: 20%;height:auto; margin-top:8em;" alt="Avatar"/>
    <div id="dynamicContent" class="speech-bubble p-4 shadow-lg" style="margin-top:-10em;"></div>

</div>
<br>  
<div class="  btn d-flex justify-content-end  outline-none  border-0 mr-5">
<a class="text-decoration-none text-dark " href="{{ route('blast14') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
<a class="text-decoration-none text-dark " href="{{ route('courses') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
               
</div>
         <br>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var jsonData = [
        { "message": "Great ! You’ve passed the fourth phase in drilling and blasting cycle. " },
        { "introduction": "Please Click next to directly proceed to the next phase" },
       
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
        var delay = textLength * 10; // Adjust the multiplier as needed

        // Set an event listener for the 'end' event
        message.addEventListener('end', function () {
            // Increment index or reset to 0
            if (currentIndex === jsonData.length - 1) {
                // Redirect to home route if at the last index
                window.location.href = '{{ route("courses") }}';
                return;
            }
            currentIndex = (currentIndex + 1) % jsonData.length;

            // Set a delay before updating the content again
            setTimeout(updateDynamicContent, delay);
        });

        speechSynthesis.speak(message);
    }
});

</script>

@endsection
