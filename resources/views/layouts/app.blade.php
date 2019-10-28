<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from uxcandy.co/demo/label_pro/preview/demo_2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Oct 2019 22:45:59 GMT -->
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1,shrink-to-fit=no"
    />
    <title>
      Label - Premium Responsive Bootstrap 4 Admin & Dashboard Template
    </title>
    <!-- plugins:css -->
   <!--  <link
      rel="stylesheet"
      href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.css"
    /> -->

       <link
      rel="stylesheet"
      href=" {{ asset('plantilla/assets/vendors/iconfonts/mdi/css/materialdesignicons.css')}}"
    />
    <link
      rel="stylesheet"
      href=" {{ asset('plantilla/assets/vendors/css/vendor.addons.css')}}"
    />

    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.5.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.3/css/flag-icon.min.css">

   <link href="{{ asset('plantilla/assets/css/demo_2/style.css') }}" rel="stylesheet">
    <!-- Layout style -->
    <link
      rel="shortcut icon"
      href="https://uxcandy.co/demo/label_pro/preview/asssets/images/favicon.ico"
    />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
  </head>
  <body class="header-fixed dark-theme">
  <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

  <!-- partial:partials/_header.html -->
    <nav class="t-header">
          @include('layouts.partials.navegacion-horizontal')
    </nav>
    <!-- partial -->
    <div class="page-body">
      <!-- partial:partials/_sidebar.html -->
      @include('layouts.partials.navegacion-vertical')
      <!-- partial -->
      <div class="page-content-wrapper">

        @yield('contenido')
        <!-- content viewport ends --><!-- partial:partials/_footer.html -->
        @include('layouts.partials.footer')
        <!-- partial -->
      </div>
      <!-- page content ends -->
    </div>
    <!--page body ends --><!-- SCRIPT LOADING START FORM HERE /////////////--><!-- plugins:js -->

    <script src="{{ asset('plantilla/assets/vendors/js/core.js') }}"></script>
    <script src="{{ asset('plantilla/assets/vendors/js/vendor.addons.js') }}"></script >
    <script src="{{ asset('plantilla/assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ asset('plantilla/assets/vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{ asset('plantilla/assets/js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>







  </body>
  <!-- Mirrored from uxcandy.co/demo/label_pro/preview/demo_2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Oct 2019 22:46:19 GMT -->
</html>
