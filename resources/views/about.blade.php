@extends('layouts.main')
@section('content')


    <section class="inerBanner">
        <img src="{{asset('images/inerbaner1.jpg')}}" class="img-fluid w-100" alt="img">
        <div class="container">
            <h2>{{$about->content['about_title'] ?? ''}}</h2>
        </div>
    </section>

    <section class="abtpgSec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-0 order-1">
                    <figure data-aos="fade-right" data-aos-duration="2000">
{{--                        <img src="{{asset('images/aboutimg.jpg')}}" alt="">--}}
                        <img src="{{ !empty($about->getMedia('mission_image')->first())
                        ? $about->getMedia('mission_image')->first()->getUrl()
                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }}
                        " class="img-fluid" alt="img">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="aboutContent" data-aos="fade-left" data-aos-duration="2000">
                        <h2 class="secHeading main">{{$about->content['mission_section_title'] ?? ''}}</h2>
                        <h3 class="subHead">{{$about->content['mission_section_heading'] ?? ''}}</h3>
                        <p class="mb-0">{{$about->content['mission_description'] ?? ''}}</p>
                        <p class="mb-0 mt-5">{{$about->content['mission_section_description'] ?? ''}}</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center flex-row-reverse">
{{--                <div class="col-md-6">--}}
{{--                    <figure data-aos="fade-right" data-aos-duration="2000">--}}
{{--                        <img src="{{ !empty($about->getMedia('mission_section_image')->first())--}}
{{--                        ? $about->getMedia('mission_section_image')->first()->getUrl()--}}
{{--                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }}"--}}
{{--                             class="img-fluid" alt="img">--}}
{{--                    </figure>--}}
{{--                </div>--}}
                <div class="col-md-12">
                    <div class="aboutContent" data-aos="fade-left" data-aos-duration="2000">

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
