@extends('layouts.lay') 
@include('layouts.navbar')
@section('content')

<div class="d-flex justify-content-center align-items-center main-quiz1">
    <div class="d-flex justify-content-center align-items-center flex-column shadow-lg main-quiz p-5 border-0 rounded">
        <div id="quiz" class="container"></div>
        <button type="button" id="submit" class="btn bg-success shadow-lg">Submit</button>
        <button id="next" class="btn bg-white shadow-lg">Next</button>
        <div id="result"></div>
        <button id="play-again" class="btn bg-white shadow-lg mt-2" style="display: none;">Play Again</button>
        <button id="show-result" class="btn bg-primary shadow-lg mt-2">Show Result</button>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="resultModal" tabindex="-1" aria-labelledby="resultModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="resultModalLabel">Quiz Result</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="resultContent"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="printResult" class="btn btn-primary">Print</button>
            </div>
        </div>
    </div>
</div>

<script>
    const quizData = [
        {
            question: "Depth: shallow to moderate (< 1500 ft or 450 m for coal, < 2000 ft or 600 m for noncoal, < 3000 ft or 900 m for potash)",
            answers: ["Room and Pillar Mining", "Shrinkage Stoping", "Cut and Fill Stoping"],
            correct: "Room and Pillar Mining"
        },
        {
            question: "Deposit size: narrow to moderate width (6 to 100 ft or 2 to 30 m), fairly",
            answers: ["Shrinkage Stoping", "Sublevel Stoping", "Cut and Fill Stoping"],
            correct: "Cut and Fill Stoping"
        }
        ,
        {
            question: "Deposit size: relatively thin (<1 2ft or 3.6m))",
            answers: ["Square Set Stoping", "Shrinkage Stoping", "Stull Stoping"],
            correct: "Stull Stoping"
        }
        ,
        {
            question: "Deposit size: any, preferably large areal extent, moderate thickness or bench if greater (maximum of 300 ft or 90 m)",
            answers: ["Stope and Pillar Mining", "Sublevel Stoping", "Cut and Fill Stoping"],
            correct: "Stope and Pillar Mining"
        }
    ];

    const quizContainer = document.getElementById("quiz");
    const submitButton = document.getElementById("submit");
    const nextButton = document.getElementById("next");
    const playAgainButton = document.getElementById("play-again");
    const resultContainer = document.getElementById("result");
    let currentQuestion = 0;
    let medscore = 0;

    function shuffle(array) {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]];
        }
        return array;
    }

    function buildQuiz() {
        const data = quizData[currentQuestion];
        const questionDiv = document.createElement("div");
        questionDiv.classList.add("question");
        questionDiv.innerHTML = `<h3>Question ${currentQuestion + 1}: ${data.question}</h3>`;
        
        const optionsDiv = document.createElement("div");
        optionsDiv.classList.add("options");
        shuffle(data.answers);
        data.answers.forEach(answer => {
            const label = document.createElement("label");
            label.innerHTML = `<input type="radio" name="question${currentQuestion}" value="${answer}"> ${answer}<br>`;
            label.addEventListener("click", checkAnswer);
            optionsDiv.appendChild(label);
        });

        quizContainer.innerHTML = "";
        quizContainer.appendChild(questionDiv);
        quizContainer.appendChild(optionsDiv);
    }

    function checkAnswer(event) {
        const selectedAnswer = event.target.querySelector("input").value;
        const correctAnswer = quizData[currentQuestion].correct;

        if (selectedAnswer === correctAnswer) {
            event.target.classList.add("correct");
            medscore++;
        } else {
            event.target.classList.add("wrong");
        }

        const options = document.querySelectorAll(".options label");
        options.forEach(option => {
            option.removeEventListener("click", checkAnswer);
        });

        submitButton.style.display = "none";
        nextButton.style.display = "inline-block";
    }

    function showResults() {
       // resultContainer.innerHTML = `You scored ${medscore} out of ${quizData.length}`;
        playAgainButton.style.display = "inline-block";

        // Save the score
        saveMedScore(medscore);
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
        medscore = 0;
        buildQuiz();
        resultContainer.innerHTML = "";
        submitButton.style.display = "inline-block";
        nextButton.style.display = "none";
        playAgainButton.style.display = "none";
    }

    buildQuiz();

    submitButton.addEventListener("click", () => {
        const selectedAnswer = document.querySelector('input[name="question' + currentQuestion + '"]:checked');
        if (selectedAnswer) {
            checkAnswer({ target: selectedAnswer.parentElement });
        }
    });

    nextButton.addEventListener("click", nextQuestion);

    playAgainButton.addEventListener("click", playAgain);






    function saveMedScore(medscore) {
    var token = '{{ csrf_token() }}';

    $.ajax({
        url: '{{ route('save-mediumscore') }}',
        type: 'POST',
        data: {
            _token: token,
            totalScore: medscore
        },
        success: function(response) {
            console.log(response);
        },
        error: function(xhr) {
            console.error('Error saving score');
        }
    });
}


const showResultButton = document.getElementById("show-result");
const resultModal = new bootstrap.Modal(document.getElementById('resultModal'));
const resultContent = document.getElementById("resultContent");

showResultButton.addEventListener("click", () => {
    resultContent.innerHTML = `You scored ${medscore} out of ${quizData.length}`;
    resultModal.show();
});

function printResult() {
    const scoreMessage = "Your Score is ";
    const score = `${scoreMessage}${medscore} out of ${quizData.length}`;

    const modalContent = document.getElementById('resultModal').cloneNode(true);
    const modalFooter = modalContent.querySelector('.modal-footer');
    modalFooter.style.display = 'none'; // Hide the footer with buttons

    const iframe = document.createElement('iframe');
    iframe.style.display = 'none';
    document.body.appendChild(iframe);

    const iframeDocument = iframe.contentDocument;
    const printWindow = iframe.contentWindow;

    iframeDocument.write('<html><head><title>Minadrillblast Quiz Result</title>');
    iframeDocument.write('<style>h3 { text-align: center; }</style>'); // Center the h3 element
    iframeDocument.write('</head><body>');
    iframeDocument.write(`<h3>${score}</h3>`);

    iframeDocument.write('</body></html>');
    iframeDocument.close();

    printWindow.focus();
    printWindow.print();

    document.body.removeChild(iframe);
    modalFooter.style.display = 'block'; // Show the footer after printing
}


// Add an event listener to the print button
const printButton = document.getElementById("printResult");
printButton.addEventListener("click", printResult);




</script>



@endsection
