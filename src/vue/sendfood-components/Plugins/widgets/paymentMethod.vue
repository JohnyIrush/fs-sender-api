<template>
  <button   @click="fetchMethod" class="btn btn-lg text-color-darkblue">Fetch</button>
</template>

<script src="https://js.stripe.com/v3/"></script>
<script>
export default {
    data(){
        return{
          
        }
    },

    methods:{
       fetchMethod(){
           const elements = stripe.elements();
           const cardElement = elements.create('card');
           const cardHolderName = document.getElementById('card-holder-name');
           const cardButton = document.getElementById('card-button');
           cardElement.mount('#card-element');
           var stripe = Stripe('pk_test_51H9qTECmoUmjZivfKU4rPUUpjCxOW3obeJS07Yspbj3f3M1QyYITbxiBjliGJfYq4pdMSs1pg36Dx2JpN9Ir7UHn00Z5hpub3d');
               stripe.createPaymentMethod({
                   type: 'card',
                   card: cardElement,
                   billing_details: {
                     name: 'Jenny Rosen',
                   },
                 })
                 .then(function(result) {
                    console.log( 'Success: ' + result);
                 });
          
              if (error) {
                  // Display "error.message" to the user...
                  console.log('Error' + error);
              } else {
                  // The card has been verified successfully...
              }
       }
    }
}
</script>