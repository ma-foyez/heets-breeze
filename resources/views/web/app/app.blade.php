<!DOCTYPE html>
<html lang="en">


    <head>
        @include('web.inc.head')
    </head>

    <body class="header4">

        
 <!-- Preloader area start -->
 <div class="loading">
    <span class="text-capitalize">L</span>
    <span>o</span>
    <span>a</span>
    <span>d</span>
    <span>i</span>
    <span>n</span>
    <span>g</span>
</div>

<div id="preloader">
</div>
<!-- Preloader area end -->

        {{-- @include('web.inc.header') --}}

        @yield('main-body')

        <!-- footer start here -->
        @include('web.inc.footer')
        <!-- footer end here -->

        <!-- jquery -->
        @include('web.inc.script')
        @stack('script')
    </body>


</html>
