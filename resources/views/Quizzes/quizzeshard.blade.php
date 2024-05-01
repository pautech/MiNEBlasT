@extends('layouts.lay') <!-- Assuming you have a layout file -->

@section('content')

@include('layouts.navbar')

<div class="container" style="margin-top:60px;">
    <h3 class="text-center">Identify the process on the given video</h3>
<div class="d-flex justify-content-center align-items-center main-quiz1">
    <div class="d-flex justify-content-center align-items-center flex-column shadow-lg main-quiz p-5 border-0 rounded">
        <div id="quiz" class="container">

        </div>
        <button type="button" id="submit" class="btn bg-white shadow-lg">Submit</button>
        <button id="next" class="btn bg-white shadow-lg">Next</button>
        <div id="result"></div>
        <button id="play-again" class="btn bg-white shadow-lg mt-2" style="display: none;">Play Again</button>
    </div>

</div>
<div class=" mb-3 mr-5 btn d-flex justify-content-end outline-none  border-0">
    <a class="text-decoration-none text-dark " href="{{ route('drill11') }}"><button type="button"
            class="rock-btn shadow-lg pl-5 pr-5">Back</button> </a>
    <a class="text-decoration-none text-dark " href="{{ route('drill13') }}"><button type="button"
            class="rock-btn shadow-lg pl-5 pr-5 ml-3">Next</button> </a>



</div>


<!-- Bootstrap Modal1 -->
<div class="modal fade" id="submitModal" tabindex="-1" role="dialog" aria-labelledby="submitModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="submitModalLabel">Submission Successful</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="closemodal1"aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Your answer has been successfully submitted.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary closemodal" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Modal2 -->
<div class="modal fade" id="submitModal2" tabindex="-1" role="dialog" aria-labelledby="submitModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="submitModalLabel">Please Input Your Answer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="closemodal2"aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Please Carefully Input Your Answer
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary closemodal2" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    const quizData = [
        {
            question: "It involves the use of lightweight equipment handheld by drillers, typically in small-scale operations where the size constraints or cost considerations make the use of other machinery impractical.",
            answer: "Hand drilling"
        },
        {
            question: "This methods involving high-frequency vibration (HFV).",
            answer: "Mars"
        },
        {
            question: "It is the best method for rock blasting due to the presence of a free face for material projection and systematic work organization.",
            answer: "Whale"
        },
        {
            question: "It serves as the initial step aimed at creating holes in rock masses with the appropriate shape and distribution to accommodate explosive charges and their initiating devices.",
            answer: "Whale"
        },
        {
            question: "A mechanical technique where holes or voids are made in different materials using a drill bit or similar cutting tools. This process usually involves rotating or striking the drill bit to enable it to pierce the material and extract material in the shape of chips or debris.",
            answer: "Whale"
        },
        {
            question: "Vital for rock reinforcement in underground and surface operations, involving bolting or cementing cables where drilling initiates the process.",
            answer: "Whale"
        },
        {
            question: "These are commonly employed in various rock types, utilizing top hammer and down-the-hole hammer techniques.",
            answer: "Whale"
        },
        {
            question: "It comprises two tubes, an outer lightweight metal tube, and an inner steel tube connected to the jackhammer. The inner tube, acting as a piston with a valve, is linked to compressed air.",
            answer: "Whale"
        },
        {
            question: "Feed thrust is generated by a lead screw's rotation driven by a piston or gear air motor.",
            answer: "Whale"
        },
        {
            question: "These are categorized based on the penetration mechanism: crushing with tricones for medium to hard rocks and cutting with drag bits for soft rocks.",
            answer: "Whale"
        },
        {
            question: "It utilizes equipment mounted on rigs, allowing operators to manage all drilling parameters conveniently from a comfortable position.",
            answer: "Whale"
        },
        {
            question: "Special drilling methods with casing are employed for drilling rock masses covered by unconsolidated materials, including underwater operations.",
            answer: "Whale"
        },
        {
            question: "To keep the drill bit in contact with the rock, a thrust load or feed force is exerted on the drill string.",
            answer: "Whale"
        },
        {
            question: "Both rotational and percussive actions take place outside the blast hole and are transmitted to the drill bit via the shank adaptor and drill steel. The hammers can be powered by hydraulic rock rigs or pneumatic drilling rigs.",
            answer: "Whale"
        },
        {
            question: "It is the best method for rock blasting due to the presence of a free face for material projection and systematic work organization.",
            answer: "Whale"
        }

    ];

// Shuffle the quizData array
function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
}
    
    const quizContainer = document.getElementById("quiz");
    const submitButton = document.getElementById("submit");
    
    // Add Bootstrap class when hovering over the submit button
    //submitButton.addEventListener("mouseover", () => {
        //submitButton.classList.add("btn-success");
   // });

    // Remove Bootstrap class when mouse leaves the submit button
   // submitButton.addEventListener("mouseleave", () => {
      //  submitButton.classList.remove("btn-success","bg-success");
    //});
    
    const nextButton = document.getElementById("next");
    const playAgainButton = document.getElementById("play-again");
    const resultContainer = document.getElementById("result");
    let currentQuestion = 0;
    let score = 0;

    function buildQuiz() {
    const data = quizData[currentQuestion];
    const questionDiv = document.createElement("div");
    questionDiv.classList.add("question");
    questionDiv.innerHTML = `<div class="d-flex"><img class="w-auto" src="{{ asset('img/quizlogo.png') }}" alt="" style="height:100px;"> <h5 class="mt-2 text-justify" style="width:38rem;"><span class="fw-bold">Question</span> ${currentQuestion + 1}: ${data.question}</h5></div>`;

    const answerInput = document.createElement("input");
    answerInput.type = "text";
    answerInput.placeholder = "Enter your answer...";
    answerInput.classList.add("form-control", "mt-3" ,"mb-3","custom-required" ); // Add Bootstrap classes
    quizContainer.innerHTML = "";
    quizContainer.appendChild(questionDiv);
    quizContainer.appendChild(answerInput);
    }


    function checkAnswer() {
        const userAnswer = quizContainer.querySelector("input").value.trim();
        const correctAnswer = quizData[currentQuestion].answer;

        if (!userAnswer) {
        // Input is empty, disable submit button and change placeholder
                quizContainer.querySelector("input").placeholder = "Please input your answer";

                // Add a reference to the modal
                const submitModal = document.getElementById("submitModal2");

                // Show the modal when the document is ready
                $(document).ready(function() {
                    $('#submitModal2').modal('show'); // Show the modal using jQuery
                });

                $('.closemodal2').on('click', function() {
                    window.speechSynthesis.cancel(); // Stop text-to-speech
                    $('#submitModal2').modal('hide');
                });
                $('.closemodal2').on('click', function() {
                    window.speechSynthesis.cancel(); // Stop text-to-speech
                    $('#submitModal2').modal('hide');
                });

                return;
            }
            

        if (userAnswer.toLowerCase() === correctAnswer.toLowerCase()) {
            score++;
        }
       
         // Add a reference to the modal
        // const submitModal = document.getElementById("submitModal2");

        // Show the modal when the document is ready
       // $(document).ready(function() {
        //    $('#submitModal').modal('show'); // Show the modal using jQuery
        //});

       // $('.closemodal').on('click', function() {
         //   window.speechSynthesis.cancel(); // Stop text-to-speech
         //   $('#submitModal').modal('hide');
       // });
       // $('.closemodal1').on('click', function() {
         //   window.speechSynthesis.cancel(); // Stop text-to-speech
         //   $('#submitModal').modal('hide');
       // });
        submitButton.style.display = "none";
        nextButton.style.display = "inline-block";
       
    }

    function showResults() {
        resultContainer.innerHTML = `You scored ${score} out of ${quizData.length}`;
        playAgainButton.style.display = "inline-block";
    }

    function nextQuestion() {
        currentQuestion++;
        if (currentQuestion < quizData.length) {
            buildQuiz();
            submitButton.style.display = "inline-block";
            nextButton.style.display = "none";
            resultContainer.innerHTML = "";
        } else {
            showResults();
            submitButton.style.display = "none";
            nextButton.style.display = "none";
        }
    }

    function playAgain() {
        currentQuestion = 0;
        score = 0;
        shuffleArray(quizData);
        buildQuiz();
        resultContainer.innerHTML = "";
        submitButton.style.display = "inline-block";
        nextButton.style.display = "none";
        playAgainButton.style.display = "none";
        shuffleArray(quizData)
    }

    buildQuiz();



    submitButton.addEventListener("click", checkAnswer);

    nextButton.addEventListener("click", nextQuestion);

    playAgainButton.addEventListener("click", playAgain);

    

   
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



@endsection
