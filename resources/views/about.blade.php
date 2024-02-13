
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')

    <div class="container about-con text-justify d-flex">
       <div class="main-p ">
            <p class="shadow-lg p-3 rounded-lg">Join us at MinaDrillBlast and embark on a learning journey that transcends traditional boundaries, where information meets interaction, and drilling and blasting become not just processes but immersive experiences. Explore, learn, and elevate your understanding of underground mining with MineXplorer.
            </p>
             <p class="shadow-lg p-3 rounded-lg"><span class="bold-text">Founded:</span> Established in 2023, MineXplorer has quickly become a go-to resource for mining professionals seeking an immersive and informative experience in the realm of underground mining.
            </p>
            <p class="shadow-lg p-3 rounded-lg"><span class="bold-text">Our Goal:</span> At MineXplorer, our goal is simple yet profound: to provide the necessary information in a fun and engaging way of learning. We believe that understanding the complexities of drilling and blasting in underground mining should be accessible, enjoyable, and ultimately contribute to the continuous growth and improvement of the mining industry.
             </p>
       </div>
    </div>

@endsection
