  
const term = document.querySelector('.term');
const definition = document.querySelector('.definition')
const againButton = document.querySelector('.again');
const goodButton = document.querySelector('.good');
const easyButton = document.querySelector('.easy');

data = Object.entries(words)

function getRandomWord() {

}

againButton.addEventListener('click', function() {
    getRandomWord();
});

goodButton.addEventListener('click', function() {
    getRandomWord();
});

easyButton.addEventListener('click', function() {
    getRandomWord();
});