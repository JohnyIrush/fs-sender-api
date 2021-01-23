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
                        </div>
                        <!--row -->
                        @include('sendfood::Themes.partials.checkoutbanner')
                          <cart></cart>
                    </div>
                    <!-- /.container-fluid -->
                    @include('sendfood::Themes.partials.footer')
                <!-- /#page-wrapper -->
              @endsection
