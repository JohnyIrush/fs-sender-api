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
               <!--Interac online Payment Form-->
               <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default credit-card-box">
                        <div class="panel-heading display-table" >
                            <div class="row display-tr" >
                                <h3 class="panel-title display-td txt-color-darkblue" >  Pay With INTERAC® Online </h3>
                            </div>                    
                        </div>
                        <div class="panel-body">
          
                            @if (Session::has('success'))
                                <div class="alert alert-success text-center">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <p>{{ Session::get('success') }}</p>
                                </div>
                            @endif
                          <!--
                            <form 
                                    role="form" 
                                    action="{{ route('interaconline') }}" 
                                    method="post" 
                                    class="require-validation"
                                    data-cc-on-file="false"
                                    id="payment-form">
                                @csrf
          
                                <div class='form-row row'>
                                    <div class='col-xs-12 form-group required'>
                                        <label class='control-label'>Name on Card</label> <input
                                            class='form-control' size='4' type='text'>
                                    </div>
                                </div>
          
                                <div class='form-row row'>
                                    <div class='col-xs-12 form-group card required'>
                                        <label class='control-label'>Card Number</label> <input
                                            autocomplete='off' class='form-control card-number' size='20'
                                            type='text'>
                                    </div>
                                </div>
          
                                <div class='form-row row'>
                                    <div class='col-xs-12 col-md-4 form-group cvc required'>
                                        <label class='control-label'>CVC</label> <input autocomplete='off'
                                            class='form-control card-cvc' placeholder='ex. 311' size='4'
                                            type='text'>
                                    </div>
                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                        <label class='control-label'>Expiration Month</label> <input
                                            class='form-control card-expiry-month' placeholder='MM' size='2'
                                            type='text'>
                                    </div>
                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                        <label class='control-label'>Expiration Year</label> <input
                                            class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                            type='text'>
                                    </div>
                                </div>
          
                                <div class='form-row row'>
                                    <div class='col-md-12 error form-group hide'>
                                        <div class='alert-danger alert'>Please correct the errors and try
                                            again.</div>
                                    </div>
                                </div>
          
                                <div class="row">
                                    <div class="col-xs-12">
                                        <button class="btn text-color-darkblue text-color-white btn-lg btn-block" type="submit">Pay Now ({{Session::get('cart')->totalPrice}})</button>
                                    </div>
                                </div>
                                  
                            </form>
                        -->
                        <div id="monerisCheckout"></div>
                        </div>
                    </div>        
                </div>
            </div>
              
        </div>
               <!--Interac online Payment Form-->
              </div>
            </div>
        </div>
      @include('sendfood::Themes.partials.footer')
@endsection


<script>
  

</script>

@section('footer')

@stop

@section('page_css')

@endsection

