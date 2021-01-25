<template>
<div class="col-md-12">
<div class="modal" id="methodsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div role="document" data-backdrop="static" class="modal-dialog modal-lg modal-dialog-centered mt-4 mb-4">
     <!--content-->
      <div class="modal-content">
        <!--header-->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       <div class="modal-title" id="add-benef-modal"> <h3 class="txt-color-darkblue">Receiving Methods</h3></div>
      </div>
      <form @submit.prevent="!editmode? createReceivingMethod() : updateReceivingMethod()">
      <div class="modal-body txt-color-darkblue">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        
            <li v-if="banklists.length>0" class="nav-item">
                <a class="nav-link active" id="bank-tab" data-toggle="tab" href="#bank" role="tab" aria-controls="bank" aria-selected="true">Bank details</a>
            </li> 
        
            
            <li v-if="agentlist.length>0" class="nav-item">
                <a class="nav-link active" id="agent-tab" data-toggle="tab" href="#agent" role="tab"
                    aria-controls="agent">Agent details</a>
            </li>

            <li v-if="mobilewallettemplates.length>0" class="nav-item">
                <a class="nav-link" id="mobile-tab" data-toggle="tab" href="#mobile" role="tab"
                    aria-controls="mobile">Mobile money</a>
            </li>

            <!--Problems-->
        
            <li v-if="cashpickuptemplates.length>0" class="nav-item">
                <a class="nav-link" id="cash-tab" data-toggle="tab" href="#cash" role="tab" aria-controls="cash">Cash Pickup</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="zip-tab" data-toggle="tab" href="#zipt" role="tab"
                    aria-controls="zipt">ZipWallet</a>
            </li>
        </ul>
        <div  class="tab-content" id="myTabContent">
                <div v-if="banklists.length>0" class="tab-pane active" id="bank" role="tabpanel" aria-labelledby="bank-tab">
                    <div class="form-group mt-3">
                        <input type="hidden" name="" value="">
                        <label for="beneficiaryBankName">Bank Name</label>
        
                        <select v-model="form.bank" id="beneficiaryBankName" name="bank" class="form-control" data-required="true" :class="{ 'is-invalid': form.errors.has('bank') }">
                                <option value="">Select Bank</option>
                                <option value="1">Equity</option>
                                <option value="2">Cooperative</option>
                                <option value="3">Mastercard</option>
                                <option   v-for="(banklist, index) in banklists" :key="index" :value="banklist.code" ></option>
                                <has-error :form="form" field="bank"></has-error>
                        </select>

                    </div>
            
                    <div class="form-group">
                        <label for="beneficiaryBranchName">Branch Name</label>
                        <input type="text" id="beneficiaryBranchName" name=""
                            class="form-control" data-required="true" value="">
                    </div>
                    <div class="form-group">
                        <label for="beneficiaryAccount">Account Number</label>
                        <input id="beneficiaryAccount" type="text" name=""
                            class="form-control" data-required="true" value="">
                    </div>
   
                </div>
        
            <div v-if="agentlist.length>0" class="tab-pane active " id="agent" role="tabpanel"
                aria-labelledby="agent-tab">
                <div class="form-group mt-3">
                    <label for="agentEmail">Agent Name</label>
                    <select @change="setDefaultFields()" v-model="form.agent" class="form-control" id="agentEmail" name="" data-required="true" :class="{ 'is-invalid': form.errors.has('agent') }">
                            <option v-for="(agent, index) in agentlist" :key="index" :value="agent.id"> {{agent.name}} </option>
                             <has-error :form="form" field="agent"></has-error>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="LocationOfAgent">Agent Location</label>
                    <input id="agentlocation" type="text" name="mobile" class="form-control" :value="agentlocation"  readonly>
                </div>
        
                <div class="form-group">
                    <label for="agentMobile">Agent Mobile Number</label>
                    <input id="agentmobile" type="text" name="mobile" class="form-control" :value="agentmobile"  readonly>
                </div>
                    <div class="form-group mt-3">
                      <ul class="list-inline text-right">
                       <li></li>
                       <li class="nav-item">
                           <a class="nav-link btn btn-lg ml-5 bg-color-yellowlight text-white text-center" id="mobile-tab" data-toggle="tab" href="#mobile" role="tab"
                               aria-controls="mobile">Next</a>
                       </li>
                      </ul>

                    </div>
            </div>
        
            <div v-if="mobilewallettemplates.length>0" class="tab-pane  " id="mobile" role="tabpanel"
                aria-labelledby="mobile-tab">
                <div class="form-group">
                    <label for="mobileMoneyOperator">Mobile Operator</label>
        
                    <select v-model="form.mobile_operator_id" class="form-control" id="mobileMoneyOperator" name="beneficiary_receive_method[mobile][operator]" data-required="true" :class="{ 'is-invalid': form.errors.has('mobile_operator_id') }">
                        <option value="1">Select Operator</option>
                    </select>
                    <has-error :form="form" field="mobile_operator_id"></has-error>
                </div>
        
                <div class="form-group  mt-3">
                    <input type="hidden" name="" value="">
                    <label for="beneficiaryMobileAccount">Mobile Number</label>
                    <input v-model="form.mobile"  id="beneficiaryMobileAccount" type="text" name="mobile" class="form-control beneficiaryPhone phone" data-required="true" value="" maxlength="10">
                    <has-error :form="form" field="mobile"></has-error>
                </div>
                    <div class="form-group mt-3">
                      <ul class="list-inline text-right">
                       <li></li>
                       <li class="nav-item">
                           <a class="nav-link btn btn-lg ml-5 bg-color-yellowlight text-white text-center" id="cash-tab" data-toggle="tab" href="#cash" role="tab"
                               aria-controls="cash">Next</a>
                       </li>
                      </ul>

                    </div>
        
            </div>

            <!--Problems-->
        
        
            <div v-if="cashpickuptemplates.length>0" class="tab-pane  " id="cash" role="tabpanel" aria-labelledby="cash-tab">
                <div class="form-group mt-3">
                    <label for="cashPickupMobileOperator">Mobile Operator</label>
                    <select class="form-control" id="cashPickupMobileOperator"
                        name="beneficiary_receive_method[cash_pickup][operator]" data-required="true">
                        <option value="">Select Operator</option>
                            <option value=""  ></option>
                    </select>
                </div>
                <div class="form-group beneficiary">
                    <input type="hidden" name="" value="">
                    <label for="cashPickupMobileAccount">Mobile Number</label>
                    <input id="cashPickupMobileAccount" type="text" name="" value="" class="form-control cashPickupMobileAccount phone" data-required="true">
                </div>

            </div>
        
        
            <div class="tab-pane  " id="zipt" role="tabpanel" aria-labelledby="zip-tab">
                <div class="form-group mt-3">
                    <label for="wallet">Wallet</label>
                    <input type="hidden" name="" value="">
                    <select v-model="form.zipwallet" class="form-control" id="wallet" name="zipwallet">
                        <option>Select</option>
                        <option value="1" >ZipCash</option>
                        <option value="cad" >CAD</option>
                        <option value="usd" >USD</option>
                        <option value="gbp" >GBP</option>
                        <option value="eur" >EUR</option>
                        <option value="zar" >ZAR</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="wallet">Wallet Number</label>
                    <input id="beneficiaryZipAccount" type="text"
                        name="beneficiary_receive_method[zipwallet][account_number]" class="form-control" data-required="true"
                        value="1">
                </div>
                 <div class="form-group mt-3">
                   
                 </div>
                
            </div>

        </div>
      </div>
      <div class="modal-footer">
        <div class="form-group mt-3">
          <ul class="list-inline text-right">
           <li></li>
           <li class="nav-item">
            <button  type="submit" class="btn btn-lg ml-5 bg-color-yellowlight text-white text-center" >Confirm</button>
           </li>
          </ul>
        </div>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>
</template>

<script>

import Vue from 'vue'
import { Form, HasError, AlertError } from 'vform'

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

export default {
    data(){
        return{
            form: new Form({
               //bank: null,
               agent: null,
               mobile_operator_id: 1,
               zipwallet: 1,
               mobile: null,
            }),
            banklists: [],
            agentlist: [],
            agentlocation: [],
            agentmobile: [],
            mobilewallettemplates: [],
            cashpickuptemplates: [],
            editmode: false
        }
    },
    methods: {
        createReceivingMethod(){

            this.form.post('createreceivingmethod', this.form)
            .then(()=>{

             this.$swal(
               'Success!',
               'Beneficiary created Successfully',
               'success'
              );

             $('#methodsmodal').modal('hide');
             $('#your-modal-id').modal('hide');
             $('body').removeClass('modal-open');
             $('.modal-backdrop').remove();

             this.$swal(
               'Success!',
               'Beneficiary created Successfully',
               'success'
              );
            })
        },
        //fetch cashpickuptemplates
       getCashPickUpTemplates(){
           axios.get('cashpickuptemplates')
           .then((response)=>{
              this.cashpickuptemplates = response.data;
           });
       },
        //fetch mobile wallets
       getMobileWalletTemplates(){
           axios.get('mobilewallettemplates')
           .then((response)=>{
              this.mobilewallettemplates = response.data;
           });
       },
        //set default fields for agents
        setDefaultFields(){
         this.getAgentMobile();
         this.getAgentLocation();
        },
        getAgentMobile(){
           axios.get('/agentmobile/' + this.form.agent)
           .then((response)=>{
               this.agentmobile = response.data.mobile_number;
               document.getElementById('agentmobile').value = response.data.mobile_number;
           });
        },
        //get agent location
        getAgentLocation(){
           axios.get('/agentlocation/' + this.form.agent)
           .then((response)=>{
               this.agentlocation = response.data.name;
               document.getElementById('agentlocation').value = response.data.name;
           });
        },
        //get agent list
        getAgentList(){
           axios.get('/agentlist')
           .then((response)=>{
               this.agentlist = response.data;
           });
        },
        getbankList(){
          axios.get('/getbanklist')
          .then((response)=>{
              this.banklists = response.data;
              //console.log(response);
          })
        }
    },
    mounted(){
        //this.getbankList();
        this.getAgentList();
        this.getMobileWalletTemplates();
        this.getCashPickUpTemplates();
    }
}
</script>