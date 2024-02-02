
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text-to-Speech Message Box</title>
</head>
<body>
    <h2>Text-to-Speech Message Box</h2>
    
    <label for="textInput">Enter text to be spoken:</label>
    <input type="text" id="textInput" style="width: 300px;">

    <script>
        // Function to speak text
        function speakText() {
            var textToSpeak = document.getElementById('textInput').value;

            // Using the SpeechSynthesis API
            var utterance = new SpeechSynthesisUtterance(textToSpeak);
            window.speechSynthesis.speak(utterance);
        }

        // Automatically speak the text when the page loads
        window.onload = function() {
            speakText();
        };
    </script>
</body>
</html>

  

@endsection
