<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Green Source</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">
      <!-- all css here -->
      <!-- bootstrap v3.3.6 css -->
      <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
      
      <!-- owl.carousel css -->
      <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.css') }}">
      <link rel="stylesheet" href="{{ asset('front/css/owl.transitions.css') }}">
      <!-- Animate css -->
      <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
      <!-- meanmenu css -->
      <link rel="stylesheet" href="{{ asset('front/css/meanmenu.min.css') }}">
      <!-- font-awesome css -->
      <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('front/css/icon.css') }}">
      <link rel="stylesheet" href="{{ asset('front/css/flaticon.css') }}">
      <!-- venobox css -->
      <link rel="stylesheet" href="{{ asset('front/css/venobox.css') }}">
      <!-- venobox css -->
      <link rel="stylesheet" href="{{ asset('front/css/venobox.css') }}">
      <!-- magnific css -->
      <link rel="stylesheet" href="{{ asset('front/css/magnific.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('front/style.css') }}">
      <!-- responsive css -->
      <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
      <!-- modernizr css -->
      <script src="js/vendor/modernizr-2.8.3.min.js"></script>
   </head>
   <body>
   
@include('FrontEnd.body.header')
@yield('FrontEnd') 
     
      
      @include('FrontEnd.body.footer')

      <!-- all js here -->
      <!-- jquery latest version -->
      <script src="{{ asset('front/js/vendor/jquery-1.12.4.min.js') }}"></script>
      <!-- bootstrap js -->
      <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
      <!-- owl.carousel js -->
      <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
      <!-- venobox js -->
      <script src="{{ asset('front/js/venobox.min.js') }}"></script>
      <!-- magnific js -->
      <script src="{{ asset('front/js/magnific.min.js') }}"></script>
      <!-- wow js -->
      <script src="{{ asset('front/js/wow.min.js') }}"></script>
      <!-- meanmenu js -->
      <script src="{{ asset('front/js/jquery.meanmenu.js') }}"></script>
      <!-- Form validator js -->
      <script src="{{ asset('front/js/form-validator.min.js') }}"></script>
      <!-- plugins js -->
      <script src="{{ asset('front/js/plugins.js') }}"></script>
      <!-- main js -->
      <script src="{{ asset('front/js/main.js') }}"></script>
   </body>
</html>
