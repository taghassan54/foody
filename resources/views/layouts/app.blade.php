
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>FOOD  &mdash; TRUCKS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="/user/css/bootstrap.css">
    <link rel="stylesheet" href="/user/css/animate.css">
    <link rel="stylesheet" href="/user/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/user/css/aos.css">

    <link rel="stylesheet" href="/user/css/magnific-popup.css">


    <link rel="stylesheet" href="/user/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/user/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/user/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="/user/css/style.css">
  </head>
  <body>
@yield('css')
    {{--  header section  --}}
    @include('layouts.components.header')



@yield('content')


    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>

    <script src="/user/js/jquery-3.2.1.min.js"></script>
    <script src="/user/js/popper.min.js"></script>
    <script src="/user/js/bootstrap.min.js"></script>
    <script src="/user/js/owl.carousel.min.js"></script>
    <script src="/user/js/jquery.waypoints.min.js"></script>
    <script src="/user/js/aos.js"></script>

    <script src="/user/js/jquery.magnific-popup.min.js"></script>
    <script src="/user/js/magnific-popup-options.js"></script>


    <script src="/user/js/main.js"></script>
@yield('js')
  </body>
</html>
