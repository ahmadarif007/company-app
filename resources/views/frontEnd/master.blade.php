        <!-- =======================================================
            Theme Name: Software Company
            Theme URL: https://ahmadarif.com/
            Author: Ahmad Arif
            Author URL: http://arifportfolio.zerobazarbd.com/
        ======================================================= -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="{{asset('frontEnd/css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('frontEnd/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontEnd/css/animate.css')}}">
        <link href="{{asset('frontEnd/css/prettyPhoto.css')}}" rel="stylesheet">
        <link href="{{asset('frontEnd/css/style.css')}}" rel="stylesheet" />	
    </head>
    <body>
        @include('frontEnd.includes.header')
            @yield('mainContent')
        @include('frontEnd.includes.footer')

        <script src="{{asset('frontEnd/js/jquery-2.1.1.min.js')}}"></script>	
        <script src="{{asset('frontEnd/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontEnd/js/jquery.prettyPhoto.js')}}"></script>
        <script src="{{asset('frontEnd/js/jquery.isotope.min.js')}}"></script>  
        <script src="{{asset('frontEnd/js/wow.min.js')}}"></script>
        <script src="{{asset('frontEnd/js/functions.js')}}"></script>
    </body>
</html>