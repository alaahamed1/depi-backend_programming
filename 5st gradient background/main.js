let body = document.querySelector('#gradient-background');
let input1 = document.querySelector('.input1');
let input2 = document.querySelector('.input2');

function setUpBackground() {
    body.style.background = `linear-gradient(to right, ${input1.value}, ${input2.value})`;
}

setUpBackground();

input1.addEventListener("input", setUpBackground);
input2.addEventListener("input", setUpBackground);
