<template>

<button @click="shopOrCheckout()" class="btn ml-5 bg-color-yellowlight text-white"> ADD TO CART</button>
 
</template>

<script>

import shopOrCheckout from './shoporcheckout'

export default {
    props: ['id','productcategory'],
    components:{
        shopOrCheckout
    },
    methods:{
       shopOrCheckout() {
          alert(this.id + ' ' + this.productcategory);
          const category = {
              category: this.productcategory
          }
           axios.post('addtocart' + '/' + this.id, category)
           .then((response)=>{
                alert('Added');
           })
      }
    }
    
}
</script>