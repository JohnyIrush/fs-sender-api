<template>
<div class="row-justify-content-center">
<div class="col-md-3"></div>
<div class="col-md-6">
 <div class="modal  mt-5" data-backdrop="static"  id="shop-check" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div role="document" data-backdrop="static" class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      <div class="alert alert-white text-center" role="alert">
         <p  class="text-success">Your Product was Added To the cart successfully!</p>
      </div>
      </div>
      <div class="row justify-content-center">
      <ul class="list-inline text-center">
          <li>
              <button @click="goToRequest(1)" type="button" class="shadow p-2 mb-2  rounded col-xs-12 col-sm-12 col-md-12 col-lg-12 btn bg-color-yellowlight" data-dismiss=""> <i class="fa fa-shopping-bag" aria-hidden="true"></i> Continue Shopping </button>
          </li>
          <li>
              <button @click="goToRequest(2)" type="button" class="shadow p-2 mb-2  rounded col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-success"> <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Cheackout </button>
          </li>
      </ul>
     <!--
       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
         <div class=" ml-3 mr-3 row justify-content-center">
           <button @click="goToRequest(1)" type="button" class="shadow p-2 mb-2  rounded col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-warning" data-dismiss=""> <i class="fa fa-shopping-bag" aria-hidden="true"></i> Continue Shopping </button>
         </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
         <div class=" ml-3 mr-3 row justify-content-center">
           <button @click="goToRequest(2)" type="button" class="shadow p-2 mb-2  rounded col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-success"> <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Cheackout </button>
          </div>
       </div> -->
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-md-3"></div>
</div>

</template>

<script>
export default {
  data () {
    return {
    }
  },
  methods: {
   goToRequest(request){
      if (request==1) {
        ('#shop-check').modal('hide');
      }else{
        window.location.assign('/beneficiary');
      }
   }
  },
  mounted(){
    
  }
}
</script>

<style>
  .success-msg{
    font-family: 'Times New Roman', Times, serif;
    font-size: 20px;
  }
</style>