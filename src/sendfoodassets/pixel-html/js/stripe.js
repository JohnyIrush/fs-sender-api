// Set your publishable key: remember to change this to your live publishable key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
var stripe = Stripe('pk_test_A6ijRoaDCzAPZQHxV5RdNbG5');
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
var style = {
    base: {
        // Add your base input styles here. For example:
        fontSize: '16px',
        color: '#32325d',
    },
};

// Create an instance of the card Element.
var card = elements.create('card', { style: style });

//card holder
const cardHolderName = document.getElementById('card-holder-name');
const cardButton = document.getElementById('card-button');


// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Create a token or display an error when the form is submitted.
var form = document.getElementById('payment-form');
var formSubmit = document.getElementById('form-submit');
form.addEventListener('submit', (event) => {
    //alert('submitted');
    event.preventDefault();

    stripe.createToken(card).then(function(result) {
        if (result.error) {
            // Inform the customer that there was an error.
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
        } else {
            // Send the token to your server.
            stripeTokenHandler(result.token);
        }
    });
});


async function stripeTokenHandler(token) {
    //alert('token');
    // Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);

    //verify payment method
    const { paymentMethod, error } = await stripe.createPaymentMethod(
        'card', card, {
            billing_details: { name: cardHolderName.value }
        }
    );

    if (error) {
        // Display "error.message" to the user...
    } else {
        // The card has been verified successfully...
    }
    var paymentmethodhiddenInput = document.createElement('input');
    paymentmethodhiddenInput.setAttribute('type', 'hidden');
    paymentmethodhiddenInput.setAttribute('name', 'paymentmethod');
    paymentmethodhiddenInput.setAttribute('value', paymentMethod.id);
    form.appendChild(paymentmethodhiddenInput);

    //alert(paymentMethod.id);
    //payment method

    // Submit the form
    form.submit();
}

//alert('changes');