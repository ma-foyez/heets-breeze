<!DOCTYPE html>
<html lang="en">


    <head>
        @include('web.inc.head')
    </head>

    <body class="header4">
        @include('web.inc.header')

        @yield('main-body')

        <!-- footer start here -->
        @include('web.inc.footer')
        <!-- footer end here -->

        <!-- jquery -->
        @include('web.inc.script')
        @stack('script')
    </body>


</html>
