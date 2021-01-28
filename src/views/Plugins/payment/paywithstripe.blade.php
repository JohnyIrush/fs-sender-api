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
        <div class="col-md-12 white-box text-center  card">
            <div class="row white-box">
                <div class="col-md-3"></div>
              <div class="col-md-6 card bg-color-yellowlight">
               <!--Stripe Payment Form-->
               <form action="{{route('stripe')}}" method="post" id="payment-form">

                @csrf
                 <div class="row justify-content-center">
                  <!--Card Details-->
                  <div class="form-group col-md-12">
                      <label for="city">Card Details</label>
                         <div id="card-element"></div>
                           <div id="card-errors" role="alert"></div>
                  </div>
                 </div>
                 <div class="row justify-content-center">
                    <!--Submit-->
                    <div class="form-group col-md-12">
                        <input type="submit" class="btn btn-lg submit text-color-darkblue text-color-white" value="Pay Now({{Session::get('cart')->totalPrice}})"> 
                    </div>
                   </div>
              </div>
              <div class="col-md-3"></div>
            </div>
        </div>

      @include('sendfood::Themes.partials.footer')
@endsection

@section('footer')

@stop

@section('page_css')

@endsection

