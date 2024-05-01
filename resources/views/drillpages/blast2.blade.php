
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


   <div class="container">
   <div class="container drill-main  mt-5 ">
    <p class="text-justify fs-5"><span class="fw-bold">Primary</span> blasting is the initial stage of blasting in a rock mass, where the main objective is to break the rock into smaller pieces that can be easily removed. The primary blast can lead to two types of deviations from the desired excavation boundary: overbreak and underbreak. In practical smooth blasting, rock fracturing is influenced by in-situ stress, which frequently leads to underbreak/overbreak and excavation damaged zone and consequently poses a serious threat to the safety of the excavated structure.</p>
    <div class="d-flex justify-content-center">
    <div class="row ml-5">
            <div class="col ">
                <h1 class=" mt-3 h1-drill1-title">Primary Blasting</h1>
                 <img class="mt-5" src="{{ asset('img/overbreak.png') }}" alt="drill picture" style="height:80%; width:100%;">
    
            </div>
    </div>
    </div>
       
    </div>
   </div>
   <br>
   <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0 mr-5">
                <a class="text-decoration-none text-dark " href="{{ route('blast1') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5">Back</button></a>
                <a class="text-decoration-none text-dark " href="{{ route('blast3') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
        </div>
  <br><br>

@endsection
