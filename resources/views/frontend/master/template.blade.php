<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/simplebar.css') }}">
    <link rel="icon" href="assets/img/kwartaklik-fav.png">
    <title>Kwarta Klik | Home</title>
</head>
<body>
  <div class="page-loader">
    <div class="page-loader-decoration">
      <div class="page-loader-decoration">
        <img src="assets/img/kk-logo.png" alt="" style="width:80px;">
      </div>
    </div>
    <div class="page-loader-info">
      <p class="page-loader-info-title">Kwarta Klik</p>
      <p class="page-loader-info-text">Loading...</p>
    </div>
    <div class="page-loader-indicator loader-bars">
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
    </div>
  </div>

   @include('frontend/partials/navigation')
   @include('frontend/partials/chat')
   @include('frontend/partials/header')
   @yield('content')

<script src="{{ asset('assets/js/utils/app.js')}}"></script>
<script src="{{ asset('assets/js/utils/page-loader.js') }}"></script>
<script src="{{ asset('assets/js/vendor/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/utils/liquidify.js') }}"></script>
<script src="{{ asset('assets/js/vendor/xm_plugins.min.js') }}"></script>
<script src="{{ asset('assets/js/global/global.hexagons.js') }}"></script>
<script src="{{ asset('assets/js/global/global.tooltips.js') }}"></script>
<script src="{{ asset('assets/js/global/global.accordions.js') }}"></script>
<script src="{{ asset('assets/js/header/header.js') }}"></script>
<script src="{{ asset('assets/js/sidebar/sidebar.js') }}"></script>
<script src="{{ asset('assets/js/content/content.js') }}"></script>
<script src="{{ asset('assets/js/form/form.utils.js') }}"></script>
<script src="{{ asset('assets/js/utils/svg-loader.js') }}"></script>
</body>
</html>