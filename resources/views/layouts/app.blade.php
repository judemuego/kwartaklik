<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('mobile/Light Version/HTML Template/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mobile/Light Version/HTML Template/css/styles.min.css') }}">
    <link rel="icon" href="{{ asset('mobile/Light Version/HTML Template/img/favicon.ico') }}">
    <title>@yield('title', 'Vikinger | Home')</title>
</head>
<body>
    @yield('content')

    <script src="{{ asset('mobile/Light Version/HTML Template/js/utils/app.js') }}"></script>
    <script src="{{ asset('mobile/Light Version/HTML Template/js/vendor/xm_plugins.min.js') }}"></script>
    <script src="{{ asset('mobile/Light Version/HTML Template/js/form/form.utils.js') }}"></script>
    <script src="{{ asset('mobile/Light Version/HTML Template/js/landing/landing.tabs.js') }}"></script>
    <script src="{{ asset('mobile/Light Version/HTML Template/js/utils/svg-loader.js') }}"></script>
</body>
</html>