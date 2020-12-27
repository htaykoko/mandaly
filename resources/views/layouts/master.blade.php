<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mandalay Hospital</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        @include('layouts.css')

        @yield('css_file')
        @yield('css_code')

    </head>
    <body>

        @include('layouts.navbar')

        @include('layouts.message')

        @yield('content')

        @include('layouts.footer')



        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

        @include('layouts.js')
        @yield('js_file')
        @yield('js_code')
    </body>
</html>
