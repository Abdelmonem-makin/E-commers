<!doctype html>
<html dir="rtl" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="AbdElmonem Makin">
    <title>@yield('title')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/css/all.css') }}"rel="stylesheet">
    <link href="{{ asset('/css/sb-admin-2.css') }}"rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}"rel="stylesheet">
</head>

<body>
    @include('Dashboard.incloud.navbar')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 px-0 col-lg-2"></div>
            <main class="col-md-9 my-3 ml-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
