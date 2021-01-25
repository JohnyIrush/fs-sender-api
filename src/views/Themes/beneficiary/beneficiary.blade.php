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
     <div class="col-md-12 white-box  card">
         <div class="row white-box">
          <div class="col-md-12">
            <div class="row justify-content-center">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                          <label for="selectbeneficiary" class="text-center">Select Beneficiary</label>
                          <select class="form-control" id="selectbeneficiary">
                          @foreach($beneficiaries as $beneficiary)
                            <option> {{$beneficiary->name}} </option>
                          @endforeach
                          </select>
                        </div>
                     </form>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 display-3 text-center">
                   <h1 class=" text-color-yellowlight">Or</h1> 
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3"></div>
                <div class="col-md-6 text-center">
                    <button class="btn-lg bg-color-yellowlight text-color-white"  data-toggle="modal" data-target="#beneficiarymodal">ADD A NEW BENEFICIARY</button>
                </div>
                <div class="col-md-3"></div>
            </div>
          </div>
         </div>
     </div>
     <div class="row justify-content-end">
        <div class="col-md-4">
            
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
           <a href="/reviewtransfer" class="btn bg-color-yellowlight text-color-white ">NEXT</a>
        </div>
    </div>
   </div>
 @include('sendfood::Themes.beneficiary.partials.beneficiarymodal')
 @include('sendfood::Themes.beneficiary.partials.receivingmethodsmodal')
 @include('sendfood::Themes.partials.footer')
@endsection
