<template>
    <button @click="launchBeneficiaryModal()" class="btn-lg bg-color-yellowlight text-color-white"  >ADD A NEW BENEFICIARY</button>
</template>

<script>
export default {
    methods:{
        launchBeneficiaryModal(){
            $('#beneficiarymodal').modal('show');
            //Event.$emit('fetchBeneficiaryData')
        }
    }
}
</script>