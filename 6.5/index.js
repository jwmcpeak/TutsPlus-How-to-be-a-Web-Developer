let messageElement = document.getElementById('message');
let spans = document.querySelectorAll('#message span');

function clickSpan(e) {
    let el = e.target;

    el.classList.toggle('ugly-text');
}

spans.forEach(function(element) {
    element.addEventListener('click', clickSpan);
});


// messageElement.style.color =    'blue';
// messageElement.style.backgroundColor = 'yellow';
// messageElement.style.textDecoration = 'underline';
// messageElement.classList.add('ugly-text','bold');
// messageElement.classList.remove('bold');

// function messageClick(){
//     messageElement.classList.toggle('ugly-text');
// }

// messageElement.addEventListener('click', messageClick);

