
@extends('layouts.lay')  <!-- Assuming you have a layout file -->

@section('content')

    @include('layouts.navbar')


    <div class="container ">

                        <div class="parent-con d-flex justify-content-center align-items-center"style="height:70vh;">


                                          <div class="dragcon " style="height:50%; width:100%;">
                                                                      <section class=" draggable-elements d-flex justify-content-between "style="height:auto; width:auto;">
                                                                  <i class="fas fa-cat draggable shadow" draggable="true" style="color: #ff6384;width:10%" id="cat"><p class="fw-bold"style="font-size:15px; ">Strong     </p></i>
                                                                  <i class="fas fa-dog draggable shadow p-2" draggable="true" style="color: #36a2eb; width:20%;" id="dog"><p class="fw-bold"style="font-size:14px;">Moderately weak to Strong </p></i>
                                                                  <i class="fas fa-dove draggable shadow" draggable="true" style="color:#00FFFF; width:15%;" id="dove"><p class=""style="font-size:15px;">Moderate to Strong </p></i>
                                                                  <i class="fas fa-fish draggable shadow" draggable="true" style="color: #9966ff;  width:17%;" id="fish"><p class="fw-bold "style="font-size:15px;">Fairly Strong to Strong </p></i>
                                                                  <i class="fas fa-frog draggable shadow" draggable="true" style="color: #4bc0c0;width:17%" id="frog"><p class="fw-bold "style="font-size:15px;">Weak to hard</p></i>
                                                                  <i class="fas fa-frog draggable shadow" draggable="true" style="color: #4bc0c0;width:17%" id="goat"><p class="fw-bold "style="font-size:15px;">Weak to very weak</p></i>
                                                                 
                                                                  <!-- <i class="fas fa-horse draggable" draggable="true" style="color: #333333;" id="horse"></i>
                                                                  <i class="fas fa-hippo draggable" draggable="true" style="color: #ff9f40;" id="hippo"></i>
                                                                  <i class="fas fa-spider draggable" draggable="true" style="color: #ff99cc;" id="spider"></i> -->
                                                                  </section>
                                                                  <section class="droppable-elements d-flex justify-content-between" style="height:90%; width:100%;">
                                                                  <div class="main-drop">
                                                                        <div class="droppable" data-draggable-id="frog">
                                                                               <span>Room-and-Pillar Mining</span>
                                                                        </div>
                                                                       
                                                                  </div>

                                                                  <div class="main-drop">
                                                                        <div class="droppable" data-draggable-id="dove">
                                                                              <span>Stope-and-Pillar Mining</span>
                                                                        </div>
                                                                       
                                                                  </div>

                                                                <div class="main-drop">
                                                                        <div class="droppable" data-draggable-id="cat"><span>Shrinkage Stoping</span></div>
                                                                      
                                                                </div>
                                                                  <div class="main-drop">
                                                                        <div class="droppable" data-draggable-id="dove"><span>Sub-level Stoping</span></div>
                                                                       
                                                                  </div>
                                                                  <div class="main-drop">
                                                                        <div class="droppable" data-draggable-id="dog"><span>Cut-and-Fill Stoping</span></div>
                                                                      
                                                                  </div>

                                                                  <div class="main-drop">
                                                                        <div class="droppable" data-draggable-id="fish"><span>Stull Stoping</span></div>
                                                                        
                                                                  </div>

                                                                  <div class="main-drop">
                                                                        <div class="droppable" data-draggable-id="goat"><span>Square-set Stoping</span></div>
                                                                       
                                                                  </div>
                                                                  <!-- <div class="droppable" data-draggable-id="spider"><span>Spider</span></div>
                                                                  <div class="droppable" data-draggable-id="horse"><span>Horse</span></div>
                                                                  <div class="droppable" data-draggable-id="hippo"><span>Hippo</span></div> -->
                                                                  </section>

                                          </div>
                        </div>


         <div class=" mt-5 btn d-flex justify-content-end  outline-none  border-0">
               <a class="text-decoration-none text-dark " href="{{ route('cycleope7') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Back</button></a>
               <a class="text-decoration-none text-dark " href="{{ route('cycleope8') }}"><button type="button" class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button></a>
         </div>
   
   </div>


   <script>
                        const draggableElements = document.querySelectorAll(".draggable");
                        const droppableElements = document.querySelectorAll(".droppable");

                        draggableElements.forEach(elem => {
                        elem.addEventListener("dragstart", dragStart); // Fires as soon as the user starts dragging an item - This is where we can define the drag data
                        // elem.addEventListener("drag", drag); // Fires when a dragged item (element or text selection) is dragged
                        // elem.addEventListener("dragend", dragEnd); // Fires when a drag operation ends (such as releasing a mouse button or hitting the Esc key) - After the dragend event, the drag and drop operation is complete
                        });

                        droppableElements.forEach(elem => {
                        elem.addEventListener("dragenter", dragEnter); // Fires when a dragged item enters a valid drop target
                        elem.addEventListener("dragover", dragOver); // Fires when a dragged item is being dragged over a valid drop target, repeatedly while the draggable item is within the drop zone
                        elem.addEventListener("dragleave", dragLeave); // Fires when a dragged item leaves a valid drop target
                        elem.addEventListener("drop", drop); // Fires when an item is dropped on a valid drop target
                        });

                        // Drag and Drop Functions

                        //Events fired on the drag target

                        function dragStart(event) {
                        event.dataTransfer.setData("text", event.target.id); // or "text/plain" but just "text" would also be fine since we are not setting any other type/format for data value
                        }

                        //Events fired on the drop target

                        function dragEnter(event) {
                        if(!event.target.classList.contains("dropped")) {
                        event.target.classList.add("droppable-hover");
                        }
                        }

                        function dragOver(event) {
                        if(!event.target.classList.contains("dropped")) {
                        event.preventDefault(); // Prevent default to allow drop
                        }
                        }

                        function dragLeave(event) {
                        if(!event.target.classList.contains("dropped")) {
                        event.target.classList.remove("droppable-hover");
                        }
                        }

                        function drop(event) {
                        event.preventDefault(); // This is in order to prevent the browser default handling of the data
                        event.target.classList.remove("droppable-hover");
                        const draggableElementData = event.dataTransfer.getData("text"); // Get the dragged data. This method will return any data that was set to the same type in the setData() method
                        const droppableElementData = event.target.getAttribute("data-draggable-id");
                        const isCorrectMatching = draggableElementData === droppableElementData;
                        if(isCorrectMatching) {
                        const draggableElement = document.getElementById(draggableElementData);
                        event.target.classList.add("dropped");
                        // event.target.style.backgroundColor = draggableElement.style.color; // This approach works only for inline styles. A more general approach would be the following: 
                        event.target.style.backgroundColor = window.getComputedStyle(draggableElement).color;
                        draggableElement.classList.add("dragged");
                        draggableElement.setAttribute("draggable", "false");
                        event.target.insertAdjacentHTML("afterbegin", `<i class="fas fa-${draggableElementData}"></i>`);
                        }
                        }
   </script>

  

@endsection
