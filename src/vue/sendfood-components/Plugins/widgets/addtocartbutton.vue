<template>

<button @click="shopOrCheckout(id)" class="btn ml-5 bg-color-yellowlight text-white"> ADD TO CART</button>
 
</template>

<script>

import shopOrCheckout from './shoporcheckout'

export default {
    props: ['id'],
    components:{
        shopOrCheckout
    },
    methods:{
       shopOrCheckout(id) {

           axios.get('addtocart' + '/' + id)
           .then((response)=>{
               /*
              this.$swal({
                position: 'top-end',
                icon: 'success',
                title: 'Your Account Details was Updated Successfully',
                showConfirmButton: false,
                timer: 1500
              });
               */
           })
      }
    }
    
}
</script>