<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link href="{{ asset('/css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/toy-catalog.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/toy-details.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/checkout.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/contact-us.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/home.css') }}" rel="stylesheet">

    <title>@yield('title', 'Toy Store')</title>
</head>
<body>
    @include('layouts.header')
    @yield('header')

    <div class="container my-4">
        @yield('content')
    </div>

    @include('layouts.footer')
    @yield('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>