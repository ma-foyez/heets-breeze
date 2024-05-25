<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <title>Login | {{ $content->website_name }} - Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('') }}assets/web//images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('/assets') }}/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
          type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('/assets') }}/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('/assets') }}/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div id="app">

            <main class="py-5 my-auto">
                @yield('content')
            </main>
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('/assets') }}/admin/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('/assets') }}/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('/assets') }}/admin/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('/assets') }}/admin/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('/assets') }}/admin/libs/node-waves/waves.min.js"></script>

        <!-- App js -->
        <script src="{{ asset('/assets') }}/admin/js/app.js"></script>

    </body>

</html>