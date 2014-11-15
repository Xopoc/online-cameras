<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/dist/css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/site.css') }}"/>
    </head>
    <body>

        @section('content')
        @show


        @section('scripts')
            <script src="{{ asset('assets/jquery/dist/jquery.min.js') }}"></script>
            <script src="{{ asset('assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        @show
    </body>
</html>