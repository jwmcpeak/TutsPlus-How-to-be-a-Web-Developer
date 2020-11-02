function _id(elementId) {
    return document.getElementById(elementId);
}

function setClick(elementId, callbackFn) {
    _id(elementId).addEventListener('click', callbackFn);
}

function fetchJson(url) {
    return fetch(url).then(function(res) {
        return res.json();
    });
}

let app = {
    messageElement: null,
    setMessage: function(message) {
        app.messageElement.innerHTML = message;
    },
    init: function() {
        app.messageElement = _id('message');

        fetchJson('messages.json').then(function(obj) {

            setClick('morning', function() {
                app.setMessage(obj.morning);
            });

            setClick('evening', function() {
                app.setMessage(obj.evening);
            });

        });
    }
};


app.init();