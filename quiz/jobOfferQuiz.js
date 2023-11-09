const questions = [
    {
        question: "Legitimate employers do not ask job applicants for upfront fees or payments as a condition of employment.",
        answers:[
            {
                text:"True",correct:true
            },
            {
                text:"False",correct:false
            }
        ]
    },

    {
        question: "It is not advisable to share personal information, such as your Social Security number or bank account details, with a potential employer before verifying the legitimacy of the job offer.",
        answers:[
            {text:"True",correct:true},
            {text:"False",correct:false}
        ]
    },

    {
        question: "If a job offer seems too good to be true and promises high pay with minimal effort, it is likely a scam.",
        answers:[
            {text:"True",correct:true},
            {text:"False",correct:false}
        ]
    }
];

const questionElement = document.getElementById("question");
const answerButtons = document.getElementById("answer-buttons");
const nextButton = document.getElementById("next-btn");

let currentQuestionIndex = 0;
let score = 0;

function startQuiz()
{
    currentQuestionIndex = 0;
    score =0;
    nextButton.innerHTML = "Next";
    showQuestion();
}

function showQuestion(){
    resetState();
    let currentQuestion = questions[currentQuestionIndex];
    let questionNo = currentQuestionIndex + 1;
    questionElement.innerHTML = questionNo + ". " + currentQuestion.question;

    currentQuestion.answers.forEach(answer=>{
        const button = document.createElement("button");
        button.innerHTML = answer.text;
        button.classList.add("btn");
        button.classList.add("active");
        button.classList.add("btn-outline");
        answerButtons.appendChild(button);
        if(answer.correct)
        {
            button.dataset.correct = answer.correct;
        }
        button.addEventListener("click",selectAnswer);
    });
}

function resetState(){
    nextButton.style.display = "none";
    while (answerButtons.firstChild){
        answerButtons.removeChild(answerButtons.firstChild);
    }
}

function selectAnswer(e){
    const selectedButton = e.target;
    const isCorrect = selectedButton.dataset.correct == "true";
    if(isCorrect)
    {
        selectedButton.classList.remove("btn-outline");
        selectedButton.classList.add("btn-success");
        score++;
    }
    else{
        selectedButton.classList.remove("btn-outline");
        selectedButton.classList.add("btn-danger");
    }

    Array.from(answerButtons.children).forEach(button=>{
        if(button.dataset.correct=="true")
        {
            button.classList.add("correct");
        }
        button.disabled=true;
    });
    nextButton.style.display = "block";
}

function showScore(){
    resetState();
    questionElement.innerHTML = `You scored ${score} out of ${questions.length}!`;
    nextButton.innerHTML = "Play Again"
    nextButton.style.display = "block";
}

function handleNextButton(){
    currentQuestionIndex++;
    if( currentQuestionIndex<questions.length)
    {
        showQuestion();
    }
    else{
        showScore();
    }
}

nextButton.addEventListener("click",()=>{
    if(currentQuestionIndex<questions.length)
    {
        handleNextButton();
    }
    else{
        startQuiz();
    }
});

startQuiz();