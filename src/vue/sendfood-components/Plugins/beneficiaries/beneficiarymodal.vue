<template>
<div class="modal" id="beneficiarymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div role="document" data-backdrop="static" class="modal-dialog modal-lg modal-dialog-centered mt-4 mb-4">
   <!--content-->
    <div class="modal-content">
      <!--header-->
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
     <div class="modal-title" id="add-benef-modal"> <h3 class="txt-color-darkblue">Add new beneficiary</h3></div>
    </div>
    <form @submit.prevent="!editmode? createBeneficiary() : updateBeneficiary()" @keydown="form.onKeydown($event)" class="col-12 row m-0 p-0">
    <div class="modal-body txt-color-darkblue">
      <!--form-->
      
        <div class="row justify-content-center">
         <!--Beneficiary name-->
         <div class="form-group col-12 col-sm-6 p-1">
          <label for="name">Full name of the beneficiary</label>
          <input v-model="form.name" type="text" class="form-control" id="name" name="name" placeholder="Enter your name" :class="{ 'is-invalid': form.errors.has('name') }">
          <has-error :form="form" field="name"></has-error>
         </div>

         <!--Beneficiary email-->
         <div class="form-group col-12 col-sm-6 p-1">
          <label for="email">Email address of the beneficiary</label>
          <input v-model="form.email" type="email" name="email" class="form-control" id="email" placeholder="Enter your Email" :class="{ 'is-invalid': form.errors.has('email') }">
          <has-error :form="form" field="email"></has-error>
         </div>
        </div>
        <!--Row 2-->
        <div class="row justify-content-center">
          <!--Beneficiary Country-->
          <div class="form-group col-12 col-sm-6 p-1"><label for="country">Country</label>
            <select v-model="form.country" name="country" placeholder="Select a country" id="country" class="form-control" :class="{ 'is-invalid': form.errors.has('country') }">
              <option value="" disabled="" selected="">Loading...</option>
            </select>
            <has-error :form="form" field="country"></has-error>
          </div>
          <!--Beneficiary Province-->
          <div class="form-group col-12 col-sm-6 p-1">
            <label for="state">Province/State</label>
            <select v-model="form.state" name="state" id="state" placeholder="Select a province/state" class="form-control" :class="{ 'is-invalid': form.errors.has('state') }">
              <option value="" disabled="" selected="">Select a country to view states</option>
            </select>
            <has-error :form="form" field="state"></has-error>
          </div>
        </div>

        <!--Row 3-->

        <div class="row justify-content-center">
         <!--Beneficiary City-->
         <div class="form-group col-12 col-sm-6 p-1">
           <label for="city">City</label>
           <select v-model="form.city" name="city" placeholder="Select a city" id="city" class="form-control" :class="{ 'is-invalid': form.errors.has('city') }">
             <option value="" disabled="" selected="">Select a state</option>
           </select>
           <has-error :form="form" field="city"></has-error>
         </div>
          <!--Beneficiary Address-->
         <div class="form-group col-12 col-sm-6 p-1">
           <label for="address">Address</label>
           <input v-model="form.address" type="text" name="address" id="address" placeholder="Enter complete address" class="form-control" :class="{ 'is-invalid': form.errors.has('address') }">
           <has-error :form="form" field="address"></has-error>
         </div>
        </div>
         <!--Row 4-->
        <div class="row justify-content-center">
          <!--Beneficiary Zip code-->
          <div class="form-group col-12 col-sm-6 p-1">
            <label for="zip">Postal/Zip Code</label>
            <input v-model="form.zip" type="text" name="zip" id="zip" placeholder="Enter zip/postal code" class="form-control" :class="{ 'is-invalid': form.errors.has('zip') }">
            <has-error :form="form" field="zip"></has-error>
          </div>
         <!--Beneficiary Mobile-->
         <div class="form-group col-12 col-sm-6 p-1">
          <div class="row">
            <div class="col-md-12">
              <label for="mobilenumber">Mobile number of the beneficiary</label>
            </div>
          </div>
          <div class="row">
            <ul class="list-inline text-left">
              <li>
                <select v-model="form.mobileCountry" name="mobileCountry" class="form-control form-control-sm" :class="{ 'is-invalid': form.errors.has('mobileCountry') }">
                  <option>Small select</option>
                </select>
                <has-error :form="form" field="mobileCountry"></has-error>
              </li>
              <li>
                <input v-model="form.mobile" type="tel" autocomplete="tel" required="" inputmode="tel" id="mobile" name="mobile" class="form-control"  placeholder="mobile number" :class="{ 'is-invalid': form.errors.has('mobile') }">
                <has-error :form="form" field="mobile"></has-error>
              </li>
          </ul>
          
          </div>
         </div>
        </div>

        <div class="row justify-content-center">
          <div class="form-group col-md-1 text-right">
            <input class="form-check-input" type="checkbox" id="gridCheck">
          </div>
          <div class="form-group col-md-11 text-left">
            <label class="form-check-label text-left" for="gridCheck">
              Please check the box to ensure your information is correct to the best of your knowledge, incomplete and inaccurate information may delay the approval process.
            </label>
          </div>
        </div>
    </div>

    <div class="modal-footer">
      <button class="btn btn-outline-light text-dark ">Cancel</button>
      <input type="submit" class="btn bg-color-whitedark" value="Submit">
    </div>
    </form>
    </div>
  </div>
</div>
</template>

<script>

import Vue from 'vue'
import { Form, HasError, AlertError } from 'vform'

export default {
  data () {
    return {
      // Create a new form instance
      form: new Form({
            name: null,
            address: null,
            city: null,
            state: null,
            zip: null,
            country: null,
            bank_name: null,
            branch_name: null,
            account_number: null,
            email: null,
            phone: null,
            mobileCountry: null
      }),
      editmode: false
    }
  },
  methods:{
   //Edit existing Beneficiary
   editBeneficiary(){

   },
     //update existing Beneficiary
   updateBeneficiary(){

   },
   //Create a new Beneficiary
   createBeneficiary(){
     alert('created');
      this.form.post('/createbeneficiary',)
        .then(({ data })=> {
           console.log(data) 
         })
    }
   }
    
}
</script>