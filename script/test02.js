const questions = [
    {
        question: "1. Я напряжен и взволнован (взвинчен)",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
    {
        question: "2. У меня ком в горле, и (или) я ощущаю сухость во рту",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
    {
        question: "3. Я перегружен работой. Мне совсем не хватает времени",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
    {
        question: "4. Я проглатываю пищу или забываю поесть",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
    {
        question: "5. Я обдумываю свои идеи снова и снова; я меняю свои планы; мои мысли постоянно повторяются",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
    {
        question: "6. Я чувствую себя одиноким, изолированным и непонятым",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
    {
        question: "7. Я страдаю от физического недомогания; у меня болит голова, напряжены мышцы шеи, боли в спине, спазмы в желудке ",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
    {
        question: "8. Я поглощен мыслями, измучен или обеспокоен",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
    {
        question: "9. Меня внезапно бросает то в жар, то в холод",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
    {
        question: "10. Я забываю о встречах или делах, которые должен сделать или решить",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
    {
        question: "11. Я легко могу заплакать",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
    {
        question: "12. Я чувствую себя уставшим",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    }
    {
        question: "13. Я крепко стискиваю зубы",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
    {
        question: "14. Я не спокоен",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
    {
        question: "15. Мне тяжело дышать, и (или) у меня внезапно перехватывает дыхание",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
    {
        question: "16.Я имею проблемы с пищеварением и с кишечником (боли, колики, расстройства или запоры)",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
    {
        question: "17. Я взволнован, обеспокоен или смущен",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
    {
        question: "18.Я легко пугаюсь; шум или шорох заставляет меня вздрагивать",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
    {
        question: "19. Мне необходимо более чем полчаса для того, чтобы уснуть",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
    {
        question: "20.Я сбит столку; мои мысли спутаны; мне не хватает сосредоточенности, и я не могу сконцентрировать внимание",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
    {
        question: "21.У меня усталый вид; мешки или круги под глазами",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
    {
        question: "22. Я чувствую тяжесть на своих плечах",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
    {
        question: "23.Я встревожен. Мне необходимо постоянно двигаться; я не могу устоять на одном месте",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
    {
        question: "24. Мне трудно контролировать свои поступки, эмоции, настроения или жесты",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
    {
        question: "25.Я напряжен",
        answers: ["Никогда", "Крайне редко", "Очень редко", "Редко", "Иногда", "Часто", "Очень часто", "Постоянно (ежедневно)"],
        // correct: 2,
    },
];

const headerContainer = document.querySelector('#quiz-header');
const listContainer = document.querySelector('#list');
const submitBtn = document.querySelector('#submit');

let score = 0;
let questionIndex = 0;

clearPage();
showQuestion();

submitBtn.onclick = checkAnswer;

function clearPage(){
    headerContainer.innerHTML = '';
    listContainer.innerHTML = '';
}

function showQuestion(){
    console.log('showQuestion');


    // Question
    const headerTemplate = ` <h2 class="title">%title%</h2>`;
    const title = headerTemplate.replace('%title%', questions[questionIndex]['question']);
    headerContainer.innerHTML = title;

    // Answers
    let answerNumber = 1;

    for (answerText of questions[questionIndex]['answers']){
        // console.log(answerNumber, answerText);
        const questionTemplate = 
            `<li>
                <label for="">
                    <input value="%number%" type="radio" class="answer" name="answer">
                    <span>%answer%</span>
                </label>
            </li>`;

        // let answerHTML = questionTemplate.replace('%answer%', answerText);
        //    listContainer.innerHTML = listContainer.innerHTML + answerHTML;
        // or

        const answerHTML = questionTemplate
                                    .replace('%answer%', answerText)
                                    .replace('%number%', answerNumber);
        
        listContainer.innerHTML += answerHTML;
        answerNumber++;
    }


} 

function checkAnswer(){   
    // Находим выбранную радио кнопку
    const checkedRadio = listContainer.querySelector('input[type="radio"]:checked');
    
    // Если ответ не выбран - ничего не делаем, выходим из функции
    if (!checkedRadio){
        submitBtn.blur();
        return;
    }

    // узнаем номер ответа пользователя

    const userAnswer = parseInt(checkedRadio.value);

    // Если ответ верный - увеличиваем счет
    questions[questionIndex]['correct']
    if (userAnswer === questions[questionIndex]['correct']){
        score++;
    }

    console.log('score = ', score);

    if (questionIndex !== questions.length - 1){
        console.log('Это не последний вопрос');
        questionIndex++;
        clearPage();
        showQuestion();
    } else {
        console.log('Это последний вопрос');
        clearPage();
        showResults();
    }
}

function showResults (){
    console.log('showResults start');
    console.log(score);

    const resultsTemplate = `
            <h2 class="title">%title%</h2>
            <h3 class="summary">%message%</h3>
            <p class="result">%result%</p>
    `;

    let title, message;

    if (score === 7 || score === 8 || score === 9 || score === questions.length ){
        title = 'Вас можно поздравить! 😎';
        message = 'Вы неоспоримый лидер! 💪';
    } else if (score === 6 || score === 5 || score === 4){
        title = 'Неплохой результат! 😉';
        message = 'У Вас есть все задатки настоящего лидера! Однако есть куда стремиться! Вперед! Дерзайте 👍';
    } else if (score === 3 || score === 2 || score === 1){
        title = 'Стоит постараться!';
        message = 'У Вас низкий уровень лидерский качеств. Для Вас уготована другая, более крутая роль 😇';
    }

    // Result
    let result = `${score} из ${questions.length}`;

    const finalMessage = resultsTemplate
                        .replace('%title%', title)
                        .replace('%message%', message)
                        .replace('%result%', result);

    headerContainer.innerHTML = finalMessage;

    submitBtn.blur();
    submitBtn.innerText = 'Попробовать еще раз'
    submitBtn.onclick = () => history.go();
}