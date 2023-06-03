@extends('front.layouts.app')

@section('content')
    <!-- <div class="preLoader black">
        <img src="images/logo.png" alt="img">
    </div>
    <div class="preLoader white"></div> -->

    {{--    @dd($property);--}}

    <section class="details-header">
        <div class="container">
            <div class="col-md-10 mx-auto">
                <div class="row top-head">
                    <div class="col-md-6 mb-4">
                        <span class="badge badge-primary">Featured</span>
                        <span class="badge badge-secondary">For Sale</span>
                        <span><i class="far fa-clock"></i> 3 year ago</span>
                        <span><i class="far fa-eye"></i> 27 views</span>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="details-options">
                            <a href="#"><i class="far fa-star"></i></a>
                            <a href="#"><i class="far fa-plus"></i></a>
                            <a href="#"><i class="fas fa-share-alt"></i></a>
                            <a href="#"><i class="fas fa-print"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row title">
                    <div class="col-md-7">
                        <h1 class="heading">{{$property->property_name ?? ''}}</h1>
                        <a class="" href="#"><i
                                class="fas fa-map-marker-alt"></i> {{ $property->property_address ?? '' }}</a>
                    </div>
                    <div class="col-md-5">
                        <div class="text-right">
                            <p class="h2">$ {{ $property->price ?? '' }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-main">
{{--                            <img--}}
{{--                                src="{{$property->hasMedia('property_image') ? $property->getFirstMedia('property_image')->getUrl() : asset('images/single-property-01.jpg')}}"--}}
{{--                                alt="">--}}
                            @foreach($property->media as $index => $media)
                                @break($index > 0)
                                <img
                                    src="{{ !empty($media->first())
                                                                    ? $media->getUrl()
                                                                    : asset('images/single-property-01.jpg') }}"
                                    alt="">
                            @endforeach
                            <div class="options">
                                <button class="btn"><i class="fas fa-camera"></i></button>
                                <button class="btn"><i class="fas fa-map-marked-alt"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-0">
                        <div class="smallGallery ">
{{--                            @foreach($property->getMedia('property_image') as $ind =>$img)--}}
{{--                                @if($ind == 0)--}}
{{--                                    @continue--}}
{{--                                @endif--}}
{{--                                <a href="{{ $img->getUrl() }}" class="smallthumb" data-fancybox="">--}}
{{--                                    <img src="{{ $img->getUrl() }}" alt="">--}}
{{--                                </a>--}}
{{--                            @endforeach--}}

                            @foreach($property->media as $media)
{{--                                    @if($ == 0)--}}
{{--                                        @continue--}}
{{--                                    @endif--}}
                                    <a href="{{ $media->getUrl() }}" class="smallthumb" data-fancybox="">
                                        <img src="{{ $media->getUrl() }}" alt="">
                                    </a>
                                @endforeach
                            {{--                            @dd($property->getMedia('images'));--}}
{{--                            @if(count($property->getMedia('property_image')) < 2 )--}}
{{--                                <h4>This Property Have No Gallery!!</h4>--}}
{{--                            @endif  --}}
                            @if(count($property->media) < 2 )
                                <h4>This Property Have No Gallery!!</h4>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="details-body">
        <div class="container">
            <div class="col-md-10 mx-auto row">
                <div class="col-md-8">
                    <div class="bg-white p-4 mb-3">
                        <p class="h5 text-dark">Description</p>
                        {{--                        <p>Massa tempor nec feugiat nisl pretium. Egestas fringilla phasellus faucibus scelerisque--}}
                        {{--                            eleifend donec. Porta nibh venenatis cras sed felis eget velit aliquet. Neque volutpat ac--}}
                        {{--                            tincidunt vitae semper quis lectus. Turpis in eu mi bibendum neque egestas congue quisque.--}}
                        {{--                            Sed elementum tempus egestas sed sed risus pretium quam. Dignissim sodales ut eu sem. Nibh--}}
                        {{--                            mauris cursus mattis molestie a iaculis at erat pellentesque. Id interdum velit laoreet id--}}
                        {{--                            donec ultrices tincidunt.</p>--}}
                        <p>{{ $property->property_description ?? '' }}</p>
                    </div>
                    <div class="bg-white p-4 mb-3">
                        <p class="h5 text-dark mb-4">Overview</p>
                        <div class="row">
                            {{--                            <div class="col-md-3">--}}
                            {{--                                <div class="overviewItem">--}}
                            {{--                                    <i class="fas fa-home"></i>--}}
                            {{--                                    <div>--}}
                            {{--                                        <p class="mb-0">ID</p>--}}
                            {{--                                        <span>2297 </span>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-md-3">--}}
                            {{--                                <div class="overviewItem">--}}
                            {{--                                    <i class="far fa-file-alt"></i>--}}
                            {{--                                    <div>--}}
                            {{--                                        <p class="mb-0">TYPE</p>--}}
                            {{--                                        <a href="" class="text-dark"><span>Farm </span></a>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <div class="col-md-3">
                                <div class="overviewItem">
                                    <i class="fas fa-bed"></i>
                                    <div>
                                        <p class="mb-0">BEDROOMS</p>
                                        <span>{{$property->total_bedrooms ?? ''}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="overviewItem">
                                    <i class="fas fa-shower"></i>
                                    <div>
                                        <p class="mb-0">BATHROOMS</p>
                                        <span>{{$property->total_bathrooms ?? ''}}</span>
                                    </div>
                                </div>
                            </div>
                            {{--                            <div class="col-md-3">--}}
                            {{--                                <div class="overviewItem">--}}
                            {{--                                    <i class="fas fa-car"></i>--}}
                            {{--                                    <div>--}}
                            {{--                                        <p class="mb-0">GARAGES</p>--}}
                            {{--                                        <span>1 </span>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-md-3">--}}
                            {{--                                <div class="overviewItem">--}}
                            {{--                                    <i class="fas fa-table"></i>--}}
                            {{--                                    <div>--}}
                            {{--                                        <p class="mb-0">SIZE</p>--}}
                            {{--                                        <span>900 SqFt </span>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <div class="col-md-3">
                                <div class="overviewItem">
                                    <i class="fas fa-expand"></i>
                                    <div>
                                        <p class="mb-0">LAND SIZE</p>
                                        <span>{{$property->total_sq_feet ?? ''}} </span>
                                    </div>
                                </div>
                            </div>
                            {{--                            <div class="col-md-3">--}}
                            {{--                                <div class="overviewItem">--}}
                            {{--                                    <i class="fas fa-truck-loading"></i>--}}
                            {{--                                    <div>--}}
                            {{--                                        <p class="mb-0">YEAR BUILT</p>--}}
                            {{--                                        <span>2020 </span>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                    <div class="bg-white p-4 mb-3 text-details">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <p class="h5 text-dark">Address</p>
                            {{--                            <a href="#" class="themeBtn px-3 py-2 text-capitalize"><i class="fas fa-map-marked-alt"></i>--}}
                            {{--                                Open on Google Maps</a>--}}
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <strong>Address</strong>
                                    </div>
                                    <p class="mb-0">{{ $property->property_address ?? '' }}</p>
                                </div>
                            </div>
                            {{--                            <div class="col-md-6">--}}
                            {{--                                <div class="row align-items-center">--}}
                            {{--                                    <div class="col-md-6">--}}
                            {{--                                        <strong>Country</strong>--}}
                            {{--                                    </div>--}}
                            {{--                                    <p class="mb-0">United States</p>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-md-6">--}}
                            {{--                                <div class="row align-items-center">--}}
                            {{--                                    <div class="col-md-6">--}}
                            {{--                                        <strong>Province/State</strong>--}}
                            {{--                                    </div>--}}
                            {{--                                    <p class="mb-0">California</p>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-md-6">--}}
                            {{--                                <div class="row align-items-center">--}}
                            {{--                                    <div class="col-md-6">--}}
                            {{--                                        <strong>City/Town</strong>--}}
                            {{--                                    </div>--}}
                            {{--                                    <p class="mb-0">Los Angeles</p>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-md-6">--}}
                            {{--                                <div class="row align-items-center">--}}
                            {{--                                    <div class="col-md-6">--}}
                            {{--                                        <strong>Neighborhood</strong>--}}
                            {{--                                    </div>--}}
                            {{--                                    <p class="mb-0">North Los Angeles</p>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                    <div class="bg-white p-4 mb-3 text-details">
                        <p class="h5">Details</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <strong>Property ID</strong>
                                    </div>
                                    <p class="mb-0">{{ $property->id ?? '' }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <strong>Price</strong>
                                    </div>
                                    <p class="mb-0">$ {{ $property->price ?? '' }}</p>
                                </div>
                            </div>
                            {{--                            <div class="col-md-6">--}}
                            {{--                                <div class="row align-items-center">--}}
                            {{--                                    <div class="col-md-6">--}}
                            {{--                                        <strong>Property Type</strong>--}}
                            {{--                                    </div>--}}
                            {{--                                    <p class="mb-0">Apartment</p>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-md-6">--}}
                            {{--                                <div class="row align-items-center">--}}
                            {{--                                    <div class="col-md-6">--}}
                            {{--                                        <strong>Property Status</strong>--}}
                            {{--                                    </div>--}}
                            {{--                                    <p class="mb-0">For Sale</p>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-md-6">--}}
                            {{--                                <div class="row align-items-center">--}}
                            {{--                                    <div class="col-md-6">--}}
                            {{--                                        <strong>Rooms</strong>--}}
                            {{--                                    </div>--}}
                            {{--                                    <p class="mb-0">4</p>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <div class="col-md-6">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <strong>Bedrooms</strong>
                                    </div>
                                    <p class="mb-0">{{$property->total_bedrooms ?? ''}}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <strong>Bathrooms</strong>
                                    </div>
                                    <p class="mb-0">{{$property->total_bathrooms ?? ''}}</p>
                                </div>
                            </div>
                            {{--                            <div class="col-md-6">--}}
                            {{--                                <div class="row align-items-center">--}}
                            {{--                                    <div class="col-md-6">--}}
                            {{--                                        <strong>Year Built</strong>--}}
                            {{--                                    </div>--}}
                            {{--                                    <p class="mb-0">2020</p>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-md-6">--}}
                            {{--                                <div class="row align-items-center">--}}
                            {{--                                    <div class="col-md-6">--}}
                            {{--                                        <strong>Size</strong>--}}
                            {{--                                    </div>--}}
                            {{--                                    <p class="mb-0">900 SqFt</p>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <div class="col-md-6">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <strong>Land area</strong>
                                    </div>
                                    <p class="mb-0">{{$property->total_sq_feet ?? ''}}</p>
                                </div>
                            </div>
                            {{--                            <div class="col-md-6">--}}
                            {{--                                <div class="row align-items-center">--}}
                            {{--                                    <div class="col-md-6">--}}
                            {{--                                        <strong>Garages</strong>--}}
                            {{--                                    </div>--}}
                            {{--                                    <p class="mb-0">1</p>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-md-6">--}}
                            {{--                                <div class="row align-items-center">--}}
                            {{--                                    <div class="col-md-6">--}}
                            {{--                                        <strong>Garage area</strong>--}}
                            {{--                                    </div>--}}
                            {{--                                    <p class="mb-0">50 SqFt</p>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                    {{--                    <div class="bg-white p-4 mb-3 text-details features">--}}
                    {{--                        <p class="h5">Features</p>--}}
                    {{--                        <div class="row">--}}
                    {{--                            <div class="col-md-4">--}}
                    {{--                                <ul>--}}
                    {{--                                    <li><a href="#">Air Conditioning</a></li>--}}
                    {{--                                    <li><a href="#">Gym</a></li>--}}
                    {{--                                    <li><a href="#">Microwave</a></li>--}}
                    {{--                                    <li><a href="#">Sauna</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-md-4">--}}
                    {{--                                <ul>--}}
                    {{--                                    <li><a href="#">Barbeque</a></li>--}}
                    {{--                                    <li><a href="#">Laundry</a></li>--}}
                    {{--                                    <li><a href="#">Outdoor Shower</a></li>--}}
                    {{--                                    <li><a href="#">Wifi</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-md-4">--}}
                    {{--                                <ul>--}}
                    {{--                                    <li><a href="#">Dryer</a></li>--}}
                    {{--                                    <li><a href="#">Lawn</a></li>--}}
                    {{--                                    <li><a href="#">Refrigerator</a></li>--}}
                    {{--                                    <li><a href="#">Window Coverings</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    {{--                    <div class="bg-white p-4 mb-3 text-details features">--}}
                    {{--                        <p class="h5">Features</p>--}}
                    {{--                        <div class="row">--}}
                    {{--                            <div class="col-md-12">--}}
                    {{--                                <div class="faq-lst">--}}
                    {{--                                    <div id="accordion">--}}
                    {{--                                        <div class="card">--}}
                    {{--                                            <div id="headingOne">--}}
                    {{--                                                <h5 class="mb-0">--}}
                    {{--                                                    <button class="btn btn-link" data-toggle="collapse"--}}
                    {{--                                                        data-target="#collapseOne" aria-expanded="true"--}}
                    {{--                                                        aria-controls="collapseOne">--}}
                    {{--                                                        <i class="fal fa-angle-up"></i>--}}
                    {{--                                                        <span>First Floor</span>--}}
                    {{--                                                        <p>--}}
                    {{--                                                            <small>Size: <strong>900</strong> Bedrooms:--}}
                    {{--                                                                <strong>2</strong> Bathrooms: <strong>2</strong> Price:--}}
                    {{--                                                                <strong>$800,000</strong>--}}
                    {{--                                                            </small>--}}
                    {{--                                                        </p>--}}
                    {{--                                                    </button>--}}
                    {{--                                                </h5>--}}
                    {{--                                            </div>--}}
                    {{--                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"--}}
                    {{--                                                data-parent="#accordion">--}}
                    {{--                                                <div class="card-body">--}}
                    {{--                                                    <a href="images/floor-plans-01.jpg" data-fancybox="">--}}
                    {{--                                                        <img src="images/floor-plans-01.jpg" class="img-fluid"--}}
                    {{--                                                            alt="img">--}}
                    {{--                                                    </a>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="card">--}}
                    {{--                                            <div id="headingTwo">--}}
                    {{--                                                <h5 class="mb-0">--}}
                    {{--                                                    <button class="btn btn-link collapsed" data-toggle="collapse"--}}
                    {{--                                                        data-target="#collapseTwo" aria-expanded="false"--}}
                    {{--                                                        aria-controls="collapseTwo">--}}
                    {{--                                                        <i class="fal fa-angle-up"></i>--}}
                    {{--                                                        <span>Second Floor</span>--}}
                    {{--                                                        <p>--}}
                    {{--                                                            <small>Size: <strong>900</strong> Bedrooms:--}}
                    {{--                                                                <strong>2</strong> Bathrooms: <strong>2</strong> Price:--}}
                    {{--                                                                <strong>$600,000</strong>--}}
                    {{--                                                            </small>--}}
                    {{--                                                        </p>--}}
                    {{--                                                    </button>--}}
                    {{--                                                </h5>--}}
                    {{--                                            </div>--}}
                    {{--                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"--}}
                    {{--                                                data-parent="#accordion">--}}
                    {{--                                                <div class="card-body">--}}
                    {{--                                                    <a href="images/floor-plans-01.jpg" data-fancybox="">--}}
                    {{--                                                        <img src="images/floor-plans-01.jpg" class="img-fluid"--}}
                    {{--                                                            alt="img">--}}
                    {{--                                                    </a>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="card">--}}
                    {{--                                            <div id="headingThree">--}}
                    {{--                                                <h5 class="mb-0">--}}
                    {{--                                                    <button class="btn btn-link collapsed" data-toggle="collapse"--}}
                    {{--                                                        data-target="#collapseThree" aria-expanded="false"--}}
                    {{--                                                        aria-controls="collapseThree">--}}
                    {{--                                                        <i class="fal fa-angle-up"></i>--}}
                    {{--                                                        <span>Third Floor</span>--}}
                    {{--                                                        <p>--}}
                    {{--                                                            <small>Size: <strong>900</strong> Bedrooms:--}}
                    {{--                                                                <strong>2</strong> Bathrooms: <strong>2</strong> Price:--}}
                    {{--                                                                <strong>$300,000</strong>--}}
                    {{--                                                            </small>--}}
                    {{--                                                        </p>--}}
                    {{--                                                    </button>--}}
                    {{--                                                </h5>--}}
                    {{--                                            </div>--}}
                    {{--                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"--}}
                    {{--                                                data-parent="#accordion">--}}
                    {{--                                                <div class="card-body">--}}
                    {{--                                                    <a href="images/floor-plans-01.jpg" data-fancybox="">--}}
                    {{--                                                        <img src="images/floor-plans-01.jpg" class="img-fluid"--}}
                    {{--                                                            alt="img">--}}
                    {{--                                                    </a>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}


                    {{--                    <div class="bg-white p-4 mb-3 text-details">--}}
                    {{--                        <p class="h5">Video</p>--}}
                    {{--                        <div class="row">--}}
                    {{--                            <div class="col-md-12">--}}
                    {{--                                <div class="video">--}}
                    {{--                                    <img src="images/video.jpg" alt="">--}}
                    {{--                                    <a href="" data-fancybox=""><i class="fas fa-play"></i></a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="bg-white p-4 mb-3 text-details">--}}
                    {{--                        <p class="h5">Virtual Tour</p>--}}
                    {{--                        <div class="row">--}}
                    {{--                            <div class="col-md-12">--}}
                    {{--                                <div class="video">--}}
                    {{--                                    <img src="images/video.jpg" alt="">--}}
                    {{--                                    <a href="" data-fancybox=""><i class="fas fa-play"></i></a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="bg-white p-4 mb-3 text-details">--}}
                    {{--                        <p class="h5">Location</p>--}}
                    {{--                        <div class="row">--}}
                    {{--                            <div class="col-md-12 map">--}}
                    {{--                                <iframe--}}
                    {{--                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13026962.780839564!2d-106.25398202729606!3d37.142929584374194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1684774007671!5m2!1sen!2s"--}}
                    {{--                                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"--}}
                    {{--                                    referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
                    {{--                                <a href="#" class="themeBtn">Get Directions</a>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="bg-white p-4 mb-3 text-details ">--}}
                    {{--                        <p class="h5">Mortgage Calculator</p>--}}
                    {{--                        <form action="" class="calculator">--}}
                    {{--                            <div class="row">--}}
                    {{--                                <div class="col-md-6">--}}
                    {{--                                    <label for="">Sale Price</label>--}}
                    {{--                                    <input type="text" class="form-control" placeholder="$">--}}
                    {{--                                </div>--}}
                    {{--                                <div class="col-md-6">--}}
                    {{--                                    <label for="">Down Payment</label>--}}
                    {{--                                    <input type="text" class="form-control" placeholder="$">--}}
                    {{--                                </div>--}}
                    {{--                                <div class="col-md-6">--}}
                    {{--                                    <label for="">Term[Years]</label>--}}
                    {{--                                    <input type="text" class="form-control" placeholder="Year">--}}
                    {{--                                </div>--}}
                    {{--                                <div class="col-md-6">--}}
                    {{--                                    <label for="">Interest Rate in %</label>--}}
                    {{--                                    <input type="text" class="form-control" placeholder="%">--}}
                    {{--                                </div>--}}
                    {{--                                <div class="col">--}}
                    {{--                                    <button class="btn themeBtn">Calculate</button>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </form>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="bg-white p-4 mb-3 text-details attachments ">--}}
                    {{--                        <p class="h5">Attachments</p>--}}
                    {{--                        <div class="row">--}}
                    {{--                            <div class="col-md-4">--}}
                    {{--                                <div class="card bg-white">--}}
                    {{--                                    <img src="images/attach-pdf.png" alt="">--}}
                    {{--                                    <small>Villa-Called-Archangel-Word-Document<br><br>PDF document</small>--}}
                    {{--                                    <a href="#" class="downloadbtn">Download <i--}}
                    {{--                                            class="far fa-arrow-alt-circle-down"></i></a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    {{--                    <div class="bg-white p-4 mb-3 text-details attachments ">--}}
                    {{--                        <p class="h5">Nearby Places</p>--}}
                    {{--                        <div class="row">--}}
                    {{--                            <div class="col-md-12">--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}


                    <div class="bg-white p-4 mb-3 text-details attachments ">
                        <p class="h5">Rating & Reviews</p>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="average">
                                    <h6>Avarage User Rating</h6>
                                    <span>0 <sup>/ 5</sup></span>
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ratingContent">
                                    <h6>Avarage User Rating</h6>
                                    <ul>
                                        <li>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="line"></div>
                                            <span>0%</span>
                                        </li>
                                        <li>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="line"></div>
                                            <span>0%</span>
                                        </li>
                                        <li>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="line"></div>
                                            <span>0%</span>
                                        </li>
                                        <li>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="line"></div>
                                            <span>0%</span>
                                        </li>
                                        <li>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="line"></div>
                                            <span>0%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="writeContent">
                                    <h6>Write A Review</h6>
                                    <p>You must be <a href="#">logged in</a> to post a review</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="bg-white p-4 mb-3 text-details attachments ">
                        <p class="h5">Similar Homes You May Like</p>
                        <div class="row feature-forSale">
                            <div class="col-md-12">
                                <div class="swiper forsalSlider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            @foreach($similar_properties as $property)
                                                <div class="card searchcard">
                                                    <div class="card-header">
                                                        <span class="badge badge-primary">Featured</span>
                                                        <span class="badge badge-secondary">For Sale</span>
                                                    </div>
                                                    <!--<img src="images/feature1.jpeg" alt="">-->
                                                    @foreach($property->media as $media)
                                                        <img
                                                            src="{{ !empty($media->getUrl())
                                                                    ? $media->getUrl()
                                                                    : asset('images/single-property-01.jpg') }}"
                                                            alt="">
                                                    @endforeach

                                                    <div class="card-footer">
                                                        <a href="#"
                                                           class="h5 m-0">{{ $property->property_address ?? '' }}</a>
                                                        <a href="#" class="p">{{ $property->property_name ?? '' }}</a>

                                                        <p class="price"><b>$ {{$property->price ?? ''}}</b></p>
                                                        <div class="featureOption">
                                                            <span><i class="fas fa-bed"></i> {{ $property->total_bedrooms ?? ''}} Br</span>
                                                            <span><i class="fas fa-shower"></i> {{ $property->total_bathrooms ?? ''}} Ba</span>
                                                            <span><i class="fas fa-table"></i> {{ $property->total_sq_feet ?? '' }} SqFt</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>


                                        {{--                                        <div class="swiper-slide">--}}
                                        {{--                                            <div class="card searchcard">--}}
                                        {{--                                                <div class="card-header">--}}
                                        {{--                                                    <span class="badge badge-primary">Featured</span>--}}
                                        {{--                                                    <span class="badge badge-secondary">For Sale</span>--}}
                                        {{--                                                </div>--}}
                                        {{--                                                <img src="images/feature1.jpeg" alt="">--}}
                                        {{--                                                <div class="card-footer">--}}
                                        {{--                                                    <a href="#" class="p">Luxury Villa In Los Angeles</a>--}}
                                        {{--                                                    <a href="#" class="h5 m-0">8433 Sunset Blvd, Los Angeles</a>--}}
                                        {{--                                                    <p class="price"><b>$1,250,000</b></p>--}}
                                        {{--                                                    <div class="featureOption">--}}
                                        {{--                                                        <span><i class="fas fa-bed"></i> 3 Br</span>--}}
                                        {{--                                                        <span><i class="fas fa-shower"></i> 2 Ba</span>--}}
                                        {{--                                                        <span><i class="fas fa-table"></i> 900 SqFt</span>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div id="simple" class="sidebarTop">
                        <div class="sidebar">
                            <figure class="profile">
                                <img src="{{ asset('images/user.png') }}" alt="">
                            </figure>
                            <div>
                                <b>{{$property->user->name ?? ''}}</b>
                            </div>
                            <span>Real estate broker</span>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(1 review)</span>
                            </div>
                            <div>
                                <a href="mailto:b.gordon@homeid.com">{{ $property->user->email ?? '' }}</a>
                            </div>
                            <div>
                                <a href="tel:+98 0390 909 039"><b>+98 0390 909 039</b></a>
                            </div>
                            <ul class="socialLink">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                            <form action="">
                                <input type="text" class="form-control" placeholder="Full Name *">
                                <input type="text" class="form-control" placeholder="Phone Number *">
                                <input type="text" class="form-control" placeholder="Email Address *">
                                <textarea class="form-control" placeholder="Message *" rows="10"></textarea>
                                <button class="themeBtn w-100">Send message</button>
                                <a href="tel:+123456789" class="themeBtn w-100 mt-3"><i class="fas fa-phone"></i>
                                    Call</a>
                            </form>

                        </div>
                        {{--                        <div class="bg-white p-4 mb-3 text-details ">--}}
                        {{--                            <p class="h5">Mortgage Calculator</p>--}}
                        {{--                            <form action="" class="calculator">--}}
                        {{--                                <div class="row">--}}
                        {{--                                    <div class="col-md-12">--}}
                        {{--                                        <label for="">Sale Price</label>--}}
                        {{--                                        <input type="text" class="form-control" placeholder="$">--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="col-md-12">--}}
                        {{--                                        <label for="">Down Payment</label>--}}
                        {{--                                        <input type="text" class="form-control" placeholder="$">--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="col-md-12">--}}
                        {{--                                        <label for="">Term[Years]</label>--}}
                        {{--                                        <input type="text" class="form-control" placeholder="Year">--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="col-md-12">--}}
                        {{--                                        <label for="">Interest Rate in %</label>--}}
                        {{--                                        <input type="text" class="form-control" placeholder="%">--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="col">--}}
                        {{--                                        <button class="btn themeBtn">Calculate</button>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </form>--}}
                        {{--                        </div>--}}

                        <div class="bg-white p-4 mb-3 text-details attachments ">
                            <p class="h5">Featured Properties</p>
                            <div class="row feature-forSale">
                                <div class="col-md-12">
                                    <div class="swiper featureSlider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                @foreach($similar_properties as $property)
                                                    <div class="card searchcard">
                                                        <div class="card-header">
                                                            <span class="badge badge-primary">Featured</span>
                                                            <span class="badge badge-secondary">For Sale</span>
                                                        </div>
                                                        {{--                                                <img src="images/feature1.jpeg" alt="">--}}
                                                        @foreach($property->media as $media)
                                                            <img
                                                                src="{{ !empty($media->getUrl())
                                                                    ? $media->getUrl()
                                                                    : asset('images/single-property-01.jpg') }}"
                                                                alt="">
                                                        @endforeach

                                                        <div class="card-footer">
                                                            <a href="#"
                                                               class="h5 m-0">{{ $property->property_address ?? '' }}</a>
                                                            <a href="#"
                                                               class="p">{{ $property->property_name ?? '' }}</a>

                                                            <p class="price"><b>$ {{$property->price ?? ''}}</b></p>
                                                            <div class="featureOption">
                                                                <span><i class="fas fa-bed"></i> {{ $property->total_bedrooms ?? ''}} Br</span>
                                                                <span><i class="fas fa-shower"></i> {{ $property->total_bathrooms ?? ''}} Ba</span>
                                                                <span><i class="fas fa-table"></i> {{ $property->total_sq_feet ?? '' }} SqFt</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                {{--                                                <div class="card searchcard">--}}
                                                {{--                                                    <div class="card-header">--}}
                                                {{--                                                        <span class="badge badge-primary">Featured</span>--}}
                                                {{--                                                        <span class="badge badge-secondary">For Rent</span>--}}
                                                {{--                                                    </div>--}}
                                                {{--                                                    <img src="images/feature1.jpeg" alt="">--}}
                                                {{--                                                    <div class="card-footer">--}}
                                                {{--                                                        <a href="#" class="h5 m-0">House In Foxhall Ave, Kingston</a>--}}
                                                {{--                                                        <p class="price"><b>$550</b> / month</p>--}}
                                                {{--                                                    </div>--}}
                                                {{--                                                </div>--}}
                                                {{--                                            </div>--}}
                                                {{--                                            <div class="swiper-slide">--}}
                                                {{--                                                <div class="card searchcard">--}}
                                                {{--                                                    <div class="card-header">--}}
                                                {{--                                                        <span class="badge badge-primary">Featured</span>--}}
                                                {{--                                                        <span class="badge badge-secondary">For Rent</span>--}}
                                                {{--                                                    </div>--}}
                                                {{--                                                    <img src="images/feature1.jpeg" alt="">--}}
                                                {{--                                                    <div class="card-footer">--}}
                                                {{--                                                        <a href="#" class="h5 m-0">House In Foxhall Ave, Kingston</a>--}}
                                                {{--                                                        <p class="price"><b>$550</b> / month</p>--}}
                                                {{--                                                    </div>--}}
                                                {{--                                                </div>--}}
                                                {{--                                            </div>--}}
                                                {{--                                        </div>--}}
                                                {{--                                        <div class="swiper-pagination"></div>--}}
                                                {{--                                    </div>--}}
                                                {{--                                </div>--}}
                                                {{--                            </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    </section>




@endsection
