<template>
<div class="col-md-12 white-box text-center card">
 <div class="row white-box text-left justify-content-center card" v-for="(cartProduct, index) in cartProducts.items" :key="index">
  <div class="mt-gap" v-if="cartProduct.item.productcategory==1" >
     <div class="col-md-3">
       <img src="image" class="img-fluid cart-image-size" alt="" srcset=""> 
     </div>
     <div class="col-md-9 ">
         <div class="row mt-2">
          <div class="col-md-12 mt-2">
               <ul class="nav flex-column">
                 <li class="nav-item">
                    <h4 class="" > {{cartProduct.item.name}} </h4> 
                 </li>
                 <li class="nav-item">
                   <p>  {{cartProduct.item.comment}}</p>
                 </li>
                 <li class="nav-item">
                   <p> PRICE: {{cartProduct.item.price}}</p>
                 </li>
                 <li class="nav-item">
                   <p> QUANTITY: {{cartProduct.qty}}</p>
                 </li>
               </ul>
          </div>
         </div>
        </div>                                
  </div>
  <div class="mt-gap" v-if="cartProduct.item.productcategory==3" >
     <div class="col-md-3">
       <img src="image" class="img-fluid cart-image-size" alt="" srcset=""> 
     </div>
     <div class="col-md-9 ">
         <div class="row mt-2">
          <div class="col-md-12 mt-2">
               <ul class="nav flex-column">
                 <li class="nav-item">
                    <h4 class="heading-color" > {{cartProduct.item.type}} </h4> 
                 </li>
                 <li class="nav-item">
                   <p>  {{cartProduct.item.description}}</p>
                 </li>
                 <li class="nav-item">
                   <p> PRICE: {{cartProduct.item.price}}</p>
                 </li>
                 <li class="nav-item">
                   <p> QUANTITY: {{cartProduct.qty}}</p>
                 </li>
               </ul>
          </div>
         </div>
        </div>                                
  </div>
  <div class="mt-gap" v-if="cartProduct.item.productcategory==2" >
     <div class="col-md-3">
       <img src="image" class="img-fluid cart-image-size" alt="" srcset=""> 
     </div>
     <div class="col-md-9 ">
         <div class="row mt-2">
          <div class="col-md-12 mt-2">
               <ul class="nav flex-column">
                 <li class="nav-item">
                    <h4 class="heading-color" > {{cartProduct.item.description}} </h4> 
                 </li>
                 <li class="nav-item">
                   <p>  {{cartProduct.item.comment}}</p>
                 </li>
                 <li class="nav-item">
                   <p> PRICE: {{cartProduct.item.price}}</p>
                 </li>
                 <li class="nav-item">
                   <p> QUANTITY: {{cartProduct.qty}}</p>
                 </li>
               </ul>
          </div>
         </div>
        </div>                                
  </div>
  <hr>
   <div class="row">
       <div class="col-md-12">
<ul class="list-inline text-right">
    <li>
        
    </li>
    <li>
        <a  href="/cart" class="btn ml-5 bg-color-yellowlight  text-color-white"> Edit Product </a>
    </li>
</ul>
       </div>
   </div>
    </div>
 </div>
</template>

<script>
export default {
  
  data(){
    return{
      cartProducts: []
    }
  },
  methods:{
    /** Reduce Product By One **/
      reduceByOne(id,productcategory){
          //alert(id + ' ' + productcategory);
          const category = {
              category: productcategory
          }
        axios.post('/reducecartproduct/' + id,category )
        .then((res)=>{
            this.$swal({
              position: 'top-end',
              icon: 'success',
              title: 'Product Reduced successfully',
              showConfirmButton: false,
              timer: 1000
            })
        })
      },
    /** add Product By One **/
      addByOne(id,productcategory){
          //alert(id + ' ' + productcategory);
          const category = {
              category: productcategory
          }
           axios.post('addtocart' + '/' + id,category)
           .then((response)=>{
            this.$swal({
              position: 'top-end',
              icon: 'success',
              title: 'Product Added successfully',
              showConfirmButton: false,
              timer: 1000
            })
           })
      },
    /** Remove cart Product **/
      removeCartProduct(id,productcategory){
          //alert(id + ' ' + productcategory);
          const category = {
              category: productcategory
          }
        axios.post('removecartproduct/' + id,category)
        .then(()=>{
            this.$swal({
              position: 'top-end',
              icon: 'success',
              title: 'Product Removed successfully',
              showConfirmButton: false,
              timer: 1000
            })
        })
      },
    /** Fetch Cart Products **/
    getCartProducts(){
       axios.get('/getcartproducts')
       .then((response)=>{
         this.cartProducts = response.data;
         console.log(response);
       })
    }
  },

  mounted(){
    this.getCartProducts();
  }

}
</script>

<style>
.mt-gap{
    margin-top: -18% !important;
}
</style>