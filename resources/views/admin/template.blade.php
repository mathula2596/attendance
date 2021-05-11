<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin App + jQuery">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Myadmin - @yield('title','Home')</title>
    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="{{ asset('admin/vendor/fontawesome/fontawesome-free-webfonts/css/fa-brands.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/fontawesome/fontawesome-free-webfonts/css/fa-regular.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/fontawesome/fontawesome-free-webfonts/css/fa-solid.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/fontawesome/fontawesome-free-webfonts/css/fontawesome.css') }}">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="{{ asset('admin/vendor/simple-line-icons/css/simple-line-icons.css') }}">
    <!-- ANIMATE.CSS-->
    <link rel="stylesheet" href="{{ asset('admin/vendor/animate.css/animate.css') }}">
    <!-- WHIRL (spinners)-->
    <link rel="stylesheet" href="{{ asset('admin/vendor/whirl/dist/whirl.css') }}">
    <!-- =============== PAGE VENDOR STYLES ===============-->
    <!-- WEATHER ICONS-->
    <link rel="stylesheet" href="{{ asset('admin/vendor/weather-icons/css/weather-icons.css') }}">
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.css') }}" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}" id="maincss">
  </head>

  <body>
    <div class="wrapper">
      <!-- top navbar-->
      <header class="topnavbar-wrapper">
        <!-- START Top Navbar-->
        @include(adminInc('top-nav'))
        <!-- END Top Navbar-->
      </header>
      <!-- sidebar-->
        @include(adminInc('navigation'))
      <!-- Main section-->
      <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
         @yield('content')
        </div>
      </section>
      
      <!-- Page footer-->
      <footer class="footer-container">
        <span>&copy; {{ date('Y') }} - Myadmin</span>
      </footer>
      
    </div>
    <!-- =============== VENDOR SCRIPTS ===============-->
    <!-- MODERNIZR-->
    <script src="{{ asset('admin/vendor/modernizr/modernizr.custom.js') }}"></script>
    <!-- JQUERY-->
    <script src="{{ asset('admin/vendor/jquery/dist/jquery.js') }}"></script>
    <!-- BOOTSTRAP-->
    <script src="{{ asset('admin/vendor/popper.js/dist/umd/popper.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/dist/js/bootstrap.js') }}"></script>
    <!-- STORAGE API-->
    <script src="{{ asset('admin/vendor/js-storage/js.storage.js') }}"></script>
    <!-- JQUERY EASING-->
    <script src="{{ asset('admin/vendor/jquery.easing/jquery.easing.js') }}"></script>
    <!-- ANIMO-->
    <script src="{{ asset('admin/vendor/animo/animo.js') }}"></script>
    <!-- SCREENFULL-->
    <script src="{{ asset('admin/vendor/screenfull/dist/screenfull.js') }}"></script>
    <!-- LOCALIZE-->
    <script src="{{ asset('admin/vendor/jquery-localize/dist/jquery.localize.js') }}"></script>
    <!-- =============== PAGE VENDOR SCRIPTS ===============-->
    <!-- SLIMSCROLL-->
    <script src="{{ asset('admin/vendor/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- SPARKLINE-->
    <script src="{{ asset('admin/vendor/jquery-sparkline/jquery.sparkline.js') }}"></script>
    <!-- FLOT CHART-->
    <script src="{{ asset('admin/vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.js') }}"></script>
    <script src="{{ asset('admin/vendor/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('admin/vendor/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('admin/vendor/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('admin/vendor/flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery.flot.spline/jquery.flot.spline.js') }}"></script>
    <!-- EASY PIE CHART-->
    <script src="{{ asset('admin/vendor/easy-pie-chart/dist/jquery.easypiechart.js') }}"></script>
    <!-- MOMENT JS-->
    <script src="{{ asset('admin/vendor/moment/min/moment-with-locales.js') }}"></script>
    <!-- =============== APP SCRIPTS ===============-->
    <script src="{{ asset('admin/js/app.js') }}"></script>
    @stack('script')
  </body>
</html>