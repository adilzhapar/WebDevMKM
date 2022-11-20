quiz = [
    {
        question: "How much money you got? ",
        ans: ["a lot", "100000$", "I'm broke"],
        correct: 0
    },
    {
        question: "How many problems you got? ",
        ans: ["too much", "a lot", "my life is a large one problem"],
        correct : 1
    },
    {
        question: "How many people done doubted you?",
        ans: ["150 people", "a lot", "just that one in the mirror"],
        correct: 0
    },
    {
        question: "How many times did you cheat?",
        ans: ["I'm the loyal one", "a lot", "talai ret qaitalandy"],
        correct: 0
    }

]
function shuffle(array) {
    let currentIndex = array.length,  randomIndex;
  
    // While there remain elements to shuffle.
    while (currentIndex != 0) {
  
      // Pick a remaining element.
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex--;
  
      // And swap it with the current element.
      [array[currentIndex], array[randomIndex]] = [
        array[randomIndex], array[currentIndex]];
    }
  
    return array;
}


let main = document.querySelector('.main-content');


let content = document.createElement('div');
content.className = "content";

main.appendChild(content);


for(let i = 0; i < quiz.length; i++){
    let mainQuestion = document.createElement('h2');
    mainQuestion.className = "main-question";
    
    content.appendChild(mainQuestion);

    mainQuestion.innerHTML = quiz[i].question;

    let arr = shuffle(quiz[i].ans);

    for(let j = 0; j < arr.length; j++){
        if(arr[j] === 'a lot'){
            quiz[i].correct = j;
        }
        let answer = document.createElement('div');
        answer.className = 'answer';

        answer.innerHTML = `<input type="radio" name=${"option" + i} value=${j}>${arr[j]}`

        mainQuestion.appendChild(answer);

    }

}

let button = document.createElement('button');
button.className = 'submit-btn';
button.innerHTML = 'Submit';

main.appendChild(button);


button.addEventListener('click', () => {
    isCorrect = true;

    for(let i = 0; i < quiz.length; i++){
        let current = document.querySelector(`input[name="${"option" + i}"]:checked`);
        
        if(current == null){
            alert("You have to fill each question!");
            isCorrect = null;
            break;
        }
        console.log(current.value, quiz[i].correct);
        
        if(parseInt(current.value) !== quiz[i].correct){
            isCorrect = false;
            console.log("false worked");
        }
    }


    if(isCorrect != null){
        if(document.querySelector('.result') !== null){
            let res = document.querySelector('.result');
            isCorrect == true ? res.innerHTML = 'YOU WIN!' : res.innerHTML = 'YOU LOSE!';
        }else{
            let res = document.createElement('h2');
            res.className = 'result';
            isCorrect == true ? res.innerHTML = 'YOU WIN!' : res.innerHTML = 'YOU LOSE!';
            main.appendChild(res);
        }
        
    }
});







