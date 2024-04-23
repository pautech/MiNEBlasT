
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container">
                  <br><br>
      <div class="">
                  
            <p class="text-justify"><strong>Gelatin Dynamite-</strong> A highly water-resistant dynamite with a gelatinous consistency derived by thecombination of nitroglycerin and nitrocellulose.</p>
            
            <p class="text-justify"><strong>Straight Gelatin-</strong> Straight Gelatin-Straight gelatin dynamite is the most powerful nitroglycerin-based explosive and is known for its waterproof properties. </p>
            <br>
            <p class="text-justify"><strong>Ammonium Gelatin-</strong>also known as special or extra gelatin, is a type of dynamite where some of the nitroglycerin and sodium nitrate are replaced with ammonium nitrate. This substitution results in dynamite that is less sensitive to shock and friction compared to straight gelatin. Ammonia gelatin dynamites are suitable for wet conditions and are commonly used as bottom loads in small diameter blastholes. </p>
            <br>
            <p class="text-justify"><strong>Semi-Gelatins-</strong>type of explosive used in blasting operations that combines characteristics of ammonia gelatin and ammonia dynamite. It is cap-sensitive and contains a small portion of nitrocotton as a gelling agent. The energy in semi-gelatin dynamite primarily comes from the reaction of ammonium nitrate and sodium nitrate with fuel. This type of dynamite offers lower strength compared to gelatin dynamite but maintains good water resistance. </p>
            <br>
            <p class="text-justify"><strong>Binary Explosives-</strong> An explosive based on two nonexplosive ingredients, such as nitromethane and ammonium nitrate, which are shipped and stored separately and mixed at the jobsite to form a high explosive. </p>
                  <br>
            <p class="text-justify"><strong>Water gels, slurry-</strong>gelatinous aqueous solution that consists of an oxidizer, such as AN, and a fuel. Typically, the fuel will contain additional dispersed solid oxidix=zers, fuels, and sensitizers such as aluminum or other explosives. The difference is that water gel is made water-resistant by the addition of a cross-linking or chemical-bonding agent; a slurry, on the other  hand, is water-resistant(formulated to be miscible in water) by nature.</p>
            <p class="text-justify"><strong>Emulsion Explosives:</strong> An explosives material containing substantial amounts of oxidizers suspended in water droplets surrounded by an immiscible fuel. Similar to a slurry in some respects.</p>
            <p class="text-justify"><strong>ANFO; </strong> A blasting agent consisting of ~94% ammonium nitrate and ~6% fuel oil. It is the most commonly used blasting agent. </p>
            <p class="text-justify"> <strong>Blends- </strong>or heavy ANFO  are mixtures of emuldions and ANFO that are typically non-cap-sensitive. It increases the density of ANFO, which increases the energy in the borehole.</p>
      </div>





         <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
               <a class="text-decoration-none text-dark " href="{{ route('cycleope14') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
               <a class="text-decoration-none text-dark " href="{{ route('cycleope16') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
         </div>
         <br>
   
   </div>

  

@endsection
