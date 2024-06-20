<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Sub-Admin</title>

    @include('subadmin.css')

</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('subadmin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('subadmin.navbar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">


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
