
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')
    <div class="container">
        <div class="container drill-main d-flex justify-content-center mt-5">
            <div class="row">
                <div class="col">
                    <h1 class="pt-3 mt-3 h1-drill1-title">Raise Driving</h1>
                    <br>
                    <h4>Raise driving is broadly categorized into two groups based on the direction of drilling:</h4>
                    <br>
                    <h2 id="hover-heading">Upward Drilling</h2>
                    <div id="popup" class="border-0 shadow popup">
                        <p class="fs-5">The methods of Upward Drilling</p>
                        <h3>Classical manual method</h3>
                        <p class="text-justify">- The methods involves constructing and dismantling an inner wooden platform as the excavation proceeds, which serves both as support and a work platform for drilling blast holes using hand-held jackhammers and pushers. This method is suitable for small-scale mining operations, but the working conditions can be challenging and require highly skilled personnel.</p>
                        <h3>JORA lift method</h3>
                        <p class="text-justify">- A method that utilizes a lift suspended by a rope passing through a pilot hole drilled along the raise's line.</p>
                        <h3>Alimak platform method</h3>
                        <p class="text-justify">- The Alimak platform method involves a work platform that slides along a rack and pinion rail attached to the raise wall using expansion shell bolts.</p>
                    </div>

                    <p class="fs-5 text-justify">Typically carried out manually using a Jora lift or with the assistance of an Alimak platform.</p>
                    <br>

                    <div id="popup1" class="border-0 shadow popup">
                        <p class="fs-5">The methods of Downward Drilling</p>
                        <h3>Relief blasthole cut method </h3>
                        <p class="text-justify">- This method, initially developed for tunnelling and drifting, was the first to apply 	long holes for raising. The method uses top hammer rigs with hole diameters ranging from 51 	to 75 mm, and central pilot holes expanded to 100 or 200 mm.</p>
                        <h3>Crater cut method </h3>
                        <p class="text-justify">- This involves creating a cavity of approximately one square meter using five blastholes 	with diameters ranging from 65 to 102 mm. The explosive charges are placed strategically to 	replicate crater blasting.</p>
                        <h3>VCR method</h3>
                        <p class="text-justify">- The Vertical Crater Retreat (VCR) method gained popularity in metal deposit 	operations, leading to the development of a 'VCR' system for driving raises based on the 	crater cut method. The method involves arranging blastholes with diameters similar to those 	used in production blasting in square sections, with all charges at the same height. </p>
                        <h3>Raise Boring (Full-face) method </h3>
                        <p class="text-justify">- This involves initiating a pilot hole with a diameter of 1 to 2 meters using a raise 	borer, which is then used as an expansion hole.</p>
                    </div>
                    <h2 id="hover-heading1">Downward Drilling</h2>
                    <p class="fs-5 text-justify">Involves long-hole drilling techniques like pilot hole cutting, crater cutting, 'VCR' cut (Vertical Crater Retreat), and the full-face method.</p>
                </div>

                <div class=" mt-4 btn d-flex justify-content-end outline-none border-0">
                    <a class="text-decoration-none text-dark" href="{{ route('drill20') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5">Back</button></a>
                    <a class="text-decoration-none text-dark" href="{{ route('drill22') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
                </div>
            </div>
        </div>
    </div>

   
  
   <script>
    const hoverHeading = document.getElementById('hover-heading');
        const popup = document.getElementById('popup');

        hoverHeading.addEventListener('mouseover', () => {
            popup.classList.add('active');
        });

        hoverHeading.addEventListener('mouseleave', () => {
            popup.classList.remove('active');
        });

        const hoverHeading1 = document.getElementById('hover-heading1');
        const popup1 = document.getElementById('popup1');

        hoverHeading1.addEventListener('mouseover', () => {
            popup1.classList.add('active');
        });

        hoverHeading1.addEventListener('mouseleave', () => {
            popup1.classList.remove('active');
        });
</script>

   
  

@endsection
