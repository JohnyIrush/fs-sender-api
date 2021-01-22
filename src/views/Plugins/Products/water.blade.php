@extends('sendfood::layouts.dashboard')
              @section('content')
                      <!-- Page Content -->
                      <div class="container-fluid">
                        <div class="row bg-title">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a
                                    href="http://wrappixel.com/templates/pixeladmin/" target="_blank"
                                    class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade
                                    to Pro</a>
                                <ol class="breadcrumb">
                                    <li><a href="#">Dashboard</a></li>
                                </ol>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        @include('sendfood::Themes.partials.cartbarner')
                        <div class="col-md-12 white-box text-center card">
                            <div class="row white-box text-center">
                                @if(sizeof($water)>0)
                                      @foreach($water as $data)
                                       <div id="" class="card col-md-4 mb-1 mt-1  text-center">
                                          <div class="card-header">
                                            <p class="text-dark"> {{$data->type}} </p>
                                          </div>
                                          <div class="card-body">
                                            <div class="card-text">
                                              <img src="{{$data->image}} " class="img-fluid img-thumbnail" alt="products">
                                            </div>
                                           <div>
                                             <div class="card-text">
                                              <h3 class="price text-dark"> <sup> <i class="fas fa-dollar-sign    "></i> </sup> {{$data->price}} </h3>
                                             </div>
                                             <div class="card-text">
                                              <h3 class="price text-dark"> <sup> <i class="fas fa-dollar-sign    "></i> </sup> {{$data->comment}} </h3>
                                             </div>                                      
                                           </div>
                                          </div>
                                          <div class="card-footer">
                                          <div class="col-sm-12 mt-1 mb-1">
                                            @include('sendfood::Themes.partials.purchasebuttons')
                                          </div>
                                          </div>
                                       </div>
                                      @endforeach
                                @endif
                                @if (sizeof($water)==0)
                                <div class="col-xs-12  col-sm-12 col-md-12">
                                  <div class="card Theme text-center">
                                      <div class="card-body">
                                          <div class="card-title Theme text-danger heading-style display-3">Product not found</div>
                                          <div class="card-text Theme text-info text-center display-4">The Product You Were looking for is not in our stock currently</div>
                                      </div>
                                  </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                    @include('sendfood::Themes.partials.footer')
                <!-- /#page-wrapper -->
              @endsection
