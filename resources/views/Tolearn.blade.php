@extends('layouts.lay') 
@include('layouts.navbar')
@section('content')

<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
            
                     <div class="carousel-item active container-fluid courses d-flex align-items-center justify-content-center">
                            <div class="course-item h-50 w-25 mr-5 border-0 shadow-lg rounded d-flex flex-column align-items-center">
                            <a href=""> <img class="" src="{{ asset('img/drilling.png') }}" style="width: 250px;" alt="drilling logo"></a>
                                <h3>Survey</h3>
                            </div>
                            <div class="course-item h-50 w-25 mr-5 border-0 shadow-lg rounded d-flex flex-column align-items-center">
                                <a href=""><img class="mt-4 pt-5" src="{{ asset('img/blasting.jpg') }}" style="width: 250px;" alt="drilling logo"></a>
                                <h3 class="mt-4 pt-3">Drilling</h3>
                            </div>
                            <div class="course-item h-50 w-25 border-0 shadow-lg rounded d-flex flex-column align-items-center">
                                <a href=""><img src="{{ asset('img/ventilation.png') }}" style="width: 245px;" alt="drilling logo"></a>
                                <h3>Loading</h3>
                            </div>
                    </div>
            


            <div class="carousel-item">
                    <div class="container-fluid courses d-flex align-items-center justify-content-center">
                            <div class="course-item h-50 w-25 mr-5 border-0 shadow-lg rounded d-flex flex-column align-items-center">
                            <a href=""> <img class="" src="{{ asset('img/drilling.png') }}" style="width: 250px;" alt="drilling logo"></a>
                                <h3>Blasting</h3>
                            </div>
                            <div class="course-item h-50 w-25 mr-5 border-0 shadow-lg rounded d-flex flex-column align-items-center">
                                <a href=""><img class="mt-4 pt-5" src="{{ asset('img/blasting.jpg') }}" style="width: 250px;" alt="drilling logo"></a>
                                <h3 class="mt-4 pt-3">Ventilating</h3>
                            </div>
                            <div class="course-item h-50 w-25 border-0 shadow-lg rounded d-flex flex-column align-items-center">
                                <a href=""><img src="{{ asset('img/ventilation.png') }}" style="width: 245px;" alt="drilling logo"></a>
                                <h3>Dislodge</h3>
                            </div>
                    </div>
            </div>


            <div class="carousel-item">
                    <div class="container-fluid courses d-flex align-items-center justify-content-center">
                            <div class="course-item h-50 w-25 mr-5 border-0 shadow-lg rounded d-flex flex-column align-items-center">
                            <a href=""> <img class="" src="{{ asset('img/drilling.png') }}" style="width: 250px;" alt="drilling logo"></a>
                                <h3>Scale</h3>
                            </div>
                            <div class="course-item h-50 w-25 mr-5 border-0 shadow-lg rounded d-flex flex-column align-items-center">
                                <a href=""><img class="mt-4 pt-5" src="{{ asset('img/blasting.jpg') }}" style="width: 250px;" alt="drilling logo"></a>
                                <h3 class="mt-4 pt-3">Bolt</h3>
                            </div>
                           
                    </div>
            </div>

  </div>
        
    

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
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
