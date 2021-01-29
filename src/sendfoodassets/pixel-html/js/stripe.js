var stripe = Stripe('pk_test_A6ijRoaDCzAPZQHxV5RdNbG5');
var elements = stripe.elements();

var card = elements.create('card');
const cardElement = elements.getElement('card');

// Add an instance of the card UI component into the `card-element` <div>
card.mount('#card-element');

var form = document.getElementById('payment-form');


function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);


    form.appendChild(hiddenInput);


    // Submit the form
    form.submit();
}

function createToken() {
    stripe.createToken(card).then(function(result) {
        if (result.error) {
            // Inform the user if there was an error
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
        } else {
            // Send the token to your server
            stripeTokenHandler(result.token);
        }
    });
};

// Create a token when the form is submitted.
//var form = document.getElementById('payment-form');
form.addEventListener('submit', function(e) {
    alert('submitted');
    e.preventDefault();
    createToken();
});

card.on('change', function(event) {
    var displayError = document.getElementById('card-errors');
    if (event.error) {
        displayError.textContent = event.error.message;
    } else {
        displayError.textContent = '';
    }
});