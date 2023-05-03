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
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/custom.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/slider.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/slick.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/slick-theme.min.css')}}"/>
    @yield('css')
    <title>@yield('title')</title>

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
                    <a href="" class="callBtn">
                        <img src="{{asset('images/call.png')}}" alt="">
                        <span>Call Now !<strong>{{ $setting->phone_no_1 }}</strong></span>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- END: Header -->

@yield('content')

<!-- Begin: Footer -->
<footer>
    <img src="{{asset('images/footTree.png')}}" class="img-fluid tree" alt="">
    <div class="container">
        <div class="row justify-content-between align-items-baseline">
            <div class="col-md-2" data-aos="fade-up" data-aos-duration="2000">
                <h3>Quick Links</h3>
                <ul class="links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="services.php">Services</a></li>
                    {{--                    <li><a href="#">Resources</a></li>--}}
                    {{--                    <li><a href="blog.php">Blog</a></li>--}}
                    <li><a href="contact.php">Contact us</a></li>
                </ul>
            </div>
            <div class="col-md-3 text-center" data-aos="fade-up" data-aos-duration="2000">
                <a href="" class="footLogo">
                    <img
                        src="{{ !empty($setting->getMedia('settings_image')->first()) ? $setting->getMedia('settings_image')->first()->getUrl() : $setting->logo }}"
                        alt="">
                </a>
                <div class="contactInfo">
                    <h3>Call Us</h3>
                    <a href="" class="footCall"><img src="{{asset('images/call3.png')}}"
                                                     alt="">{{ $setting->phone_no_1 }}</a>
                </div>
                <div class="contactInfo">
                    <h3>Contact Us</h3>
                    <a href="">{{ $setting->email }}</a>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-duration="2000">
                <h3>Our Address</h3>
                <p>{{ $setting->address }}</p>
            </div>
        </div>
        <div class="row copyRight">
            <div class="col-md-12 text-center">
                <p>copyright 2022 © all rights reserved</p>
            </div>
        </div>
    </div>
</footer>
<!-- END: Footer -->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('js/swiper-bundle.min.js')}}"></script>
<script src="{{ asset('plugins/toastr/toastr.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/gsap.js')}}"></script>
<script src="{{asset('js/scrollTrigger.js')}}"></script>
<script src="{{asset('js/custom.min.js')}}"></script>
@yield('script')
<!-- <script src="js/slick.min.js"></script> -->

@if(session()->has('success'))
    <script type="text/javascript">  toastr.success('{{ session('success')}}');</script>
@endif
@if(session()->has('error'))
    <script type="text/javascript"> toastr.error('{{ session('error')}}');</script>
@endif


</body>

</html>
