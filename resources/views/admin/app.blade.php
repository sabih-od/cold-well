<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>If I Walk With Jesus</title>
{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('dashboard/vendors/images/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('dashboard/vendors/images/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('dashboard/vendors/images/favicon-16x16.png')}}">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <!-- CSS -->
{{--    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/vendors/styles/core.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/vendors/styles/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/vendors/styles/style.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.css')}}">
    <!-- Datatables -->
    <link href="{{ asset('admin/datatables/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="{{ asset('admin/datatables/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/datatables/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/datatables/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/datatables/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/datatables/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .addBtn{
            float: right;
            /*margin-top: 10px;*/
        }
        td{
            text-align: center;
        }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>
<body>
<div id="app">
    {{--  header  --}}
    @include('admin.layouts.header')
    {{--  header  --}}
    {{--  sidebar  --}}
    @include('admin.layouts.sidebar')
    {{--  sidebar  --}}
    <div class="main-container">
        <div class="pd-ltr-20">
            @yield('dashboard')
            {{--footer--}}
            @include('admin.layouts.footer')
            {{--footer--}}
        </div>
    </div>
</div>

<!-- js -->
<script src="{{asset('dashboard/vendors/scripts/core.js')}}"></script>
<script src="{{asset('dashboard/vendors/scripts/script.min.js')}}"></script>
<script src="{{asset('dashboard/vendors/scripts/process.js')}}"></script>
<script src="{{asset('dashboard/vendors/scripts/layout-settings.js')}}"></script>
<script src="{{asset('dashboard/src/plugins/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('dashboard/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('dashboard/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('dashboard/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('dashboard/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('dashboard/vendors/scripts/dashboard.js')}}"></script>
<script src="{{ asset('plugins/toastr/toastr.min.js')}}"></script>
<script src="{{asset('js/custome.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('admin/datatables/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('admin/datatables/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.min.js')}}"></script>

@yield('script')

@if(session()->has('success'))
    <script type="text/javascript">  toastr.success('{{ session('success')}}');</script>
@endif
@if(session()->has('error'))
    <script type="text/javascript"> toastr.error('{{ session('error')}}');</script>
@endif

</body>
</html>
