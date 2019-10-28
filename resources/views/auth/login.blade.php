<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from uxcandy.co/demo/label_pro/preview/demo_2/pages/sample-pages/login_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Oct 2019 22:46:22 GMT -->
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
    <link
      rel="stylesheet"
      href=" {{ asset('plantilla/assets/vendors/iconfonts/mdi/css/materialdesignicons.css')}}""
    />
    <link
      rel="stylesheet"
      href=" {{ asset('plantilla/assets/vendors/css/vendor.addons.css')}}""
    />

    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.5.95/css/materialdesignicons.min.css">
   <link href="{{ asset('plantilla/assets/css/demo_2/style.css') }}" rel="stylesheet">
    <!-- Layout style -->
    <link
      rel="shortcut icon"
      href="https://uxcandy.co/demo/label_pro/preview/assets/images/favicon.ico"
    />
  </head>
  <body class="dark-theme">
    <div class="authentication-theme auth-style_3">
      <div class="row inner-wrapper">
        <div class="col-md-5 mx-auto form-section">
          <div class="logo-section">
            <a href="../../index.html" class="logo"
              ><img
                src="https://uxcandy.co/demo/label_pro/preview/assets/images/logo.svg"
                alt="logo"
            /></a>
          </div>
          <form action="#">
            <div class="form-group input-rounded">
              <input type="text" class="form-control" placeholder="Username" />
            </div>
            <div class="form-group input-rounded">
              <input
                type="password"
                class="form-control"
                placeholder="Password"
              />
            </div>
            <div class="form-group">
                    <a
                    href="{{ route('social_auth', ['driver' => 'graph']) }}"
                    class="btn btn-rounded social-btn btn-behance"
                    >
                     <i class="mdi mdi-office"></i>

                     <span >{{ __("OFFICE 365") }}</span>
                </a>
                    <div class="btn btn-rounded social-btn btn-facebook"><i class="mdi mdi-facebook"></i>Facebook</div>
            </div>
            <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                            Login
                          </button>
            </div>
          </form>
        </div>
      </div>
    </div>
<!--page body ends --><!-- SCRIPT LOADING START FORM HERE /////////////--><!-- plugins:js --><script src="{{asset('plantilla/vendors/js/core.js') }}"></script>
  </body>
  <!-- Mirrored from uxcandy.co/demo/label_pro/preview/demo_2/pages/sample-pages/login_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Oct 2019 22:46:22 GMT -->
</html>
