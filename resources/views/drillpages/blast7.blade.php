
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container d-flex justify-content-center align-items-center" style="height:70vh; margin-top:35px;">
                  <div class="container-1 ">
                              <div class="row"> 
                                          <div class="tree">
                                                <ul>
                                                      <li> <a href="#"><span>Underground Mining:Unsupported Methods</span></a>
                                                      <ul>	
                                                            <li><a href="#"><span>Room-and-Pillar Mining</span></a></li>
                                                            <li> <a href="#"><span>Stope-and-Pillar Mining</span></a></li>
                                                            <li><a href="#"><span>Shrinkage Stoping</span></a></li>
                                                            <li><a href="#"><span>Sublevel Stoping</span></a></li>
                                                      </ul>
                                                </ul>
                                          </div>
                              </div>
                                    <p class="text-justify fs-5">The criteria which must be kept in mind when selecting a method are those which refer, on one hand, to the morphology of the deposit and the grade distribution, and on the other hand, the geo-mechanic properties of the rock mass, taking into consideration the mineralization as well as the host rock, and also the technical, and economical aspects that each one offers in the conditions of the operation in question.</p>
                                    
                  </div>         
                        
                      
   
   </div>
   <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
                              <a class="text-decoration-none text-dark " href="{{ route('blast6') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
                              <a class="text-decoration-none text-dark " href="{{ route('blast7') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
      </div>

  

@endsection
