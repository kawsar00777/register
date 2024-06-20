<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona User</title>

    @include('user.css')

</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('user.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('user.navbar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">


                    <div class="main-panel">
                        <div class="content-wrapper">
                          <div class="row">
                            <div class="col-12 grid-margin stretch-card">

                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                              <div class="card">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-9">
                                      <div class="d-flex align-items-center align-self-start">
                                        {{-- <h3 class="mb-0">{{$total_product}}</h3> --}}

                                      </div>
                                    </div>
                                    <div class="col-3">
                                      <div class="icon icon-box-success ">
                                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                                      </div>
                                    </div>
                                  </div>
                                  <h6 class="text-muted font-weight-normal">Total Products</h6>
                                </div>
                              </div>
                            </div>




                            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                              <div class="card">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-9">
                                      <div class="d-flex align-items-center align-self-start">
                                        {{-- <h3 class="mb-0">{{$total_order}}</h3> --}}

                                      </div>
                                    </div>
                                    <div class="col-3">
                                      <div class="icon icon-box-success">
                                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                                      </div>
                                    </div>
                                  </div>
                                  <h6 class="text-muted font-weight-normal">Total Orders</h6>
                                </div>
                              </div>
                            </div>




                            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                              <div class="card">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-9">
                                      <div class="d-flex align-items-center align-self-start">
                                        {{-- <h3 class="mb-0">{{$total_user}}</h3> --}}

                                      </div>
                                    </div>
                                    <div class="col-3">
                                      <div class="icon icon-box-danger">
                                        <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                                      </div>
                                    </div>
                                  </div>
                                  <h6 class="text-muted font-weight-normal">Total Customer</h6>
                                </div>
                              </div>
                            </div>




                            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                              <div class="card">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-9">
                                      <div class="d-flex align-items-center align-self-start">
                                        {{-- <h3 class="mb-0">${{$total_revenue}}</h3> --}}

                                      </div>
                                    </div>
                                    <div class="col-3">
                                      <div class="icon icon-box-success ">
                                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                                      </div>
                                    </div>
                                  </div>
                                  <h6 class="text-muted font-weight-normal">Total Revenue</h6>
                                </div>
                              </div>
                            </div>




                            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                              <div class="card">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-9">
                                      <div class="d-flex align-items-center align-self-start">
                                        {{-- <h3 class="mb-0">{{$total_delivered}}</h3> --}}

                                      </div>
                                    </div>
                                    <div class="col-3">
                                      <div class="icon icon-box-success ">
                                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                                      </div>
                                    </div>
                                  </div>
                                  <h6 class="text-muted font-weight-normal">Order Deliverd</h6>
                                </div>
                              </div>
                            </div>




                            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                              <div class="card">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-9">
                                      <div class="d-flex align-items-center align-self-start">
                                        {{-- <h3 class="mb-0">{{$total_processing}}</h3> --}}

                                      </div>
                                    </div>
                                    <div class="col-3">
                                      <div class="icon icon-box-success ">
                                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                                      </div>
                                    </div>
                                  </div>
                                  <h6 class="text-muted font-weight-normal">Order Processing</h6>
                                </div>
                              </div>
                            </div>





                          </div>
                        </div>
                        <!-- content-wrapper ends -->
                        <!-- partial:partials/_footer.html -->
                        <footer class="footer">
                          <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © KAWSAR HOSIN 2023</span>

                          </div>
                        </footer>
                        <!-- partial -->
                      </div>

                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->

                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->


    <script src="{{ asset('admincss/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('admincss/assets/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('admincss/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('admincss/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('admincss/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('admincss/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('admincss/assets/js/jquery.cookie.js" type="text/javascript') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('admincss/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admincss/assets/js/misc.js') }}"></script>
    <script src="{{ asset('admincss/assets/js/settings.js') }}"></script>
    <script src="{{ asset('admincss/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('admincss/assets/js/proBanner.js') }}"></script>
    <script src="{{ asset('admincss/assets/js/dashboard.js') }}"></script>

    <!-- End custom js for this page -->
</body>

</html>
