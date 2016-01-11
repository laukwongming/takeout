<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            @yield('title')
        </title>
        <!--Bootstrap theme -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >

        @yield('css')
    </head>

    <body>
        @yield('content')


        <!-- jQuery -->
        <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>


        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        @yield('js')

    </body>
</html>
