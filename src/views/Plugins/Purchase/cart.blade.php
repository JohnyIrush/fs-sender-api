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
                      <div class="col-md-12 white-box text-center card">
                          @foreach ($cart as $cartproducts)
                          @foreach ($cartproducts as $cartproduct)
                           <div class="row white-box text-center justify-content-center card">
                               <div class="col-md-4">
                                 <img src="image" class="img-fluid cart-image-size" alt="" srcset=""> 
                               </div>
                               <div class="col-md-4 ">
                                   <div class="row mt-2">
                                    <div class="col-md-12 mt-2">
                                      <h5 class="heading-color" > {{$cartproduct->name}} </h5> 
                                    </div>
                                   </div>
                                   <div class="row mt-4">
                                    <div class="col-md-12 mt-2">
                                      <select id="inputState" class="form-control">
                                          <option selected>Choose...</option>
                                          <option>...</option>
                                        </select>
                                    </div>
                                   </div>
                                   <div class="row mt-2">
                                    <div class="col-md-12 mt-2">
                                      <button type="button" class="btn bg-color-yellowlight btn-lg text-color-white"> <i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                    </div>
                                   </div>
                                  </div>                                
                                  <div class="col-md-3">
                                    <div class="row content-justify-center">
                                      <div  class="col-md-12 m-0 cart-qty-height shadow-sm   mb-5 rounded">
                                        <ul class="nav flex-column">
                                          <li class="nav-item">
                                              <p class=""> <sup> <i class="fas fa-dollar-sign    "></i> </sup> {{$cartproducts->price}} CAD </p>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                              @endforeach
                              @endforeach
                           </div>
                    </div>
                    <!-- /.container-fluid -->
                    @include('sendfood::Themes.partials.footer')
                <!-- /#page-wrapper -->
              @endsection
