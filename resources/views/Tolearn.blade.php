@extends('layouts.lay') 
@include('layouts.navbar')
@section('content')

<div id="carouselExampleIndicators" class="carousel slide">
   
    <div class="carousel-inner">
            
                     <div class="carousel-item active container-fluid courses d-flex align-items-center justify-content-center">

                        

                            <div class="course-item h-50 w-25 mr-5 border-0 shadow-lg rounded d-flex flex-column align-items-center justify-content-center">
                                <a href="{{ route('drill') }}">
                                    <img class="rounded" src="{{ asset('img/drill 1.gif') }}" style="max-width: 88%; max-height: 88%;" alt="drilling logo">
                                </a>
                                <a class="text-decoration-none text-dark" href="{{ route('drill') }}">
                                    <h3 class=" text-center z-drill">Drilling</h3>
                                </a>
                            </div>

                            <div class="course-item h-50 w-25 mr-5 border-0 shadow-lg rounded d-flex flex-column align-items-center justify-content-center">
                                <a href="{{ route('blast') }}">
                                    <img class="shadow-sm rounded" src="{{ asset('img/blasting.gif') }}" style="max-width: 90%; max-height: 90%;" alt="drilling logo">
                                </a>
                                <a href="{{ route('blast') }}" class="text-decoration-none text-dark">
                                    <h3 class=" text-center ">Blasting</h3>
                                </a>
                            </div>

                            <div class="course-item h-50 w-25 mr-5 border-0 shadow-lg rounded d-flex flex-column align-items-center justify-content-center">
                                <a href="{{ route('cycleope') }}">
                                    <img class="shadow-sm rounded ml-3 mt-4" src="{{ asset('img/cycle.png') }}" style="max-width: 90%; max-height: 90%;" alt="drilling logo">
                                </a>
                                <a href="{{ route('cycleope') }}" class="text-decoration-none text-dark">
                                    <h3 class=" text-center mt-3">Cycle of Drilling and Blasting</h3>
                                </a>
                            </div>






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
      <div class="modal-body">
        <p class="text-justify">Drilling and blasting are the most commonly used in mining excavations around the world. This method is fundamental for breaking and fragmenting rock to facilitate the extraction of valuable minerals or other geological materials from beneath the Earth's surface. </p>
        <p class="text-justify">In the realm of underground mining, where subterranean resources lie hidden beneath layers of rock, the drilling and blasting cycle emerges as a dynamic and integral process. This method, steeped in precision and engineering, is essential for transforming the formidable challenges of solid rock into opportunities for resource extraction.</p>
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
        $('#exampleModal').modal('show');

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
            $('p').each(function() {
                text += $(this).text() + ' ';
            });
            var speech = new SpeechSynthesisUtterance();
            speech.lang = 'en-US';
            speech.text = text;
            window.speechSynthesis.speak(speech);
        });
    });
</script>

@endsection
