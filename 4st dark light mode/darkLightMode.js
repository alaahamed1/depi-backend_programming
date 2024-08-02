let darkMode = document.createElement('button');
let lightMode = document.createElement('button');
let text = document.createElement('h1');

darkMode.textContent = 'Dark Mode';
lightMode.textContent = 'Light Mode';
text.textContent = 'Toggle Dark Mode ';
document.body.appendChild(darkMode);
document.body.appendChild(lightMode);
document.body.appendChild(text);

darkMode.addEventListener('click', () => {
    document.body.style.backgroundColor = "black";
    document.body.style.color = "white";
});

lightMode.addEventListener('click', () => {
    document.body.style.backgroundColor = "#fff";
    document.body.style.color = "black";
});
