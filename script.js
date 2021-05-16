//declarare variabile
const textDisplayElement = document.getElementById('textDisplay');
const textInputElement = document.getElementById('textInput');
const timerElement = document.getElementById('timer');
const speedElement= document.getElementById('speed');
var startedTimer = 0;
var textLength = 0;

//functii
function isAlpha(ch){
    if (ch >= 'a' && ch <= 'z' || ch >= 'A' && ch <= 'Z'){
        return true;
    }
    return false;
}

function isDigit(ch){
    if (ch >= '0' && ch <= '9'){
        return true;
    }
    return false;
}

let startTime;
function startTimer() {
  if(startedTimer === 0)
  {
    startedTimer = 1;
    timerElement.innerText = 0;
    startTime = new Date();
    setInterval(() => {
      timer.innerText = Math.floor((new Date() - startTime) / 1000);
    }, 1000);
  }
}

function renderNewText() {
  const text = textDisplayElement.innerText;
  textLength = textDisplayElement.innerText.length;
  textDisplayElement.innerHTML = '';
  text.split('').forEach(character => {
    const characterSpan = document.createElement('span');
    characterSpan.innerText = character;
    textDisplayElement.appendChild(characterSpan);
  })
  textInputElement.value = null;
}


renderNewText();

textInputElement.addEventListener('input', () => {
  //declar variabilele
  const arrayText = textDisplayElement.querySelectorAll('span')
  const arrayValue = textInputElement.value.split('')
  var total_words = 0;
  var correct_words = 0;
  var mistakes = 0;
  let isCorrect = true;
  //pentru fiecare caracter se verifica daca corespunde cu elementul din textul dat
  arrayText.forEach((characterSpan, index) => {
    startTimer();
    const character = arrayValue[index];

    if (character == null) {
      characterSpan.classList.remove('correct');
      characterSpan.classList.remove('incorrect');
      isCorrect = false;
    } else if (character === characterSpan.innerText) {
      if(!isDigit(character) && !isAlpha(character) && (isDigit(arrayValue[index-1]) || isAlpha(arrayValue[index-1])))
      {
         total_words += 1;
         if(isCorrect){
           correct_words += 1;
         }
         isCorrect = true;
      }
      characterSpan.classList.add('correct');
      characterSpan.classList.remove('incorrect');
    } else {
      characterSpan.classList.remove('correct');
      characterSpan.classList.add('incorrect');
      mistakes += 1;
      isCorrect = false;
    }
  })

  if(isCorrect || textInputElement.value.length === textLength){
    document.getElementById('correct_words').innerText = correct_words;
    document.getElementById('total_words').innerText = total_words;
    document.getElementById('final_time').innerText = Math.floor((new Date() - startTime) / 1000);
    document.getElementById('mistakes').innerText = mistakes;
    document.getElementById('speed').innerText = Math.floor((correct_words*60)/Math.floor((new Date() - startTime) / 1000));
    $('#statsModal').modal('show');
  }
})
