<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
    <!-- FONT LINK -->
    <link href="https://fonts.maateen.me/kalpurush/font.css" rel="stylesheet">
    <!-- CSS Link -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/media.css') }}">
    @stack('css')
</head>
<body>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
START Header PART
--------------------------------------------------------------------------------------------------------------------------------------------------- -->
@include('layouts.frontend.partials.header')
<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
START Form PART
--------------------------------------------------------------------------------------------------------------------------------------------------- -->
@yield('content')
<div class="" style="margin-bottom: 200px;"></div>

<!-- JS Link -->
<script src="{{ asset('frontend_assets/js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/slick.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/all.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/slick.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/custom.js') }}"></script>

@stack('js')
</body>

</html>
