<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/custom.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}" />
        <title>If I walk with Jesus</title>
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
            <div class="an-navbar">
                <div class="container">
                    <div class="top-nav d-flex justify-content-between py-3">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                        <div class="search-box">
                            <form>
                                <input type="search" placeholder="Search">
                                <button class="btn px-0"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg p-0">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('about')}}">About Me</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('front.dailyBibleStudyQuestions')}}">Daily Bible Study & Questions</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Bible Tips</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('front.lessonsLearnnedOnDaddysLap')}}">Lessons Learned on Daddy’s Lap</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('front.outsideResources')}}">Outside Resources</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Forum</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Android App</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Facebook</a>
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
    <div class="preLoader black">
        <img src="{{asset('images/logo.png')}}" alt="img"  data-aos="zoom-out" data-aos-delay="300">
    </div>
    <div class="preLoader white"></div>
    <!-- END : Preloader -->

    @yield('content')

    <!-- Begin: Footer -->
    <footer>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-3 mb-5">
                    <a href="#" class="footerLogo"><img src="{{ !empty($setting->getMedia('settings_image')->first()) ? $setting->getMedia('settings_image')->first()->getUrl() : $setting->logo}}" class="img-fluid" alt="img"></a>
                </div>
                <div class="col-md-3 mb-5">
                    <div class="quickList">
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About Me</a></li>
                            <li><a href="{{route('front.dailyBibleStudyQuestions')}}">Daily Bible Study & Questions</a></li>
                            <li><a href="#">Bible Tips</a></li>
                            <li><a href="{{route('front.lessonsLearnnedOnDaddysLap')}}">Lessons Learned on Daddy’s Lap</a></li>
                            <li><a href="{{route('front.outsideResources')}}">Outside Resources</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Android App</a></li>
                            <li><a href="#">Facebook</a></li>
                            <!-- <li><a href="#">Lessons Learned on Daddy’s Lap</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="quickList">
                        <h5>Enter Your Email Address</h5>
                    </div>
                    <div class="calFoter">
                        <form class="newsletter">
                            <input type="text" placeholder="Your Email Here">
                            <button class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="21" viewBox="0 0 22 21">
                                    <path id="Icon_material-send" data-name="Icon material-send"
                                          d="M3.01,25.5,25,15,3.01,4.5,3,12.667,18.714,15,3,17.333Z"
                                          transform="translate(-3 -4.5)" />
                                </svg>
                            </button>
                        </form>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row copyRight">
                <div class="col-md-12 my-4 text-center">
                    <p class="m-0">&copy; If I Walked With Jesus 2023</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- END: Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/all.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/gsap.js')}}"></script>
    <script src="{{asset('js/scrollTrigger.js')}}"></script>
    <script src="{{asset('js/custom.min.js')}}"></script>

    @if(session()->has('success'))
        <script type="text/javascript">  toastr.success('{{ session('success')}}');</script>
        @php session()->remove('success'); @endphp
    @endif
    @if(session()->has('error'))
        <script type="text/javascript"> toastr.error('{{ session('error')}}');</script>
    @endif

    @yield('script')

    </body>

</html>
