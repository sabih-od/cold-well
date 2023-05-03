@extends('layouts.main')
@section('content')

    <!-- Begin: Main Slider -->
    <section class="main-slider p-0" id="mainSlider">
        <div class="carousel-caption">
            <div class="slide-inner bg-image" style="background-image: url('{{asset("images/mainBan.jpg")}}')">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h1 data-swiper-parallax="-200">{{$home->content['home_title'] ?? ''}}</h1>
                            <p data-swiper-parallax="-200">{{$home->content['home_heading'] ?? ''}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--        <video class="banVid" autoplay loop muted>-->
        <!--            <source src="images/banVid.webm">-->
        <!--        </video>-->
        {{--        <div class="swiper-container homeSlider">--}}
        {{--            <div class="swiper-wrapper">--}}
        {{--                <div class="swiper-slide">--}}
        {{--                    --}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </section>
    <!-- End: Main Slider -->

    <section class="formSec">
        <div class="container-md">
            <form action="{{ route('home.email') }}" method="POST" class="ownerForm">
                @csrf
                <div class="row align-items-center formBox">
                    <div class="col-md-5">
                        <div class="formContent" data-aos="fade-up" data-aos-duration="2000">
                            <h2 class="secHeading"><span>Get In Touch!</span>Individual & Business Owner</h2>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-5" data-aos="fade-up" data-aos-duration="2000">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name*">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-5" data-aos="fade-up" data-aos-duration="2000">
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone_number" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-2" data-aos="fade-up" data-aos-duration="2000">
                        <div class="touchBtn">
                            <button type="submit"><i class="far fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="serviceSec">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-3" data-aos="fade-up" data-aos-duration="2000">
                    <div class="serviceHead">
                        <h2 class="secHeading main">{{$home->content['service_title'] ?? ''}}</h2>
                        <p>{{$home->content['service_description'] ?? ''}}</p>
                    </div>
                </div>

                {{--                @foreach($services as $service)--}}
                {{--                    <div class="col-md-4">--}}
                {{--                        <a href="our-services#strategic" class="serviceWrap">--}}
                {{--                            <figure>--}}
                {{--                                @php--}}
                {{--                                    $count = $service->getMedia('services_image')->count();--}}
                {{--                                @endphp--}}
                {{--                                @if($count > 0)--}}
                {{--                                    <img src="{{ !empty($service->getMedia('services_image')->first())--}}
                {{--                        ? $service->getMedia('services_image')->first()->getUrl()--}}
                {{--                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }}" class="img-fluid" alt="">--}}
                {{--                                @endif--}}
                {{--                            </figure>--}}
                {{--                            <div class="serviceContent">--}}
                {{--                                <h3>{{ $service['service_title'] ?? '' }}</h3>--}}
                {{--                                <p>{!! $service['service_description'] ?? '' !!}</p>--}}
                {{--                            </div>--}}
                {{--                        </a>--}}
                {{--                    </div>--}}
                {{--                @endforeach--}}

                <div class="col-md-4">
                    <a href="{{route("our.services")}}#strategic" class="serviceWrap">
                        <figure>
                            <img src="{{ !empty($page->getMedia('service_banner_image_one')->first())
                        ? $page->getMedia('service_banner_image_one')->first()->getUrl()
                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }}"
                                 class="img-fluid" alt="">
                        </figure>
                        <div class="serviceContent">
                            <h3>{{$page->content['service_heading_first'] ?? ''}}</h3>
                            <p>{{ substr(strip_tags($page->content['service_description_first']), 0, 300) }}</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{route("our.services")}}#tax" class="serviceWrap">
                        <figure>
                            <img src="{{ !empty($page->getMedia('service_banner_image_two')->first())
                        ? $page->getMedia('service_banner_image_two')->first()->getUrl()
                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }}"
                                 class="img-fluid" alt="">
                        </figure>
                        <div class="serviceContent">
                            <h3>{{$page->content['service_heading_second'] ?? ''}}</h3>
                            <p>{{ substr(strip_tags($page->content['service_description_second']), 0, 300) }}</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{route("our.services")}}#entity" class="serviceWrap">
                        <figure>
                            <img src="{{ !empty($page->getMedia('service_banner_image_three')->first())
                        ? $page->getMedia('service_banner_image_three')->first()->getUrl()
                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }}"
                                 class="img-fluid" alt="">
                        </figure>
                        <div class="serviceContent">
                            <h3>{{$page->content['service_heading_third'] ?? ''}}</h3>
                            <p>{{ substr(strip_tags($page->content['service_description_third']), 0, 300) }}</p>
                        </div>
                    </a>
                </div>
                <!--                <div class="col-md-12 text-center mt-2">-->
                <!--                    <a href="" class="themeBtn">View All Services<i class="far fa-long-arrow-right"></i></a>-->
                <!--                </div>-->
            </div>
        </div>
    </section>

    <section class="ownerSec">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-3" data-aos="fade-up" data-aos-duration="2000">
                    <div class="serviceHead">
                        <h2 class="secHeading main">Why You Should Choose The Tax Essentials</h2>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="ownerWrap" data-aos="fade-up" data-aos-duration="2000">
                        <figure>
                            <img src="{{asset('images/icon1.png')}}" class="img-fluid" alt="">
                        </figure>
                        <div class="ownerContent">
                            <h3>INTEGRITY</h3>
                            <!--                            <p>It is a long established fact that a reader distracted by the readable content of a page-->
                            <!--                                when looking.</p>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="ownerWrap" data-aos="fade-up" data-aos-duration="2000">
                        <figure>
                            <img src="{{asset('images/icon2.png')}}" class="img-fluid" alt="">
                        </figure>
                        <div class="ownerContent">
                            <h3>PEACE OF MIND</h3>
                            <!--                            <p>It is a long established fact that a reader distracted by the readable content of a page-->
                            <!--                                when looking.</p>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="ownerWrap" data-aos="fade-up" data-aos-duration="2000">
                        <figure>
                            <img src="{{asset('images/icon3.png')}}" class="img-fluid" alt="">
                        </figure>
                        <div class="ownerContent">
                            <h3>CLIENT FOCUS</h3>
                            <!--                            <p>It is a long established fact that a reader distracted by the readable content of a page-->
                            <!--                                when looking.</p>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="ownerWrap" data-aos="fade-up" data-aos-duration="2000">
                        <figure>
                            <img src="{{asset('images/icon4.png')}}" class="img-fluid" alt="">
                        </figure>
                        <div class="ownerContent">
                            <h3>TAX SAVINGS</h3>
                            <!--                            <p>It is a long established fact that a reader distracted by the readable content of a page-->
                            <!--                                when looking.</p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="callusSec">
        <div class="container-md">
            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-duration="2000">
                    <div class="callusBox">
                        <div class="callusWrap">
                            <h2 class="secHeading main">“Need our help? Call us!”</h2>
                            <a href="tel:3474605587" class="callBtn">
                                <img src="{{asset('images/call1.png')}}" alt="">
                                <span>Call Now !<strong>(347) 460-5587</strong></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutSec">
        <div class="container">
            <div class="row align-items-center mt-5 flex-row-reverse">
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="2000">
                    <figure>
                        <img src="{{ !empty($home->getMedia('about_section_image')->first())
                        ? $home->getMedia('about_section_image')->first()->getUrl()
                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }}"
                             class="img-fluid" alt="">
                    </figure>
                </div>
                <div class="col-md-6">
                    <div class="aboutContent" data-aos="fade-up" data-aos-duration="2000">
                        <h2 class="secHeading main">{{$home->content['about_sub_title'] ?? ''}}</h2>
                        <h3 class="subHead">{{$home->content['about_heading'] ?? ''}}</h3>
                        <p>{{$home->content['about_description'] ?? ''}} </p>
                        <!--                        <ul>-->
                        <!--                            <li><img src="images/abt3.png" class="img-fluid" alt=""></li>-->
                        <!--                            <li><img src="images/abt4.png" class="img-fluid" alt=""></li>-->
                        <!--                            <li><img src="images/abt5.png" class="img-fluid" alt=""></li>-->
                        <!--                            <li><img src="images/abt6.png" class="img-fluid" alt=""></li>-->
                        <!--                        </ul>-->
                        <a href="tel:3474605587" class="callBtn">
                            <img src="" alt="">
                            <span>Call to ask any question <strong>(347) 460-5587</strong></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reviewSec">
        <div class="container">
            <h3 class="subHead text-center" data-aos="fade-up" data-aos-duration="2000">Reviews</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="reviewSlider">
                        @foreach($reviews as $review)
                            @if($review->status == 1)
                                <div class="reviewBox">
                                    <figure>
                                        <img src="images/review1.png" class="img-fluid" alt="">
                                    </figure>
                                    <div class="reviewContent">
                                        <p>"{{ $review->review }}"</p>
                                        <span>{{ $review->name }} . - {{ $review->created_at }}</span>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
