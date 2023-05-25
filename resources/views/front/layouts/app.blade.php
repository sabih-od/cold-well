<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}"/>
    <!-- Fontawesome 6 -->
    <!-- <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"/>
    {{--        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
    <title>Cold Well Banker Realty</title>
</head>

<title>@yield('title')
    | {{(isset($setting) && !is_null($setting['site_title'])) ? $setting['site_title'] : 'Honor 2 Honor'}}</title>
<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keywords')">

@yield('css')

<body>
<!-- Begi`n: Header -->
{{--    @dd($setting->logo)--}}

<header class="">
    <div class="main-navigate">
        <div class="topBar">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <ul class="nav-options">
                            <li><a href="#"><i class="fa-solid fa-phone"></i> <span> (239) 945-1414</span></a></li>
                            <li><i class="fa-solid fa-location-dot"></i> <span> 1631 Del Prado Blvd S Unit 410 Cape Coral, FL 33990-6741</span>
                            </li>
                            <li><a href="#"><i class="fa-solid fa-envelope"></i> <span> info@demo.com</span></a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="nav-login">
                            <li><a href="#"><img src="{{ asset('images/icons/flagicon.jpeg') }}" alt=""></a></li>
                            @if (\Illuminate\Support\Facades\Auth::check())
                                <li><a href="{{ route('user-logout') }}">Logout</a></li>
                            @else
                                <li><a href="{{route('signIn')}}">Sign in</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="an-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-lg p-0">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="img">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('home') }}">Home <span
                                        class="sr-only">(current)</span></a>
                            </li>

                            @if (\Illuminate\Support\Facades\Auth::check())
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('sellYourHome') }}">Sell your home</a>
                                </li>
                            @endif

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('searchProperty') }}">Search Properties</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('marketReport') }}">Market Report</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('communities')}}">Communities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('properties')}}">Properties</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contactUs')}}">Contact us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- END: Header -->


<!-- Preloader -->
{{--    <div class="preLoader black">--}}
{{--        <img src="{{asset('images/logo.png')}}" alt="img"  data-aos="zoom-out" data-aos-delay="300">--}}
{{--    </div>--}}
{{--    <div class="preLoader white"></div>--}}
<!-- END : Preloader -->

@yield('content')

<!-- Begin: Footer -->
<footer id="footer">
    <div class="container-fluid">
        <div class="col-md-10 mx-auto row justify-content-between">
            <div class="col-md-3 text-center p-0 contactinfo">
                <a href="index.php" class="footerLogo"><img src="{{ asset('images/logo.png')}}" class="img-fluid" alt="img"></a>
                <p class="address">1631 Del Prado Blvd Unit 410 Cape Coral, FL 33990-6741</p>
                <a href="mailto:info@demo.com" class="email">info@demo.com</a>
                <a href="tel:(239) 945-1414"><span>Office Phone: </span>(239) 945-1414</a>
                <a href="tel:(239) 810-1010"><span>Cell Phone: </span>(239) 810-1010</a>
            </div>
            <div class="col-md-2">
                <div class="quickList">
                    <h2>Quick Link</h2>
                    <ul>
                        <li><a href="{{route('terms')}}">Terms of Use</a></li>
                        <li><a href="{{route('privacy')}}">Privacy Policy</a></li>
                        <li><a href="#">Property</a></li>
                        <li><a href="#">Buyer</a></li>
                        <li><a href="#">Seller</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="quickList">
                    <h2>Popular Searches</h2>
                    <ul>
                        <li><a href="#">North Fort Myers</a></li>
                        <li><a href="#">Bonita Springs</a></li>
                        <li><a href="#">Fort Myers</a></li>
                        <li><a href="#">Cape Coral</a></li>
                        <li><a href="#">Lehigh Acres</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="quickList">
                    <h2>Newsletter</h2>
                    <p>Subscribe to our newsletter.</p>
                    <form>
                        <input type="text" class="from-control" placeholder="Your email">
                        <button class="btn">Subscribe</button>
                    </form>
                    <ul class="sociallinks">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyRight">
        <div class="container-fluid">
            <div class="col-md-10 mx-auto row align-items-center">
                <div class="col-md-6">
                    <a href="#">Terms of use</a>
                    <a href="#">Privacy Policy</a>
                </div>
                <div class="col-md-6">
                    <p class="m-0 text-right">Copyright &copy; 2023 Coldwell Banker Realty, All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END: Footer -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('js/all.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/gsap.js') }}"></script>
<script src="{{ asset('js/scrollTrigger.js') }}"></script>
{{--<script src="{{ asset('js/custom.min.js') }}"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}


{{--    @if(session()->has('success'))--}}
{{--        <script type="text/javascript">  toastr.success('{{ session('success')}}');</script>--}}
{{--        @php session()->remove('success'); @endphp--}}
{{--    @endif--}}
{{--    @if(session()->has('error'))--}}
{{--        <script type="text/javascript"> toastr.error('{{ session('error')}}');</script>--}}
{{--    @endif--}}

@yield('script')

</body>

</html>
