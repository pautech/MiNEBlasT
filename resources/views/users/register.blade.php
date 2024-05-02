<!-- resources/views/auth/registration.blade.php -->

@extends('layouts.lay')

@section('content')
    <section class="gradient-form h-300 d-flex align-content-center" style="background-color: #e7d5b9; margin-top: -0px;">
        <div class="container-fluid h-100  d-flex align-items-center " style="margin-bottom: -150px;">
            <div class="container">
                <div class="row d-flex justify-content-lg-center  ">
                    <div class="col-xl-10 mx-auto">
                        <div class="card rounded-3 text-black shadow-lg">
                            <div class="row g-0">



                                <div class="col-lg-4 d-flex align-items-center gradient-custom-2">
                                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Ignite Your Career: Explore the World of Drilling and Blasting!</h4>
                                   
                                    </div>
                                </div>


                                <div class="col-lg-8">
                                    <div class="card-body p-md-5 mx-md-4">

                                        <div class="text-center">
                                            <img class="image" src="{{ asset('img/LOGO.png') }}" style="width: 250px;" alt="Mineblast Image"/>
                                        </div>

                                        <form action="{{ route('registration') }}" method="post">
                                            @csrf

                                            <div class="row">
                                                <div class="mb-3 col-6">
                                                    <label class="form-label" for="firstname">First Name</label>
                                                    <input type="text" name="firstname" id="firstname" class="form-control @error('firstname') is-invalid @enderror" required>
                                                    @error('firstname')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3 col-6">
                                                    <label class="form-label" for="lastname">Last Name</label>
                                                    <input type="text" name="lastname" id="lastname" class="form-control @error('lastname') is-invalid @enderror" required>
                                                    @error('lastname')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3 col-6">
                                                    <label class="form-label" for="password">Password</label>
                                                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
                                                    <span class="password-toggle-icon float-right">
                                                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                                                    </span>
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3 col-6">
                                                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                                                </div>

                                                <div class="mb-3 col-12 d-flex flex-wrap justify-content-around">
                                                   
                                              
                                                    <button type="submit" class="btn btn-primary btn-lg  ">Register</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Privacy Policy and Term and Conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Privacy Policy:</h4>
        <p class="text-justify">Your privacy is our priority. We collect and store your name, username, password, and scores to personalize your experience on our website and improve our services. Your information is kept confidential and is not shared with third parties without your explicit consent.</p>
       <h4>Terms and Conditions:    </h4>
        <p class="text-justify">By using our website, you agree to provide accurate and up-to-date information, including your name, username, and password. Your username and password are confidential and should not be shared with anyone. We are committed to safeguarding your data and will not disclose it to third parties without your permission, except as required by law. You are responsible for maintaining the security of your account and for any actions taken using your username and password. We reserve the right to suspend or terminate your account if we suspect any unauthorized use or violation of our terms.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary close1" data-dismiss="modal">Agree</button>
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
