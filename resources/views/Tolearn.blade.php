<!-- resources/views/i_dash.blade.php -->

@extends('layouts.lay') 
@include('layouts.navbar')
@section('content')

<div class="container-fluid courses d-flex align-items-center justify-content-center">
    <div class="course-item h-50 w-25 mr-5 border-0 shadow-lg rounded d-flex flex-column align-items-center">
       <a href=""> <img class="" src="{{ asset('img/drilling.png') }}" style="width: 250px;" alt="drilling logo"></a>
        <h3>Drilling</h3>
    </div>
    <div class="course-item h-50 w-25 mr-5 border-0 shadow-lg rounded d-flex flex-column align-items-center">
        <a href=""><img class="mt-4 pt-5" src="{{ asset('img/blasting.jpg') }}" style="width: 250px;" alt="drilling logo"></a>
        <h3 class="mt-4 pt-3">Blasting</h3>
    </div>
    <div class="course-item h-50 w-25 mr-5 border-0 shadow-lg rounded d-flex flex-column align-items-center">
        <a href=""><img src="{{ asset('img/ventilation.png') }}" style="width: 245px;" alt="drilling logo"></a>
        <h3>Ventilation</h3>
    </div>
</div>

@endsection
