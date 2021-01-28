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
               <!--Zipwallet Payment Form-->
               <div class="container">
  
                <h1 class="txt-color-darkblue">Pay With Zipwallet</h1>
              
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default credit-card-box">
                            <div class="panel-body">
              
                                @if (Session::has('success'))
                                    <div class="alert alert-success text-center">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                        <p>{{ Session::get('success') }}</p>
                                    </div>
                                @endif
                                    <div class='form-row row'>
                                        <form method="POST" action="https://zipwalletpay.com/sci/form" target="_blank">
                                        <input type="hidden" name="merchant" value="merchantid">
                                        <input type="hidden" name="item_name" value="<?php echo 'SendFood';?>">
                                        <input type="hidden" name="amount" value="{{Session::get('cart')->totalPrice}}">
                                        <input type="hidden" name="itemnumber" value="{{Session::get('cart')->totalQty}}">
                                        <input type="hidden" name="currency" value="debit_base">
                                        <input type="hidden" name="cancel_return" value="<?php echo 'test';?>/cancel">
                                        <input type="hidden" name="success_url" value="{{route('zipwallet')}}">
                                        <input type="hidden" name="custom" value="<?php echo 1;?>">
                                        <button type="submit" class="btn btn-lg text-color-white bg-color-yellowlight"> Pay Now({{Session::get('cart')->totalPrice}}) </button>
                                    </form>
                                    </div>
                            </div>
                        </div>        
                    </div>
                </div>
                  
            </div>
               <!--Zipwallet Payment Form-->
              </div>
            </div>
        </div>
      @include('sendfood::Themes.partials.footer')
@endsection

@section('footer')

@stop

@section('page_css')

@endsection

