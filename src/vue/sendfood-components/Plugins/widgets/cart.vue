<template>
<div class="col-md-12 white-box text-center card">
 <div class="row white-box text-center justify-content-center card" v-for="(cartProduct, index) in cartProducts.items" :key="index">
  <div v-if="cartProduct.item.productcategory==1" >
     <div class="col-md-4">
       <img src="image" class="img-fluid cart-image-size" alt="" srcset=""> 
     </div>
     <div class="col-md-4 ">
         <div class="row mt-2">
          <div class="col-md-12 mt-2">
            <h5 class="heading-color" > {{cartProduct.item.name}} </h5> 
          </div>
         </div>
         <div class="row mt-4">
          <div class="col-md-12 mt-2">
            <ul class="list-inline text-right">
                <li>
                 <select id="inputState" class="form-control">
                     <option selected>{{cartProduct.qty}}</option>
                     <option >Quantity</option>
                     <option >1</option>
                     <option >2</option>
                     <option >3</option>
                     <option >4</option>
                     <option >5</option>
                     <option >6</option>
                     <option >7</option>
                     <option >8</option>
                     <option >9</option>
                     <option >10</option>
                     <!--<option> <button class="btn text-color-darkblue"> <i class="fa fa-plus fa-2x" aria-hidden="true"></i> Add By One</button> </option>
                     <option> <button class="btn bg-color-yellowlight"> <i class="fa fa-minus fa-2x" aria-hidden="true"></i> Reduce By One</button> </option>-->
                 </select>
                </li>
                <li>
                    <div class="dropdown">
                      <a class="btn text-color-darkblue text-color-white  dropdown-toggle" href="#" role="button" id="moreoptions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        options 
                      </a>
                      <div class="dropdown-menu bg-color-whitedark" aria-labelledby="moreoptions">
                        <button @click="addByOne(cartProduct.item.id,cartProduct.item.productcategory)" class="dropdown-item text-color-darkblue text-color-white mb-2" href="#"> <i class="fa fa-plus fa-2x" aria-hidden="true"></i> Add By One</button>
                        <button @click="reduceByOne(cartProduct.item.id,cartProduct.item.productcategory)" class="dropdown-item text-color-white bg-color-red mb-2" href="#"> <i class="fa fa-minus fa-2x" aria-hidden="true"></i> Reduce By One </button>
                      </div>
                    </div>
                </li>
            </ul>
          </div>
         </div>
         <div class="row mt-2">
          <div class="col-md-12 mt-2">
            <button  @click="removeCartProduct(cartProduct.item.id,cartProduct.item.productcategory)" type="button" class="btn bg-color-yellowlight btn-lg text-color-white"> <i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
          </div>
         </div>
        </div>                                
        <div class="col-md-3">
          <div class="row content-justify-center">
            <div  class="col-md-12 m-0 cart-qty-height shadow-sm   mb-5 rounded">
              <ul class="nav flex-column">
                <li class="nav-item">
                    <p class=""> <sup> <i class="fas fa-dollar-sign    "></i> </sup> {{cartProduct.price}}  CAD </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
  </div>
  <div v-if="cartProduct.item.productcategory==3" >
     <div class="col-md-4">
       <img src="image" class="img-fluid cart-image-size" alt="" srcset=""> 
     </div>
     <div class="col-md-4 ">
         <div class="row mt-2">
          <div class="col-md-12 mt-2">
            <h5 class="heading-color" > {{cartProduct.item.type}} </h5> 
          </div>
         </div>
         <div class="row mt-4">
          <div class="col-md-12 mt-2">
            <ul class="list-inline text-right">
                <li>
                 <select id="inputState" class="form-control">
                     <option selected>{{cartProduct.qty}}</option>
                     <option >Quantity</option>
                     <option >1</option>
                     <option >2</option>
                     <option >3</option>
                     <option >4</option>
                     <option >5</option>
                     <option >6</option>
                     <option >7</option>
                     <option >8</option>
                     <option >9</option>
                     <option >10</option>
                     <!--<option> <button class="btn text-color-darkblue"> <i class="fa fa-plus fa-2x" aria-hidden="true"></i> Add By One</button> </option>
                     <option> <button class="btn bg-color-yellowlight"> <i class="fa fa-minus fa-2x" aria-hidden="true"></i> Reduce By One</button> </option>-->
                 </select>
                </li>
                <li>
                    <div class="dropdown">
                      <a class="btn text-color-darkblue text-color-white  dropdown-toggle" href="#" role="button" id="moreoptions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        options 
                      </a>
                      <div class="dropdown-menu bg-color-whitedark" aria-labelledby="moreoptions">
                        <button @click="addByOne(cartProduct.item.id,cartProduct.item.productcategory)" class="dropdown-item text-color-darkblue text-color-white mb-2" href="#"> <i class="fa fa-plus fa-2x" aria-hidden="true"></i> Add By One</button>
                        <button @click="reduceByOne(cartProduct.item.id,cartProduct.item.productcategory)" class="dropdown-item text-color-white bg-color-red mb-2" href="#"> <i class="fa fa-minus fa-2x" aria-hidden="true"></i> Reduce By One </button>
                      </div>
                    </div>
                </li>
            </ul>
          </div>
         </div>
         <div class="row mt-2">
          <div class="col-md-12 mt-2">
            <button  @click="removeCartProduct(cartProduct.item.id,cartProduct.item.productcategory)" type="button" class="btn bg-color-yellowlight btn-lg text-color-white"> <i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
          </div>
         </div>
        </div>                                
        <div class="col-md-3">
          <div class="row content-justify-center">
            <div  class="col-md-12 m-0 cart-qty-height shadow-sm   mb-5 rounded">
              <ul class="nav flex-column">
                <li class="nav-item">
                    <p class=""> <sup> <i class="fas fa-dollar-sign    "></i> </sup> {{cartProduct.price}}  CAD </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
  </div>
  <div v-if="cartProduct.item.productcategory==2" >
     <div class="col-md-4">
       <img src="image" class="img-fluid cart-image-size" alt="" srcset=""> 
     </div>
     <div class="col-md-4 ">
         <div class="row mt-2">
          <div class="col-md-12 mt-2">
            <h5 class="heading-color" > {{cartProduct.item.description}} </h5> 
          </div>
         </div>
         <div class="row mt-4">
          <div class="col-md-12 mt-2">
            <ul class="list-inline text-right">
                <li>
                 <select id="inputState" class="form-control">
                     <option selected>{{cartProduct.qty}}</option>
                     <option >Quantity</option>
                     <option >1</option>
                     <option >2</option>
                     <option >3</option>
                     <option >4</option>
                     <option >5</option>
                     <option >6</option>
                     <option >7</option>
                     <option >8</option>
                     <option >9</option>
                     <option >10</option>
                     <!--<option> <button class="btn text-color-darkblue"> <i class="fa fa-plus fa-2x" aria-hidden="true"></i> Add By One</button> </option>
                     <option> <button class="btn bg-color-yellowlight"> <i class="fa fa-minus fa-2x" aria-hidden="true"></i> Reduce By One</button> </option>-->
                 </select>
                </li>
                <li>
                    <div class="dropdown">
                      <a class="btn text-color-darkblue text-color-white  dropdown-toggle" href="#" role="button" id="moreoptions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        options 
                      </a>
                      <div class="dropdown-menu bg-color-whitedark" aria-labelledby="moreoptions">
                        <button @click="addByOne(cartProduct.item.id,cartProduct.item.productcategory)" class="dropdown-item text-color-darkblue text-color-white mb-2" href="#"> <i class="fa fa-plus fa-2x" aria-hidden="true"></i> Add By One</button>
                        <button @click="reduceByOne(cartProduct.item.id,cartProduct.item.productcategory)" class="dropdown-item text-color-white bg-color-red mb-2" href="#"> <i class="fa fa-minus fa-2x" aria-hidden="true"></i> Reduce By One </button>
                      </div>
                    </div>
                </li>
            </ul>
          </div>
         </div>
         <div class="row mt-2">
          <div class="col-md-12 mt-2">
            <button  @click="removeCartProduct(cartProduct.item.id,cartProduct.item.productcategory)" type="button" class="btn bg-color-yellowlight btn-lg text-color-white"> <i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
          </div>
         </div>
        </div>                                
        <div class="col-md-3">
          <div class="row content-justify-center">
            <div  class="col-md-12 m-0 cart-qty-height shadow-sm   mb-5 rounded">
              <ul class="nav flex-column">
                <li class="nav-item">
                    <p class=""> <sup> <i class="fas fa-dollar-sign    "></i> </sup> {{cartProduct.price}}  CAD </p>
                </li>
              </ul>
            </div>
          </div>
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
          alert(id + ' ' + productcategory);
          const category = {
              category: productcategory
          }
        axios.post('/reducecartproduct/' + id,category )
        .then((res)=>{
           alert('Reduced');
        })
      },
    /** add Product By One **/
      addByOne(id,productcategory){
          alert(id + ' ' + productcategory);
          const category = {
              category: productcategory
          }
           axios.post('addtocart' + '/' + id,category)
           .then((response)=>{
              alert('Added');
           })
      },
    /** Remove cart Product **/
      removeCartProduct(id,productcategory){
          alert(id + ' ' + productcategory);
          const category = {
              category: productcategory
          }
        axios.post('removecartproduct/' + id,category)
        .then((res)=>{
         this.cartProducts = response.data;
              //this.feedbackMessages.successMsg('Product removed successfully');
            /*  setTimeout(() => {
                window.location.reload();
              }, 3000); */
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
