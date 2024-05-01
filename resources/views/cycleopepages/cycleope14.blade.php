
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container">
      <br><br>
    <h4>Loading</h4>
                        <h5>Fuels(or sensitizers)+Oxidizers(oxygen source) = Explosives</h5>
      <div class=" d-flex justify-content-center flex-column align-items-center"   >
                        <div class="">
                        <br>
                        <br>
                        <h3 class="text-center">Classification of Explosives</h3>
                        <br>

                        <div class="d-flex justify-content-center ">
                        <img src="{{ asset('img/explosives.png') }}" usemap="#image_map" alt="Image Map Example" />
                              <map name="image_map">
                                  
                                    <area alt="Low explosives (LE)= An explosive material that can be caused to deflagrate (burn) when unconfined. These are typically used for blasting in softer or highly jointed rock." title="Low explosives (LE)= An explosive material that can be caused to deflagrate (burn) when unconfined. These are typically used for blasting in softer or highly jointed rock." href="https://www.facebook.com/" coords="143,70,29" shape="circle">
                                    
                                    <area alt="High Explosive (HE)= An explosive material that can be caused to detonate with No.8 Blasting cap when unconfined." title="High Explosive (HE)= An explosive material that can be caused to detonate with No.8 Blasting cap when unconfined." href="#" coords="424,75,34" shape="circle">


                                    <area alt="Blasting Agent(BA)= A mixture consisting of a fuel and oxidizer, intended for blasting but otherwise not an explosive (cannot be detonated with a No. 8 blasting cap." title="Blasting Agent(BA)= A mixture consisting of a fuel and oxidizer, intended for blasting but otherwise not an explosive (cannot be detonated with a No. 8 blasting cap." href="#" coords="609,75,36" shape="circle">



                                          <area alt="A high explosive consisting of a mixture of, but not limited to, nitroglycerin, nitrocellulose ammonium nitrate, sodium nitrate and various carbonaceous materials. " title="A high explosive consisting of a mixture of, but not limited to, nitroglycerin, nitrocellulose ammonium nitrate, sodium nitrate and various carbonaceous materials. " href="" coords="176,162,284,201" shape="rect">
                                          <area alt="A deflagrating or low explosive consisting of sodium or pcitassium nitrate, carbon and sulfur." title="A deflagrating or low explosive consisting of sodium or pcitassium nitrate, carbon and sulfur." href="" coords="48,197,157,247" shape="rect">
                                          <area alt="also known  as extra  dynamite" title="also known  as extra  dynamite" href="" coords="176,276,275,324" shape="rect">
                                          <area alt="most sensitive  commercial high  explosive" title="most sensitive  commercial high  explosive" href="" coords="178,206,271,256" shape="rect">

                              </map>

                         </div>
                        <br>
                  </div>
      </div>





         <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
               <a class="text-decoration-none text-dark " href="{{ route('cycleope13') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
               <a class="text-decoration-none text-dark " href="{{ route('cycleope15') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
         </div>
         <br>
   
   </div>

  

@endsection
