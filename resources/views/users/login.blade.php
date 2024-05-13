<!-- resources/views/auth/login.blade.php -->

@extends('layouts.lay')

@section('content')
    <section class="h-100 gradient-form " style="background-color:#e7d5b9">
        <div class="container py-5 h-100 ">
            <div class="row d-flex justify-content-center align-items-center h-100 ">
                <div class="col-xl-10 " >
                    <div class="card rounded-4 text-black shadow-lg">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <!-- <h4 class="mt-1 mb-5 pb-1">MinaDrillBlast</h4> -->

                                        <img class="image" src={{ asset('img/LOGO.png') }}  style="width: 250px;" alt="Mineblast"/>
                                    </div>

                                    <form method="POST" action="{{ route('ulogin') }}">
                                                @csrf

                                                <!-- <p>Please login to your account</p> -->

                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="username">Username</label>
                                                    <input type="text" id="username" class="form-control @error('username') is-invalid @enderror"
                                                        name="username" value="{{ old('username') }}" required autocomplete="username" autofocus />
                                                    @error('username')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="password">Password</label>
                                                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror passkey"
                                                        name="password" required autocomplete="current-password" />
                                                        <span class="password-toggle-icon float-right">
                                                            <i class="bi bi-eye-slash" id="togglePassword"></i>
                                                        </span>
                                                    <!-- <button type="button" id="togglePassword" class="btn btn-secondary">Show</button> -->
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            
                                                <div class="text-center pt-1 mb-5 pb-1">
                                                
                                                    <button class="btn  btn-block fa-lg  mb-3 text-light badge-primary shadow"style="background-color: #b4a07d" type="submit">Sign In</button>
                                                    <a href="{{ url('auth/google') }}" class="btn btn-block fa-lg  mb-3 text-light badge-primary shadow" style="background-color: #b4a07d">Sign in with Google</a>
                                                    <a class="text-muted" href="#!">Forgot password?</a>
                                                </div>

                                                <div class="d-flex align-items-center justify-content-center pb-4">
                                                    <p class="mb-0 me-2">Don't have an account?</p>
                                                    <a type="button" class="btn create-btn text-decoration-underline" href="{{ route('registration') }}">Create Account</a>
                                                </div>

                                    </form>
                                  

                                </div>
                            </div>
                            
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Mastering the Art of Mining: Drilling and Blasting Excellence Await!</h4>
                                    <p class="small mb-0">These courses offer a unique opportunity to delve into the intricacies of drilling and blasting, crucial for safe and efficient mining operations. As you embark on this journey, remember that every knowledge gained is a step closer to becoming an expert in your field. Embrace the challenges, stay curious, and keep pushing your boundaries. </p>
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
        <h5 class="modal-title" id="exampleModalLabel">Notice!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-justify"> Your Username must be firstname.lastname all in lower case</p>
        <h5>Example:</h5>
        <p class="text-justify"> firstname: John</p>
        <p class="text-justify"> lastname: Wick</p>
        <h6>Your Username is</h6>
        <p class="text-justify"> john.wick </p>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary close1" data-dismiss="modal">Close</button>

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
