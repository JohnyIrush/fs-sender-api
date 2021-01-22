@extends('sendfood::layouts.dashboard')
@section('content')
        <!-- Page Content -->
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
                <!--row -->
                @include('sendfood::Themes.partials.cartbarner')
              @foreach($hampers as $data) 
                <div class="col-md-12 white-box text-center card">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="text-center">
                                <h3 class="box-title">{{$data->name}}</h3>
                            </ul>
                            <div class="text-left">
                              <p class="box-title">{{$data->comment}}</p>
                          </div>
                        </div>
                    </div>
                    <div class="row white-box text-center">
                        <div class="col-md-2 white-box text-center">
                          <hamperimages :hamperid="{{ $data->id }}" ></hamperimages>
                        </div>
                        <div class="col-md-7">
                         <hamperitems :hamperid="{{ $data->id }}" ></hamperitems>
                        </div>
                        <div class="col-md-3">
                             <div class="row">
                                <table class="table">
                                    <tbody>
                                      <tr>
                                        <td>Actual price: </td>
                                        <td>{{$data->price}}</td>
                                      </tr>
                                      <tr>
                                        <td>Discount: </td>
                                        <td>{{$data->discount}}</td>
                                      </tr>
                                      <tr>
                                        <td>Total Price: </td>
                                        <td>{{$data->price}}</td>
                                      </tr>
                                    </tbody>
                                  </table>
                             </div>
                             <div class="row">
                                @include('sendfood::Themes.partials.purchasebuttons')
                             </div>
                        </div>
                    </div>
                </div>
              @endforeach

            </div>
            <!-- /.container-fluid -->
            @include('sendfood::Themes.partials.footer')
        <!-- /#page-wrapper -->
@endsection