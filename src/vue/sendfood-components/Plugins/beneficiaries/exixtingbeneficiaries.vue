<template>
<div>
 <form @submit.prevent="selectBeneficiary()">
     <div class="row justify-content-center">
         <div class="col-md-4">
             <label for="selectbeneficiary" class="text-center">Select Beneficiary</label>
         </div>
         <div class="col-md-6">
             <div class="form-group">
               
               <select v-model="beneficiaryid" class="form-control" id="selectbeneficiary">
        
                 <option v-for="(beneficiary , index) in beneficiaries" :key="index"  :value="beneficiary.id"> {{beneficiary.name}} </option>
        
               </select>
             </div>
         </div>
         <div class="col-md-2">
           <div class="form-group">
               <button class="btn bg-color-yellowlight text-color-white" type="submit">Select Beneficiary</button>
           </div>
         </div>
     </div>
  </form>
</div>
</template>

<script>
export default {
    data(){
        return{
            beneficiaries: [],
            beneficiaryid: null
        }
    },
    methods:{
        //select beneficiary
        selectBeneficiary(){
                const beneficiary = {
                    beneficiaryid: this.beneficiaryid
                }
           axios.post('selectedbeneficiary', beneficiary)
           .then(()=>{

             this.$swal(
               'Success!',
               'Beneficiary Selected Successfully',
               'success'
              );

              $('#methodsmodal').modal('show');

           })
        },
        fetchBeneficiaries(){
            axios.get('beneficiaries')
            .then((response)=>{
                this.beneficiaries = response.data;
            })
        }
    },
    mounted(){
        this.fetchBeneficiaries();
    }
    
}
</script>