<template>
  <div class="col-12">
   <div class="d-block my-3">
     <div class="custom-control custom-radio">
         <input v-model="selectedMethod"  @change="selectMethod" id="emailpayment" value="1" name="paymentMethod" type="radio" class="custom-control-input text-white" checked="" required="">
         <label class="custom-control-label  custom-control-label" for="credit"> <h4>E-mail Payment</h4>  </label>
         <br> <label> <small><i>  Free 0.00(T&Cs)</i></small> </label>
       </div>
     <div class="custom-control custom-radio">
       <input  v-model="selectedMethod" @change="selectMethod" id="credit" name="paymentMethod" value="2" type="radio" class="custom-control-input text-white" checked="" required="">
       <label class="custom-control-label  custom-control-label" for="credit"> <h4>ZipWallet</h4>    </label>
       <br> <label> <small><i>  CAD/USD/GBP/EUR 0.00</i></small> </label>
     </div>
     <div class="custom-control custom-radio">
       <input  v-model="selectedMethod" @change="selectMethod" id="debit"  name="selectedMethod" type="radio" class="custom-control-input text-white" required="" value="3">
       <label class="custom-control-label" for="credit"> <h4>INTERAC Online</h4>  </label>
       <br> <label> <small><i>  Free 0.00(T&Cs)</i></small> </label>
     </div>
     <div class="custom-control custom-radio">
       <input  v-model="selectedMethod" @change="selectMethod" id="paypal" name="paymentMethod" type="radio" class="custom-control-input text-white" required="" value="4">
       <label class="custom-control-label custom-control-label" for="credit"> <h4>Debit/Credit Card</h4>  </label>
       <br> <label> <small><i> VISA/MC/AMEX Fee 4.25%</i></small> </label>
     </div>
  </div>
  </div>
</template>

<script>
export default {
    data(){
        return{
          
               EmailPayment: {
                   id : 1,
                   method: 'E-mail Payment',
                   description: 'Free 0.00'
               },
               ZipWallet:{
                   id : 2,
                   method: 'ZipWallet',
                   description: 'CAD/USD/GBP/EUR 0.00'
               },
               INTERACOnline:{
                   id : 3,
                   method: 'INTERAC Online',
                   description: 'Free 0.00'
               },
              DCCard: {
                   id : 4,
                   method: 'Debit/Credit Card',
                   description: 'VISA/MC/AMEX Fee 4.25%'
               },
               selectedMethod:null
        }
    },
    methods:{
       //select payment method
       selectMethod(e){
           //alert(this.selectedMethod);
           if (this.selectedMethod==1) {
             $('#selectedmethod').text(this.EmailPayment.method)
           axios.post('selectpaymentmethod',this.EmailPayment)
           .then(()=>{
                this.$swal(
               'Success!',
               'Payment Method Slected Successfully',
               'success'
              );
           })
           } else if (this.selectedMethod==2){

             $('#selectedmethod').text(this.ZipWallet.method)
              axios.post('selectpaymentmethod',this.ZipWallet)
              .then(()=>{
              this.$swal(
               'Success!',
               'Payment Method Slected Successfully',
               'success'
              );
              }) 
           }else if (this.selectedMethod==3){
             $('#selectedmethod').text(this.INTERACOnline.method)
              axios.post('selectpaymentmethod',this.INTERACOnline)
              .then(()=>{
              this.$swal(
               'Success!',
               'Payment Method Slected Successfully',
               'success'
              );
              }) 
           }else if (this.selectedMethod==4){
           $('#selectedmethod').text(this.DCCard.method)
               axios.post('selectpaymentmethod',this.DCCard)
               .then(()=>{
               this.$swal(
               'Success!',
               'Payment Method Slected Successfully',
               'success'
              );
               }) 
           }
           //alert(e.target.value);
           //console.log(e);
       } 
    }
}
</script>