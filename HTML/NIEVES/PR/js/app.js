  
const term = document.querySelector('.term');
const definition = document.querySelector('.definition')
const againButton = document.querySelector('.again');
const goodButton = document.querySelector('.good');
const easyButton = document.querySelector('.easy');

words = {
	hello: "hola",
	first: "primero",
    garden: "jardin",
    bathroom: "baño"
}

data = Object.entries(words)

function getRandomWord() {
    randomTerm = data[Math.floor(Math.random() * data.length)]
    term.innerHTML = '<h3>${randomTerm[0]}</h3>';
    definition.innerHTML = `<h3>${randomTerm[1]}</h3`;
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