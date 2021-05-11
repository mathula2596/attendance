<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <link rel="icon" type="image/x-icon" href="favicon.ico">
   <title>Angle - Bootstrap Admin Template</title>
   <!-- =============== VENDOR STYLES ===============-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="{{ asset('admin/vendor/fontawesome/fontawesome-free-webfonts/css/fa-brands.css') }}">
   <link rel="stylesheet" href="{{ asset('admin/vendor/fontawesome/fontawesome-free-webfonts/css/fa-regular.css') }}">
   <link rel="stylesheet" href="{{ asset('admin/vendor/fontawesome/fontawesome-free-webfonts/css/fa-solid.css') }}">
   <link rel="stylesheet" href="{{ asset('admin/vendor/fontawesome/fontawesome-free-webfonts/css/fontawesome.css') }}">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="{{ asset('admin/vendor/simple-line-icons/css/simple-line-icons.css') }}">
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.css') }}" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}" id="maincss">
</head>

<body>
   <div class="wrapper">
      @yield('content')
   </div>
   <!-- =============== VENDOR SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <script src="{{ asset('admin/vendor/modernizr/modernizr.custom.js') }}"></script>
   <!-- JQUERY-->
   <script src="{{ asset('admin/vendor/jquery/dist/jquery.js') }}"></script>
   <!-- BOOTSTRAP-->
   <script src="{{ asset('admin/vendor/bootstrap/dist/js/bootstrap.js') }}"></script>
   <!-- STORAGE API-->
   <script src="{{ asset('admin/vendor/js-storage/js.storage.js') }}"></script>
   <!-- PARSLEY-->
   <script src="{{ asset('admin/vendor/parsleyjs/dist/parsley.js') }}"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="{{ asset('admin/js/app.js') }}"></script>
</body>


</html>