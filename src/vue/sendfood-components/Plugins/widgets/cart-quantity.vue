<template>
  <span> {{cartQuantity}} </span>
</template>
<script>
export default {
    data(){
         return{
             cartQuantity: []
         }
    },
    methods:{
        getCartQuantity(){

       axios.get('/getcartproducts')
       .then((response)=>{
         this.cartQuantity = response.data.totalQty;
       })

    }
    },
    mounted(){
        this.getCartQuantity();
    }
}
</script>
    
