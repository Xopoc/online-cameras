<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>

         <script>
            less = {
                env: "development"
            };
        </script>
        <link rel="stylesheet/less" type="text/css"  href="{{ asset('less/init.less') }}"/>
        <script src="{{ asset('assets/less/dist/less.min.js') }}"></script>


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