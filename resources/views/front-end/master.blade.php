<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/') }}/front/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('/') }}/front/css/animate-3.7.0.css">
    <link rel="stylesheet" href="{{ asset('/') }}/front/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}/front/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}/front/css/owl-carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}/front/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}/front/css/linearicons.css">
    <link rel="stylesheet" href="{{ asset('/') }}/front/css/style.css">
</head>
<body>
<!-- Preloader Starts -->
<div class="preloader">
    <div class="spinner"></div>
</div>
<!-- Preloader End -->

<!-- Header Area Starts -->
@include('front-end.includes.header')
<!-- Header Area End -->

@yield('body')

<!-- Footer Area Starts -->
@include('front-end.includes.footer')
<!-- Footer Area End -->


<!-- Javascript -->
<script src="{{ asset('/') }}/front/js/vendor/jquery-2.2.4.min.js"></script>
<script src="{{ asset('/') }}/front/js/vendor/bootstrap-4.1.3.min.js"></script>
<script src="{{ asset('/') }}/front/js/vendor/wow.min.js"></script>
<script src="{{ asset('/') }}/front/js/vendor/owl-carousel.min.js"></script>
<script src="{{ asset('/') }}/front/js/vendor/jquery.datetimepicker.full.min.js"></script>
<script src="{{ asset('/') }}/front/js/vendor/jquery.nice-select.min.js"></script>
<script src="{{ asset('/') }}/front/js/vendor/superfish.min.js"></script>
<script src="{{ asset('/') }}/front/js/main.js"></script>

</body>
</html>
