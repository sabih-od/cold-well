<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/slick.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/slick-theme.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/aos.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/custom.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/slider.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}"/>
    <link rel="icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
          integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}
    <title>{{ ('The Tax Essentials') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        #toast-container > .toast-success { background-color: green; }
        #toast-container > .toast-error { background-color: red; }
    </style>

</head>
<body>
<!-- Begin: Header -->
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg p-0" data-aos="fade-down" data-aos-duration="2000">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img
                    src="{{ !empty($setting->getMedia('settings_image')->first()) ? $setting->getMedia('settings_image')->first()->getUrl() : $setting->logo }}"
                    alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('our.services')}}">SERVICES</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">resources <i class="fas fa-caret-down"></i></a>
                        <ul>
                            <li><a href="https://www.irs.gov/publications" target="_blank">IRS Publications</a></li>
                            <li><a href="https://www.irs.gov/forms-instructions" target="_blank">IRS Forms</a></li>
                            <li><a href="https://www.irs.gov/taxpayer-bill-of-rights" target="_blank">Taxpayer
                                    Rights</a></li>
                            <li><a href="https://www.irs.gov/individuals/tax-withholding-estimator" target="_blank">IRS
                                    Withholding Calculator</a></li>
                            <li><a href="{{route('where-is-my-refund')}}">Where is My Refund?</a></li>
                        </ul>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{route('blog')}}">Blog</a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="themeBtn" href="{{route('contact')}}">CONTACT US</a>
                    </li>
                </ul>
                <div class="form-inline">
                    <a href="tel:{{$setting->phone_no_1}}" class="callBtn">
                        <img src="{{asset('images/call.png')}}" alt="">
                        <span>Call Now !<strong>{{ $setting->phone_no_1 }}</strong></span>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- END: Header -->

