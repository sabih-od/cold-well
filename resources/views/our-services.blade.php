@extends('layouts.main')
@section('content')

    <section class="inerBanner">
        <img src="{{asset('images/inerbaner1.jpg')}}" class="img-fluid w-100" alt="img">
        <div class="container">
            <h2>{{$page->content['service_title'] ?? ''}}</h2>
        </div>
    </section>

    <section class="abtpgSec servicePg">
        <div class="container">
            <div class="row align-items-center" id="strategic">
                <div class="col-lg-6">
                    <figure data-aos="fade-right" data-aos-duration="2000">
                        <img src="{{ !empty($page->getMedia('service_banner_image_one')->first())
                        ? $page->getMedia('service_banner_image_one')->first()->getUrl()
                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }}"
                             class="img-fluid" alt="img">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="aboutContent" data-aos="fade-left" data-aos-duration="2000">
                        <h3 class="subHead">{{$page->content['service_heading_first'] ?? ''}}</h3>
                        <p class="mb-0">{!! $page->content['service_description_first'] ?? '' !!}</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center flex-row-reverse" id="tax">
                <div class="col-lg-6">
                    <figure data-aos="fade-right" data-aos-duration="2000">
                        <img src="{{ !empty($page->getMedia('service_banner_image_two')->first())
                        ? $page->getMedia('service_banner_image_two')->first()->getUrl()
                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }}"
                             class="img-fluid" alt="img">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="aboutContent" data-aos="fade-left" data-aos-duration="2000">
                        <h3 class="subHead">{{$page->content['service_heading_second'] ?? ''}}</h3>
                        <p class="mb-0">{!! $page->content['service_description_second'] ?? '' !!}</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center" id="entity">
                <div class="col-lg-6">
                    <figure data-aos="fade-right" data-aos-duration="2000">
                        <img src="{{ !empty($page->getMedia('service_banner_image_three')->first())
                        ? $page->getMedia('service_banner_image_three')->first()->getUrl()
                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }}"
                             class="img-fluid" alt="img">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="aboutContent" data-aos="fade-left" data-aos-duration="2000">
                        <h3 class="subHead">{{$page->content['service_heading_third'] ?? ''}}</h3>
                        <p class="mb-0">{!! $page->content['service_description_third'] ?? '' !!}</p>

                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
