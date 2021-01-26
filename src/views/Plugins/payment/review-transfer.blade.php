@extends('sendfood::layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row bg-title">
                 <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                     <h4 class="page-title">Dashboard</h4>
                 </div>
                 <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                     <ol class="breadcrumb">
                         <li><a href="#">Dashboard</a></li>
                     </ol>
                 </div>
                 <!-- /.col-lg-12 -->
        </div>
        @include('sendfood::Themes.partials.messages')
        <div class="col-md-12 white-box  card">
            <div class="row white-box">
              <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 text-center">Review Your Transfer Details</div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-12 text-left">
                                <h1>Payment method</h1>
                            </div>
                        </div>
                        <div class="row">
                            <paymentmethods></paymentmethods>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="mt-2 d-flex w-50 flex-column col-12 col-sm-6 col-md-8 col-lg-8 ">
                            <div class="d-flex flex-column mb-3 pb-3 border-bottom">
                                <h1>Transfer Details</h1>
                                <div class="row d-flex justify-content-between">
                                    <div  class=" col-md-6 key ">Cart total</div>
                                    <div  class=" col-md-6 value ">  {{Session::get('cart')->totalPrice}} </div>
                                </div>
                                <div class="row d-flex justify-content-between">
                                    <div class="col-md-6 key">Total items</div>
                                    <div class="col-md-6 value"> {{Session::get('cart')->totalQty}} </div>
                                </div>
                                <div class="row d-flex justify-content-between">
                                    <div class="col-md-6 key">Delivery fee</div>
                                    <div class="col-md-6 value">CAD0</div>
                                </div>
                                <div class="row d-flex justify-content-between">
                                    <div class="col-md-6 key">Processing fee</div>
                                    <div class="col-md-6 value">CAD1</div>
                                </div><div class="row d-flex justify-content-between">
                                    <div  class="col-md-6 key">Payment method: </div>
                                    <div class="col-md-6 value" id="selectedmethod"></div>
                                </div>
                                <div class="row d-flex justify-content-between">
                                    <div class="col-md-6 key  ">Total payable</div>
                                    <div class="col-md-6 value ">{{Session::get('cart')->totalPrice}}</div>
                                </div>
                            </div>
                            <hr class="mt-3">
                            <div class="mt-2 d-flex w-100 flex-column ">
                                    <div class="d-flex flex-column w-100 ">
                                        <h5>Beneficiary details</h5>
                                        <div class="row d-flex justify-content-between">
                                            <span class="col-md-6 key  ">Beneficiary name</span>
                                            <span class="col-md-6 value "> {{$beneficiary->name}} </span>
                                        </div> 
                                        <div class="row d-flex justify-content-between">
                                            <span class="col-md-6 key  ">Beneficiary email address</span>
                                            <span class="col-md-6 value ">{{$beneficiary->email}}</span>
                                        </div> 
                                        <div class="row d-flex justify-content-between">
                                            <span class="col-md-6 key  ">Beneficiary address</span>
                                            <span class="col-md-6 value ">{{$beneficiary->city}}, {{$beneficiary->state}}, {{$beneficiary->country}}</span>
                                        </div>
                                        <div class="row d-flex justify-content-between">
                                            <span class="col-md-6 key  ">Beneficiary phone number</span>
                                            <span class="col-md-6 value "> {{$beneficiary->phone}} </span>
                                        </div>
                                        <hr>
                                        <div class="row d-flex justify-content-between">
                                            <span class="col-md-12 key  ">Beneficiary receive through phone</span>
                                            <div class="row d-flex justify-content-between">
                                                <span class="col-md-8 key  "></span>
                                                <span class="col-md-4 value text-left "> {{$beneficiary->phone}} </span>
                                            </div> 
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-3 text-dark">
                     <!--
                      <div class="row justify-content-end">
                          <div class="col-md-6 text-left"></div>
                          <div class="col-md-6 text-right"></div>
                      </div>
                      <div class="row justify-content-end">
                        <div class="col-md-6 text-left"></div>
                        <div class="col-md-6 text-right"></div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-md-6 text-left"></div>
                        <div class="col-md-6 text-right"></div>
                    </div>
                    </div>-->
                </div>
              </div>
              <div class="row">
                <hr>
                  <div class="col-md-12">
                    <ul class="list-inline text-right">
                        <li>
                         <button class="btn ml-5 text-color-darkblue  text-color-white"> CANCEL </button> 
                        </li>
                        <li>
                            <a href="/beneficiary" class="btn ml-5 bg-color-darklight  text-color-white"> PREVIOUS </a>
                        </li>
                        <li>
                            <a href="/revieworder" class="btn ml-5 bg-color-yellowlight  text-color-white"> CONTINUE </a>
                        </li>
                    </ul>
                    
                  </div>
              </div>
            </div>
        </div>
      </div>
      @include('sendfood::Themes.beneficiary.partials.beneficiarymodal')
      @include('sendfood::Themes.beneficiary.partials.receivingmethodsmodal')
      @include('sendfood::Themes.partials.footer')
@endsection

@section('footer')

@stop

@section('page_css')
    <style>
        .transaction-title {
            background-color: #f1f5f6;
            border-top: 1px solid #e9eff0;
            border-bottom: 1px solid #e9eff0;
        }
        .transaction-title {
            background-color: #dba84e;
            border-top: 1px solid #dba84e;
            border-bottom: 1px solid #dba84e;
            color: #fff;
            font-weight: bolder;
        }
        .text-5 {
            font-size: 22px !important;
            font-size: 1.375rem !important;
        }
        .transaction-item {
            border-bottom: 1px solid #e9eff0;
        }
        .action-icon{
            font-size: 30px;
            line-height: 0;
        }
        .action-icon .icofont {
            line-height: 0;
        }
        .primaryStyle{
            border-color:#dba84e !important;
            color: #303549;
            font-weight: 700;
            padding-top: 6px;
            padding-bottom: 5px;
        }
        .btn.primaryStyle:hover{
            background-color:#dba84e !important;
            color: #fff;font-weight: 700;
        }
    </style>
@endsection

