<!DOCTYPE html>
<html lang="en">
    @include('admin.includes.adminHead')
    <body>
        <div id="wrapper">
            @include('admin.includes.adminHeader')
            @include('admin.includes.adminSidebar')
            <div id="page-wrapper">
                @yield('adminContent')
            </div>
        </div>
        <script src="{{asset('admin/')}}/vendor/jquery/jquery.min.js"></script>
        <script src="{{asset('admin/')}}/tinymce/jquery.tinymce.min.js"></script>
        <script src="{{asset('admin/')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{asset('admin/')}}/vendor/metisMenu/metisMenu.min.js"></script>
        <script src="{{asset('admin/')}}/vendor/raphael/raphael.min.js"></script>
        <script src="{{asset('admin/')}}/vendor/morrisjs/morris.min.js"></script>
        <script src="{{asset('admin/')}}/data/morris-data.js"></script>
        <script src="{{asset('admin/')}}/dist/js/sb-admin-2.js"></script>
    </body>
</html>