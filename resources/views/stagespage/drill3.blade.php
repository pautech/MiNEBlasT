
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container">
   <h1 class="pt-3 mt-5 h1-drill1-title">Types of Drilling Operations Used in Rock Breakage</h1>
   <div class="container drill-main d-flex justify-content-center mt-5">
      <div class="row">
         <div class="col drill3 ">
            <h3>Manual Drilling</h3>
            <p>- Involves the use of lightweight equipment handheld by drillers, typically in small-scale operations where the size constraints or cost considerations make the use of other machinery impractical.</p>
            <a class="text-decoration-none text-dark " href="#"><h3 class="pop-up" data-toggle="modal" data-target="#exampleModal">Mechanized Drilling</h3></a>
            <p>- Utilizes equipment mounted on rigs, allowing operators to manage all drilling parameters conveniently from a comfortable position.</p>
         </div>
      </div>
      <div class="mt-3 btn d-flex justify-content-end outline-none border-0">
         <a class="text-decoration-none text-dark " href="{{ route('drill2') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5">Back</button></a>
         <a class="text-decoration-none text-dark " href="{{ route('drill4') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
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
                <p class="text-justify">Types of work in surface as well as in underground mining operations, are classified in the following groups:</p>
                <p class="font-weight-bold">Bench blasting </p>
                <p>– best method for rock blasting due to the presence of a free face for material projection and systematic work organization.</p>
                <p class="font-weight-bold">Drilling for drifting and tunneling</p>
                <p>- Involves opening an initial cavity for directing fragmented rock from charges. Shift towards mechanization with jumbos replacing handheld drills for blasthole drilling.</p>
                <p class="font-weight-bold">Production drilling </p>
                <p>- Essential in mining, especially underground, for ore extraction. Methods vary based on exploitation systems, characterized by limited space for blasthole drilling in drifts.</p>
                <p class="font-weight-bold">Drilling for raises </p>
                <p>– Necessary in underground and civil engineering for opening raises. Long blasthole and special drilling systems, including Raise Boring, are utilized for blasting.</p>
                <p class="font-weight-bold">Drilling rocks with overburden </p>
                <p>– Special drilling methods with casing are employed for drilling rock masses covered by unconsolidated materials, including underwater operations.</p>
                <p class="font-weight-bold">Rock supports</p>
                <p>– Vital for rock reinforcement in underground and surface operations, involving bolting or cementing cables where drilling initiates the process.</p>
        </div>

         <div class="modal-footer">
            <button type="button" class="btn btn-secondary close1" data-dismiss="modal">Close</button>
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
   });
</script>


@endsection
