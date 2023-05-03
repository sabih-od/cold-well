@extends('front.layouts.app')

@section('title', 'Login')
@section('description', '')
@section('keywords', '')

@section('content')

    <!-- Begin: Main Slider -->
    <section class="main-slider">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="main-wrapper wow fadeInDown">
                        <div class="logoWrap">
                            <a href="{{route('pages.home')}}" class="wow fadeInDown" data-wow-delay="0.8s">
                                <img src="{{asset('pages/images/logo.png')}}" alt="">
                            </a>
                        </div>
                        <div class="swiper mainSlider wow fadeInDown" data-wow-delay="0.8s">
                            <div class="swiper-wrapper">
                                {{--                                <div class="swiper-slide">--}}
                                <figure><img src="{{asset('pages/images/login.jpg')}}" class="w-100" alt=""></figure>
                                {{--                                </div>--}}
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Main Slider -->

    <section class="loginPage">
        <div class="container-lg">
            <div class="row jcc">
                <div class="col-md-8">
                    <div class="formWrap">
                        <div class="text-center">
                            <h2 class="heading">login account</h2>
                            <p>Enter Your Username & Password</p>
                        </div>

                        <form method="POST" action="{{ route('user.log-in') }}">
                            @csrf
                            <div class="form-group">
                                <label for="">Username<span>*</span></label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Username"
                                       name="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Password<span>*</span></label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button class="themeBtn redBtn" type="submit">LOGIN NOW</button>
                            <p>Don't Have An Account <a href="{{route('pages.signup')}}">Sign Up</a></p>
                            <p>Forgot your password? <a href="{{ route('forget.password.get') }}">Click Here</a></p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
