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
                                        <h4 class="mb-4">We are more than just a company</h4>
                                        <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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

                                                <div class="mb-3 col-12 d-flex flex-wrap justify-content-center">
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
@endsection
