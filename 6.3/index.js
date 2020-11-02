let messageElement = document.getElementById('message');
let firstSpan = document.querySelector('#message span');
let spanElements = document.querySelectorAll('#message span');

function setColorBlue(element) {
    element.style.color = 'blue';
}
// NodeList
spanElements.forEach(setColorBlue);


firstSpan.style.fontWeight = 'bold';
messageElement.style.backgroundColor = 'yellow';
