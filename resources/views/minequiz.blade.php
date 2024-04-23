@extends('layouts.lay') 
@include('layouts.navbar')
@section('content')

<div class="d-flex justify-content-center align-items-center main-quiz1">
    <div class="d-flex justify-content-center align-items-center flex-column shadow-lg main-quiz p-5 border-0 rounded">
        <div id="quiz" class="container"></div>
        <button type="button" id="submit" class="btn bg-white shadow-lg">Submit</button>
        <button id="next" class="btn bg-white shadow-lg">Next</button>
        <div id="result"></div>
        <button id="play-again" class="btn bg-white shadow-lg mt-2" style="display: none;">Play Again</button>
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
            question: "Choose at least 3 types of underground mining: unsupported methods",
            answers: ["Stope and Pillar Mining", "Shrinkage Stoping", "Cut and Fill Stoping", "Sublevel Stoping"],
            correct: ["Stope and Pillar Mining","Shrinkage Stoping","Sublevel Stoping"]
        },
        {
            question: "Deposit size: narrow to moderate width (6 to 100 ft or 2 to 30 m), fairly",
            answers: ["Stope and Pillar Mining", "Sublevel Stoping", "Cut and Fill Stoping"],
            correct: ""
        }
       
    ];

    const quizContainer = document.getElementById("quiz");
    const submitButton = document.getElementById("submit");
    const nextButton = document.getElementById("next");
    const playAgainButton = document.getElementById("play-again");
    const resultContainer = document.getElementById("result");
    let currentQuestion = 0;
    let score = 0;

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
            score++;
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

</script>

@endsection
