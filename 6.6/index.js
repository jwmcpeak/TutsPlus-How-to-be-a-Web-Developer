function _id(elementId) {
    return document.getElementById(elementId);
}

function setClick(elementId, callbackFn) {
    _id(elementId).addEventListener('click', callbackFn);
}

let app = {
    messageElement: null,
    setMessage: function(message) {
        app.messageElement.innerHTML = message;
    },
    init: function() {
        app.messageElement = _id('message');

        setClick('morning', function() {
            app.setMessage('Gmorning!');
        });

        setClick('evening', function() {
            app.setMessage('Gnight!');
        });
    }
};


app.init();