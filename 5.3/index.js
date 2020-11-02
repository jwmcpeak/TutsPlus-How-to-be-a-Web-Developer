let jeremy = {
    firstName: 'Jeremy',
    lastName: 'McPeak',
    greet: function(person) {
        alert('Hello, ' + person.firstName);
    }
};

let john = {
    firstName: 'John',
    lastName: 'Doe'
};


jeremy.greet(john);