@extends('front.layouts.app')

@section('title', 'Home')
@section('description', '')
@section('keywords', '')

@section('content')

    <section class="main-slider p-0" id="mainSlider">
        <div class="swiper-container homeSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner bg-image" data-background="images/mainBnnr.png">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 mx-auto text-center slideOne">
                                    <img style="background:url({{ !empty($home->getMedia('home_image')->first())
                        ? $home->getMedia('home_image')->first()->getUrl()
                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }})" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
        </div>
    </section>

@endsection

@section('script')
@endsection
