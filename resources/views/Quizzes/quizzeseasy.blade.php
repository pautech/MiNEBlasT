@extends('layouts.lay') 
@include('layouts.navbar')
@section('content')

<div class="containereasy">
        <h1>Mining Quiz</h1>
        <br>
        <h5>Test 1: Choose the best answer that fits the question.</h5>
        <div id="quiz">
            <div class="question" id="question1">
                <p>1. This method is mostly used method for the excavation throughout the world. The method can be used in all types of rocks and the initial cost is lower than the mechanical method like TBM.</p>
                <div class="options">
                    <label for="q1">Select an option:</label>
                    <select id="q1" name="q1">
                        <option value="">Select</option>
                        <option value="a">a. Drilling</option>
                        <option value="b">b. Blasting</option>
                        <option value="c">c. Drilling and Blasting</option>
                        <option value="d">d. Rock bolting</option>
                    </select>
                </div>
            </div>
            <!-- Add more questions here -->
            <div class="question" id="question1">
                <p>2. A conditions of where deposit dip is preferably flat; dips <30° mineable.</p>
                <div class="options">
                    <label for="q2">Select an option:</label>
                    <select id="q2" name="q2">
                        <option value="">Select</option>
                        <option value="a">a. Shrinkage stoping</option>
                        <option value="b">b. Stope and Pillar Mining</option>
                        <option value="c">c. Room and Pillar Mining</option>
                        <option value="d">d. Sublevel Stoping</option>
                    </select>
                </div>
            </div>

            <div class="question" id="question1">
                <p>3. A conditions of where deposit dip is fairly steep (>45°; prefer 60 to 90° to facilitate ore flow).</p>
                <div class="options">
                    <label for="q3">Select an option:</label>
                    <select id="q3" name="q3">
                        <option value="">Select</option>
                        <option value="a">a. Shrinkage stoping</option>
                        <option value="b">b. Stope and Pillar Mining</option>
                        <option value="c">c. Room and Pillar Mining</option>
                        <option value="d">d. Sublevel Stoping</option>
                    </select>
                </div>
            </div>

            <div class="question" id="question1">
                <p>4. A condition of where any, preferably >45° so that gravity flow can be used.</p>
                <div class="options">
                    <label for="q4">Select an option:</label>
                    <select id="q4" name="q4">
                        <option value="">Select</option>
                        <option value="a">a. Sublevel Stoping</option>
                        <option value="b">b. Stull Stoping</option>
                        <option value="c">c. Square Set Stoping</option>
                        <option value="d">d. Cut and Fill Stoping</option>
                    </select>
                </div>
            </div>

            <div class="question" id="question1">
                <p>5. Refers to the stripping away and removal of loose pieces of rock, which were not completely released from the rock during the blasting procedure. This working step is completed by a robust tunnel excavator.</p>
                <div class="options">
                    <label for="q5">Select an option:</label>
                    <select id="q5" name="q5">
                        <option value="">Select</option>
                        <option value="a">a. Scale</option>
                        <option value="b">b. Dislodge</option>
                        <option value="c">c. Ventilating</option>
                        <option value="d">d. Bolting</option>
                    </select>
                </div>
            </div>


            <div class="question" id="question1">
                <p>6. A mechanical technique where holes or voids are made in different materials using a drill bit or similar cutting tools. </p>
                <div class="options">
                    <label for="q6">Select an option:</label>
                    <select id="q6" name="q6">
                        <option value="">Select</option>
                        <option value="a">a. Drilling</option>
                        <option value="b">b. Blasting</option>
                        <option value="c">c. Loading</option>
                        <option value="d">d. Ventilation</option>
                    </select>
                </div>
            </div>

            <div class="question" id="question1">
                <p>7. The following are various systems of rock drilling except:</p>
                <div class="options">
                    <label for="q7">Select an option:</label>
                    <select id="q7" name="q7">
                        <option value="">Select</option>
                        <option value="a">a. Electrical</option>
                        <option value="b">b. Nuclear</option>
                        <option value="c">c. Mechanical</option>
                        <option value="d">d. Hydrophonic</option>
                    </select>
                </div>
            </div>

            <div class="question" id="question1">
                <p>8.  Two types of Drilling Operations used in Rock breakage.</p>
                <div class="options">
                    <label for="q8">Select an option:</label>
                    <select id="q8" name="q8">
                        <option value="">Select</option>
                        <option value="a">a. Manual and Robotic</option>
                        <option value="b">b. Manual and Mechanized</option>
                        <option value="c">c. Voice command and Robotic</option>
                        <option value="d">d. Mechanized and Voice command</option>
                    </select>
                </div>
            </div>

            <div class="question" id="question1">
                <p>9. These are categorized based on the penetration mechanism: crushing with tricones for medium to hard rocks and cutting with drag bits for soft rocks.</p>
                <div class="options">
                    <label for="q9">Select an option:</label>
                    <select id="q9" name="q9">
                        <option value="">Select</option>
                        <option value="a">a. Rotary-percussive</option>
                        <option value="b">b. Rotary</option>
                        <option value="c">c. Top Hammer</option>
                        <option value="d">d. Down the hole</option>
                    </select>
                </div>
            </div>

            <div class="question" id="question1">
                <p>10. Both rotational and percussive actions take place outside the blast hole and are transmitted to the drill bit via the shank adaptor and drill steel. </p>
                <div class="options">
                    <label for="q10">Select an option:</label>
                    <select id="q10" name="q10">
                        <option value="">Select</option>
                        <option value="a">a. Rotary-percussive</option>
                        <option value="b">b. rotary</option>
                        <option value="c">c. Top Hammer</option>
                        <option value="d">d. Down the hole</option>
                    </select>
                </div>
            </div>

          

            
        </div>
        <button onclick="calculateScore()">Submit</button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#scoreModal">
  Show Total Score</button>
        <div id="totalScore"></div>
    </div>



<!-- Modal -->
<div class="modal fade" id="scoreModal" tabindex="-1" aria-labelledby="scoreModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center" id="scoreModalLabel">Drilling Quiz</h4>
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Display total score here -->
                <h3>Your Score for this Quiz </h3>
                <p id="totalScoreModal"> </p>
                <div class="modal-footer">
                    <button class="btn btn-primary print-button" onclick="printModalContent()">Print</button>
                    <button type="button" class="btn btn-secondary close-button" data-bs-dismiss="modal">Close</button>
                </div>


            </div>
        </div>
    </div>
</div>








    <script>
       function calculateScore() {
            var totalScore = 0;

            // Question 1
            var q1Select = document.getElementById('q1');
            var q1Answer = q1Select.options[q1Select.selectedIndex].value;
            if (q1Answer === "c") {
                totalScore += 1;
            }

    // Question 2
     
     var q1Select = document.getElementById('q2');
            var q1Answer = q1Select.options[q1Select.selectedIndex].value;
            if (q1Answer === "b") {
                totalScore += 1;
            }
            var q1Select = document.getElementById('q3');
            var q1Answer = q1Select.options[q1Select.selectedIndex].value;
            if (q1Answer === "a") {
                totalScore += 1;
            }
            var q1Select = document.getElementById('q4');
            var q1Answer = q1Select.options[q1Select.selectedIndex].value;
            if (q1Answer === "c") {
                totalScore += 1;
            }
            var q1Select = document.getElementById('q5');
            var q1Answer = q1Select.options[q1Select.selectedIndex].value;
            if (q1Answer === "c") {
                totalScore += 1;
            }
            var q1Select = document.getElementById('q6');
            var q1Answer = q1Select.options[q1Select.selectedIndex].value;
            if (q1Answer === "a") {
                totalScore += 1;
            }
            var q1Select = document.getElementById('q7');
            var q1Answer = q1Select.options[q1Select.selectedIndex].value;
            if (q1Answer === "d") {
                totalScore += 1;
            }
            var q1Select = document.getElementById('q8');
            var q1Answer = q1Select.options[q1Select.selectedIndex].value;
            if (q1Answer === "b") {
                totalScore += 1;
            }
            var q1Select = document.getElementById('q9');
            var q1Answer = q1Select.options[q1Select.selectedIndex].value;
            if (q1Answer === "b") {
                totalScore += 1;
            }
            var q1Select = document.getElementById('q10');
            var q1Answer = q1Select.options[q1Select.selectedIndex].value;
            if (q1Answer === "a") {
                totalScore += 1;
            }

    // Repeat the same process for other questions

    // Display total score
    //document.getElementById("totalScore").innerHTML = "Total Score: " + totalScore;
    document.getElementById("totalScoreModal").innerHTML = "Total Score: " + totalScore;

   // Save the score
   saveScore(totalScore);

    
}

function saveScore(totalScore) {
    var token = '{{ csrf_token() }}';

    $.ajax({
        url: '{{ route('save-score') }}',
        type: 'POST',
        data: {
            _token: token,
            totalScore: totalScore
        },
        success: function(response) {
            console.log(response);
        },
        error: function(xhr) {
            console.error('Error saving score');
        }
    });
}

function printModalContent() {
    var printContents = document.getElementById("scoreModal").cloneNode(true);
    var modalFooter = printContents.querySelector('.modal-footer');
    modalFooter.style.display = 'none'; // Hide the footer with buttons

    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents.innerHTML;
    window.print();

    // Restore the original body content
    document.body.innerHTML = originalContents;

    // Close the modal
    $('#scoreModal').modal('hide');
}

    </script>





@endsection
