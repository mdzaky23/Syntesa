<!DOCTYPE html>
<!--
Template Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/vuexy_admin
Renew Support: https://1.envato.market/vuexy_admin
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
  <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>Register Syntesa</title>
  <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
  <!-- END: Vendor CSS-->

  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/bordered-layout.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.min.css">

  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/form-validation.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/authentication.css">
  <!-- END: Page CSS-->

  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
  <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
  <!-- BEGIN: Content-->
  <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <div class="auth-wrapper auth-cover">
          <div class="auth-inner row m-0">
            <!-- Brand logo--><a class="brand-logo" href="/">
              <h2 class="brand-text text-primary ms-1">Sistem Kerja Terpadu</h2>
            </a>
            <!-- /Brand logo-->
            <!-- Left Text-->
            <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
              <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="../../../app-assets/images/pages/register-v2.svg" alt="Register V2" /></div>
            </div>
            <!-- /Left Text-->
            <!-- Register-->
            <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
              <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                <h2 class="card-title fbrand-text text-primary mb-1">Selamat Datang Di Syntesa 👋</h2>
                <p class="card-text mb-2">Silahkan Membuat Akun Terlebih Dahulu</p>
                <form class="auth-register-form mt-2" action="{{ route('register') }}" method="POST">
                  @csrf
                  <div class="mb-1">
                    <label class="form-label" for="register-username">Nama Lengkap</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="mb-1">
                    <label class="form-label" for="register-email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="mb-1">
                    <label class="form-label" for="register-password">Password</label>
                    <div class="input-group input-group-merge form-password-toggle">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                      @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                  <div class="mb-1">
                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>

                    <div class="col-md-12">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                  </div>
                  <div class="mb-1">
                  </div>
                  <button class="btn btn-primary w-100" tabindex="5">Daftar</button>
                </form>
                <p class="text-center mt-2"><span>Sudah Punya Akun?</span><a href="/login"><span>&nbsp;Login Disini</span></a></p>
              </div>
            </div>
            <!-- /Register-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END: Content-->


  <!-- BEGIN: Vendor JS-->
  <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
  <!-- BEGIN Vendor JS-->

  <!-- BEGIN: Page Vendor JS-->
  <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
  <!-- END: Page Vendor JS-->

  <!-- BEGIN: Theme JS-->
  <script src="../../../app-assets/js/core/app-menu.min.js"></script>
  <script src="../../../app-assets/js/core/app.min.js"></script>
  <!-- END: Theme JS-->

  <!-- BEGIN: Page JS-->
  <script src="../../../app-assets/js/scripts/pages/auth-register.min.js"></script>
  <!-- END: Page JS-->

  <script>
    $(window).on('load', function() {
      if (feather) {
        feather.replace({
          width: 14,
          height: 14
        });
      }
    })
  </script>
</body>
<!-- END: Body-->

</html>