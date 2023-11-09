function openQuizModal1() {
    document.getElementById('quizModal1').style.display = 'block';
}

function closeQuizModal1() {
    document.getElementById('quizModal1').style.display = 'none';
}

function openQuizModal2() {
    document.getElementById('quizModal2').style.display = 'block';
}

function closeQuizModal2() {
    document.getElementById('quizModal2').style.display = 'none';
}

function openQuizModal3() {
    document.getElementById('quizModal3').style.display = 'block';
}

function closeQuizModal3() {
    document.getElementById('quizModal3').style.display = 'none';
}

function openQuizModal4() {
    document.getElementById('quizModal4').style.display = 'block';
}

function closeQuizModal4() {
    document.getElementById('quizModal4').style.display = 'none';
}

function openQuizModal5() {
    document.getElementById('quizModal5').style.display = 'block';
}

function closeQuizModal5() {
    document.getElementById('quizModal5').style.display = 'none';
}

function openQuizModal6() {
    document.getElementById('quizModal6').style.display = 'block';
}

function closeQuizModal6() {
    document.getElementById('quizModal6').style.display = 'none';
}

function openQuizModal7() {
    document.getElementById('quizModal7').style.display = 'block';
}

function closeQuizModal7() {
    document.getElementById('quizModal7').style.display = 'none';
}

function openQuizModal8() {
    document.getElementById('quizModal8').style.display = 'block';
}

function closeQuizModal8() {
    document.getElementById('quizModal8').style.display = 'none';
}

window.onclick = function (event) {
    if (event.target == document.getElementById('quizModal1')) {
        closeQuizModal1();
    } else if (event.target == document.getElementById('quizModal2')) {
        closeQuizModal2();
    }else if (event.target == document.getElementById('quizModal3')) {
        closeQuizModal3();
    }else if (event.target == document.getElementById('quizModal4')) {
        closeQuizModal4();
    }else if (event.target == document.getElementById('quizModal5')) {
        closeQuizModal5();
    }else if (event.target == document.getElementById('quizModal6')) {
        closeQuizModal6();
    }else if (event.target == document.getElementById('quizModal7')) {
        closeQuizModal7();
    }else if (event.target == document.getElementById('quizModal8')) {
        closeQuizModal8();
    }
};