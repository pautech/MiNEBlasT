const quizData = [
    {
        question: "What is the capital of France?",
        answers: ["Paris", "London", "Berlin", "Madrid"],
        correct: "Paris"
    },
    {
        question: "Which planet is known as the Red Planet?",
        answers: ["Earth", "Mars", "Jupiter", "Saturn"],
        correct: "Mars"
    },
    {
        question: "What is the largest mammal?",
        answers: ["Elephant", "Whale", "Giraffe", "Hippo"],
        correct: "Whale"
    }
];

const quizContainer = document.getElementById("quiz");
const submitButton = document.getElementById("submit");
const nextButton = document.getElementById("next");
const resultContainer = document.getElementById("result");
let currentQuestion = 0;
let score = 0;

function buildQuiz() {
    const data = quizData[currentQuestion];
    const questionDiv = document.createElement("div");
    questionDiv.classList.add("question");
    questionDiv.innerHTML = `<h3>Question ${currentQuestion + 1}: ${data.question}</h3>`;
    
    const optionsDiv = document.createElement("div");
    optionsDiv.classList.add("options");
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

buildQuiz();

submitButton.addEventListener("click", () => {
    const selectedAnswer = document.querySelector('input[name="question' + currentQuestion + '"]:checked');
    if (selectedAnswer) {
        checkAnswer({ target: selectedAnswer.parentElement });
    }
});

nextButton.addEventListener("click", nextQuestion);
