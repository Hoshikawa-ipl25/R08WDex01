const offset = 125;
const random_offset = 100;
const red = Math.floor(Math.random() * random_offset) + offset;
const green = Math.floor(Math.random() * random_offset) + offset;
const blue = Math.floor(Math.random() * random_offset) + offset;


let h1 = document.querySelector('h1');
h1.setAttribute('style', `background-color:rgb(${red},${green},${blue})`);

let h2 = document.querySelectorAll('h2');
for (tag of h2) {
    tag.setAttribute('style', `color:rgb(${red},${green},${blue})`);
}