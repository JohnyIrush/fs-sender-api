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
        <div class="row-justify-content-center">
            <div class="col-md-12">
                <h1>Review Your Order</h1>
                <p>By reviewing you agree with Zipcoinremit's <a href="#" >privacy notice</a> and <a href="#">Terms os Use</a> </p>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-md-9">
                 <div class="row">
                     <div class="col-md-12 white-box  card">
                         <div class="row-justify-content-between">
                             <div class="col-md-4">
                              <ul class="nav flex-column">
                                <li class="nav-item">
                                  <h4>Shipping Address </h4>
                                </li>
                                <li class="nav-item">
                                  <p>cathrine chivhima <br>
                                    166 Kincora Health NW <br>
                                    calgary, AB T3ROCG <br>
                                    Canada <br>
                                    Phone: 847565883635 <br>
                                  </p>
                                </li>
                                <li class="text-left">
                                  <a class="text-left" href="#">Add Delivery Instructions</a>
                                  <a class="text-left" href="#">Add Delivery Instructions</a>
                                </li>
                                <li class="nav-item">
                                  <p class="text-color-yellowlight"> Or Choose  Pickup Locaton <br> 20 locations near this address. <a href="#">Choose</a> </p>
                                </li>
                              </ul>
                             </div>
                             <div class="col-md-3">
                              <ul class="nav flex-column">
                                <li class="nav-item">
                                    <h5>Payment Method Change <i class="fa fa-credit-card txt-color-darkblue" aria-hidden="true"></i> ending 5657 </h5>
                                    
                                </li>
                                <br>
                                <li class="nav-item">
                                    <h5>Billing Adress <a href="#">Change</a>   </h5>
                                    <p>cathrine chivhima <br>
                                        166 Kincora Health NW <br>
                                        calgary, AB T3ROCG <br>
                                        Canada <br>
                                        Phone: 847565883635 <br>
                                      </p>
                                </li>
                              </ul>
                             </div>
                             <div class="col-md-5">
                                  
                                  <ul class="list-inline text-right">
                                    <li>
                                        <input type="text" name="" id="" class="form-control">
                                    </li>
                                    <li>
                                        <button class="btn bg-color-yellowlight">Apply</button>
                                    </li>
                                </ul>
                                
                             </div>
                         </div>
                     </div>
                 </div>
                 
                 <div class="row">
                    <div class="col-md-12 white-box  card"></div>
                 </div>
            </div>
            <div class="col-md-3   card">
             <div class="row">
                 <div class="col-md-1"></div>
                 <div class="col-md-11 card white-box">
                    <ul class="nav flex-column">
                        <li class="nav-item text-center">
                          <button class="btn bg-color-yellowlight text-center pl-2 pr-2">Place Your Order</button>
                        </li>
                        <br>
                        <li class="nav-item text-center">
                          <h5 class="nav-link" href="#">Order Summary</h5>
                        </li>
                        <li class="nav-item">
                            <div class="d-flex flex-column mb-3 pb-3 border-bottom">
                                <div class="row d-flex justify-content-between">
                                    <div  class=" col-md-6 key ">Items (8)</div>
                                    <div  class=" col-md-6 value ">CDNS 1241</div>
                                </div>
                                <div class="row d-flex justify-content-between">
                                    <div class="col-md-6 key">Shipping & Handling</div>
                                    <div class="col-md-6 value"> CDNS 204 </div>
                                </div>
                                <div class="row d-flex justify-content-between">
                                    <div class="col-md-6 key">Estimated Regulatory Fess:</div>
                                    <div class="col-md-6 value">CDNS 8.00</div>
                                </div>
                                <hr>
                            </div>
                            <div class="d-flex flex-column mb-3 pb-3 border-bottom">
                                <div class="row d-flex justify-content-between">
                                    <div  class=" col-md-6 key ">Total before tax: </div>
                                    <div  class=" col-md-6 value ">CDNS 1,432.35</div>
                                </div>
                                <div class="row d-flex justify-content-between">
                                    <div class="col-md-6 key">Estimated GST/HST: </div>
                                    <div class="col-md-6 value"> CDNS 71.64 </div>
                                </div>
                                <div class="row d-flex justify-content-between">
                                    <div class="col-md-6 key">Estimated PST/RST/QST:</div>
                                    <div class="col-md-6 value">CDNS 0.00</div>
                                </div>
                                <hr>
                            </div>
                            <div class="d-flex flex-column mb-3 pb-3 border-bottom">
                                <div class="row d-flex justify-content-between">
                                    <div  class=" col-md-6 key ">
                                       <h3>Order Total:</h3> 
                                     </div>
                                    <div  class=" col-md-6 value ">
                                      <h3>CDNS 1,503.99</h3>  
                                    </div>
                                </div>
                            </div>
                        </li>
                      </ul>
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

