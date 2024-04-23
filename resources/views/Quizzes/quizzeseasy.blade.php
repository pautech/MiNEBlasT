@extends('layouts.lay') 
@include('layouts.navbar')
@section('content')

<div class="containereasy">
        <h1>Mining Quiz</h1>
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
                    <label for="q1">Select an option:</label>
                    <select id="q1" name="q1">
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
                    <label for="q1">Select an option:</label>
                    <select id="q1" name="q1">
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
                    <label for="q1">Select an option:</label>
                    <select id="q1" name="q1">
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
                    <label for="q1">Select an option:</label>
                    <select id="q1" name="q1">
                        <option value="">Select</option>
                        <option value="a">a. Scale</option>
                        <option value="b">b. Dislodge</option>
                        <option value="c">c. Ventilating</option>
                        <option value="d">d. Bolting</option>
                    </select>
                </div>
            </div>

            
        </div>
        <button onclick="calculateScore()">Submit</button>
        <div id="totalScore"></div>
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
    // Repeat the same process for other questions

    // Display total score
    document.getElementById("totalScore").innerHTML = "Total Score: " + totalScore;
}

    </script>



@endsection
