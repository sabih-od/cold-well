@extends('front.layouts.app')


@section('content')



    <section class="main-slider p-0" id="mainSlider" style="position: relative">


        @if(session()->has('success'))
            {{--            @dd(session('success'));--}}
            <div class="alert alert-success success-alert-index" role="alert">
                {{ session('success') }}

            </div>

        @endif

        <div class="swiper-container homeSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner bg-image" data-background="images/slide1.jpeg">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner bg-image" data-background="images/slide2.jpeg">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner bg-image" data-background="images/slide3.jpeg">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner bg-image" data-background="images/slide4.jpeg">
                    </div>
                </div>
            </div>
        </div>
        <div class="slider_content">
            <div class="container">
                <div class="col-md-8 mx-auto">
                    <a href="" class="iconBox" data-fancybox=''>
                        <i class="fa-solid fa-play"></i>
                    </a>
                    <h1>EXCEEDING YOUR EXPECTATIONS</h1>
                    <p>Team up with a trusted and knowledgeable neighborhood partner to make your real estate dreams
                        come true.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ! Main Slider -->

    <!-- Search Box -->
    <div class="searchBox">
        <div class="container">
            <div class="col-md-10 mx-auto">
                <form>
                    <div class="form-group mb-0">
                        <input type="text" class="form-control">
                        <i class="fa-solid fa-search"></i>
                    </div>
                    <button class="btn">Search</button>
                </form>
            </div>
        </div>
    </div>
    <!-- ! Search Box -->

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="col-md-10 mx-auto row">
                <div class="col-md-6 my-auto pr-5">
                    <h2 class="heading mb-4">MEET LARRY DEBERRY</h2>
                    <p>Whether you're a first-time home buyer in search of your dream home, a seller looking to downsize
                        or an investor looking for a great opportunity, working with a dedicated real estate
                        professional with over 30 years of experience can make all the difference.</p>
                    <p>deliver unmatched customer service, and my genuine desire to see your property goals come true
                        makes me the go-to resource for all your real estate needs. For sellers, I take full advantage
                        of Coldwell Banker's® marketing tools to ensure that your property is broadly promoted on a
                        variety of channels, including major real estate websites, and my negotiation skills are second
                        to none. For buyers, I effectively analyze the local market and target trends to help you find
                        the perfect home at the right price.</p>
                    <p><strong><em>If you're looking for a positive, helpful partner who is ready to provide you with
                                exceptional service, let's talk today!</em></strong></p>
                    <a href="#" class="btn themeBtn">Read more</a>
                </div>
                <div class="col-md-6">
                    <figure>
                        <img src="images/about.jpeg" class="img-fluid" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- ! About Section -->

    <!-- Showcase Section -->
    <section class="showcase-section text-center">
        <div class="container">
            <div class="col-md-10 mx-auto">
                <h2 class="heading mb-4 text-white">COLDWELL BANKER REALTY</h2>
                <p class="text-white mb-5">As an agent who's an expert in this local area, I bring a wealth of knowledge
                    and expertise about buying and selling real estate here. It's not the same everywhere, so you need
                    someone you can trust for up-to-date information. I am eager to serve you. Here are some of the
                    things I can do for you</p>
                <div class="row">
                    <div class="col-md-3">
                        <a href="#" class="card">
                            <img src="images/1.png" alt="">
                            <h5>Apartment</h5>
                            <button class="btn btntheme"><span>3</span>Listed Properties <i
                                    class="fa-solid fa-angle-right"></i></button>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="card">
                            <img src="images/2.png" alt="">
                            <h5>House</h5>
                            <button class="btn btntheme"><span>3</span>Listed Properties <i
                                    class="fa-solid fa-angle-right"></i></button>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="card">
                            <img src="images/3.png" alt="">
                            <h5>Villa</h5>
                            <button class="btn btntheme"><span>3</span>Listed Properties <i
                                    class="fa-solid fa-angle-right"></i></button>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="card">
                            <img src="images/1.png" alt="">
                            <h5>Luxury homes</h5>
                            <button class="btn btntheme"><span>3</span>Listed Properties <i
                                    class="fa-solid fa-angle-right"></i></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ! Showcase Section -->

    <!-- Feature Section -->
    <section class="feature-section">
        <div class="container">
            <!-- <div class="col-md-10 mx-auto"> -->
            <div class="row">
                <div class="col">
                    <h2 class="heading">Featured Properties</h2>
                    <p>Lorem dolor sit amet, disse suscipit sagittis leo sitea.</p>
                </div>
                <div class="col-lg-1">
                    <div class="swiper-button-prev swiper-button-prev1"></div>
                    <div class="swiper-button-next swiper-button-next1"></div>
                </div>
            </div>
            <div class="swiper featureproduct mt-4">
                <div class="swiper-wrapper">
                    @foreach($properties as $property)
                        <div class="swiper-slide">
                            <div class="card"
                                 onclick="window.location.href = '{{ route('propertyDetail' , $property->id )}}'">
                                <div class="card-header">
                                    <span class="badge badge-primary">Feature</span>
                                    <span class="badge badge-secondary">For Rent</span>
                                </div>
                                <img
                                    src="{{$property->hasMedia('images') ? $property->getFirstMedia('images')->getUrl() : asset('images/single-property-01.jpg')}}"
                                    alt="">
                                <a href="#" class="card-footer">
                                    <div>
                                        <h4>{{ $property->property_address ?? '' }}</h4>
                                        <p><b>$ {{$property->price ?? ''}}</b> / month</p>
                                    </div>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    {{--                    <div class="swiper-slide">--}}
                    {{--                        <div class="card">--}}
                    {{--                            <div class="card-header">--}}
                    {{--                                <span class="badge badge-primary">Feature</span>--}}
                    {{--                                <span class="badge badge-secondary">For Rent</span>--}}
                    {{--                            </div>--}}
                    {{--                            <img src="images/feature2.jpeg" alt="">--}}
                    {{--                            <a href="#" class="card-footer">--}}
                    {{--                                <div>--}}
                    {{--                                    <h4>House In Foxhall Ave, Kingston</h4>--}}
                    {{--                                    <p><b>$550</b> / month</p>--}}
                    {{--                                </div>--}}
                    {{--                                <i class="fa-solid fa-angle-right"></i>--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="swiper-slide">--}}
                    {{--                        <div class="card">--}}
                    {{--                            <div class="card-header">--}}
                    {{--                                <span class="badge badge-primary">Feature</span>--}}
                    {{--                                <span class="badge badge-secondary">For Rent</span>--}}
                    {{--                            </div>--}}
                    {{--                            <img src="images/feature3.jpeg" alt="">--}}
                    {{--                            <a href="#" class="card-footer">--}}
                    {{--                                <div>--}}
                    {{--                                    <h4>House In Foxhall Ave, Kingston</h4>--}}
                    {{--                                    <p><b>$550</b> / month</p>--}}
                    {{--                                </div>--}}
                    {{--                                <i class="fa-solid fa-angle-right"></i>--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="swiper-slide">--}}
                    {{--                        <div class="card">--}}
                    {{--                            <div class="card-header">--}}
                    {{--                                <span class="badge badge-primary">Feature</span>--}}
                    {{--                                <span class="badge badge-secondary">For Rent</span>--}}
                    {{--                            </div>--}}
                    {{--                            <img src="images/feature4.jpeg" alt="">--}}
                    {{--                            <a href="#" class="card-footer">--}}
                    {{--                                <div>--}}
                    {{--                                    <h4>House In Foxhall Ave, Kingston</h4>--}}
                    {{--                                    <p><b>$550</b> / month</p>--}}
                    {{--                                </div>--}}
                    {{--                                <i class="fa-solid fa-angle-right"></i>--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
        <!-- </div> -->
    </section>
    <!-- ! Feature Section -->


    <!-- Showcase Section -->
    <section class="checkout-showcase-section">
        <div class="swiper checkoutSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/properties-slider1.jpg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="card">
                                    <a href="#" class="h4">Affordable Urban House</a>
                                    <a href="#" class="p">500 25th St, Brooklyn, New York</a>
                                    <p>Massa tempor nec feugiat nisl pretium. Egestas fringilla phasellus faucibus
                                        scelerisque eleifend donec. Porta nibh venenatis cras sed felis eget velit
                                        aliquet. Neque volutpat ac tincidunt vitae semper quis lectus. Turpis in eu mi
                                        bibendum neque egestas congue quisque. Sed elementum tempus egestas sed sed
                                        risus pretium quam. Dignissim sodales ut eu sem. Nibh mauris</p>
                                    <div class="d-flex">
                                        <div>
                                            <i class="fa-solid fa-bed"></i> 3 Br
                                        </div>
                                        <div>
                                            <i class="fa-solid fa-shower"></i> 2 Ba
                                        </div>
                                        <div>
                                            <i class="fa-solid fa-table"></i> 900 SqFt
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <h4>$1,250,000</h4>
                                        <div>
                                            <a href="">
                                                <i class="fa-regular fa-star"></i>
                                            </a>
                                            <a href="">
                                                <i class="fa-regular fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="images/properties-slider2.jpg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="card">
                                    <a href="#" class="h4">Affordable Urban House</a>
                                    <a href="#" class="p">500 25th St, Brooklyn, New York</a>
                                    <p>Massa tempor nec feugiat nisl pretium. Egestas fringilla phasellus faucibus
                                        scelerisque eleifend donec. Porta nibh venenatis cras sed felis eget velit
                                        aliquet. Neque volutpat ac tincidunt vitae semper quis lectus. Turpis in eu mi
                                        bibendum neque egestas congue quisque. Sed elementum tempus egestas sed sed
                                        risus pretium quam. Dignissim sodales ut eu sem. Nibh mauris</p>
                                    <div class="d-flex">
                                        <div>
                                            <i class="fa-solid fa-bed"></i> 3 Br
                                        </div>
                                        <div>
                                            <i class="fa-solid fa-shower"></i> 2 Ba
                                        </div>
                                        <div>
                                            <i class="fa-solid fa-table"></i> 900 SqFt
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <h4>$1,250,000</h4>
                                        <div>
                                            <a href="">
                                                <i class="fa-regular fa-star"></i>
                                            </a>
                                            <a href="">
                                                <i class="fa-regular fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="textCaption">
                <h1>Check Out Our Featured Items</h1>
                <p>Whether you’re buying, selling or renting, we can help you move forward.</p>
            </div>
        </div>
    </section>
    <!-- ! Showcase Section -->

    {{--@dd($properties);--}}
    <!-- Feature Section -->
    <section class="property-section">
        <div class="container">
            <!-- <div class="col-md-10 mx-auto"> -->
            <div class="row">
                <div class="col">
                    <h2 class="heading">Properties For Sale</h2>
                    <p>Lorem dolor sit amet, disse suscipit sagittis leo sitea.</p>
                </div>
                <div class="col-lg-2 text-right">
                    <a href="{{route('properties')}}" class="btn btn-light">See all properties</a>
                </div>
            </div>
            <div class="swiper propertyproduct mt-4">
                <div class="swiper-wrapper">
                    @foreach($properties as $property)
                        <div class="swiper-slide">
                            <div class="card"
                                 onclick="window.location.href = '{{ route('propertyDetail' , $property->id )}}'">
                                <div class="card-header">
                                    <span class="badge badge-primary">Feature</span>
                                    <span class="badge badge-secondary">For Rent</span>
                                    <span class="badge badge-grey">Hot offer</span>
                                </div>
                                <img
                                    src="{{$property->hasMedia('images') ? $property->getFirstMedia('images')->getUrl() : asset('images/single-property-01.jpg')}}"
                                    alt="">
                                <div class="card-body">
                            <span><i
                                    class="fas fa-bed"></i> {{ $property->total_bedrooms ?? ''}} Br</span>
                                    <span><i class="fas fa-shower"></i> {{ $property->total_bathrooms ?? ''}} Ba</span>
                                    <span><i class="fas fa-table"></i> {{ $property->total_sq_feet ?? ''}} SqFt</span>
                                </div>
                                <a href="#" class="card-footer px-0">
                                    <div>
                                        <h4 class="m-0">{{ $property->property_address ?? '' }}</h4>
                                        <p class="m-0">month</p>
                                        <p class="m-0"><b>$ {{ $property->price ?? '' }}</b></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    {{--                    <div class="swiper-slide">--}}
                    {{--                        <div class="card">--}}
                    {{--                            <div class="card-header">--}}
                    {{--                                <span class="badge badge-primary">Feature</span>--}}
                    {{--                                <span class="badge badge-secondary">For Rent</span>--}}
                    {{--                                <span class="badge badge-grey">Hot offer</span>--}}
                    {{--                            </div>--}}
                    {{--                            <img src="images/asset 28.jpeg" alt="">--}}
                    {{--                            <div class="card-body">--}}
                    {{--                                <span><i class="fa-solid fa-bed"></i> 3 Br</span>--}}
                    {{--                                <span><i class="fa-solid fa-shower"></i> 2 Ba</span>--}}
                    {{--                                <span><i class="fa-solid fa-table"></i> 900 SqFt</span>--}}
                    {{--                            </div>--}}
                    {{--                            <a href="#" class="card-footer px-0">--}}
                    {{--                                <div>--}}
                    {{--                                    <h4 class="m-0">House In Foxhall Ave, Kingston</h4>--}}
                    {{--                                    <p class="m-0">month</p>--}}
                    {{--                                    <p class="m-0"><b>$550</b></p>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="swiper-slide">--}}
                    {{--                        <div class="card">--}}
                    {{--                            <div class="card-header">--}}
                    {{--                                <span class="badge badge-primary">Feature</span>--}}
                    {{--                                <span class="badge badge-secondary">For Rent</span>--}}
                    {{--                                <span class="badge badge-grey">Hot offer</span>--}}
                    {{--                            </div>--}}
                    {{--                            <img src="images/asset 29.jpeg" alt="">--}}
                    {{--                            <div class="card-body">--}}
                    {{--                                <span><i class="fa-solid fa-bed"></i> 3 Br</span>--}}
                    {{--                                <span><i class="fa-solid fa-shower"></i> 2 Ba</span>--}}
                    {{--                                <span><i class="fa-solid fa-table"></i> 900 SqFt</span>--}}
                    {{--                            </div>--}}
                    {{--                            <a href="#" class="card-footer px-0">--}}
                    {{--                                <div>--}}
                    {{--                                    <h4 class="m-0">House In Foxhall Ave, Kingston</h4>--}}
                    {{--                                    <p class="m-0">month</p>--}}
                    {{--                                    <p class="m-0"><b>$550</b></p>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="swiper-slide">--}}
                    {{--                        <div class="card">--}}
                    {{--                            <div class="card-header">--}}
                    {{--                                <span class="badge badge-primary">Feature</span>--}}
                    {{--                                <span class="badge badge-secondary">For Rent</span>--}}
                    {{--                                <span class="badge badge-grey">Hot offer</span>--}}
                    {{--                            </div>--}}
                    {{--                            <img src="images/asset 30.jpeg" alt="">--}}
                    {{--                            <div class="card-body">--}}
                    {{--                                <span><i class="fa-solid fa-bed"></i> 3 Br</span>--}}
                    {{--                                <span><i class="fa-solid fa-shower"></i> 2 Ba</span>--}}
                    {{--                                <span><i class="fa-solid fa-table"></i> 900 SqFt</span>--}}
                    {{--                            </div>--}}
                    {{--                            <a href="#" class="card-footer px-0">--}}
                    {{--                                <div>--}}
                    {{--                                    <h4 class="m-0">House In Foxhall Ave, Kingston</h4>--}}
                    {{--                                    <p class="m-0">month</p>--}}
                    {{--                                    <p class="m-0"><b>$550</b></p>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="swiper-slide">--}}
                    {{--                        <div class="card">--}}
                    {{--                            <div class="card-header">--}}
                    {{--                                <span class="badge badge-primary">Feature</span>--}}
                    {{--                                <span class="badge badge-secondary">For Rent</span>--}}
                    {{--                                <span class="badge badge-grey">Hot offer</span>--}}
                    {{--                            </div>--}}
                    {{--                            <img src="images/asset 31.jpeg" alt="">--}}
                    {{--                            <div class="card-body">--}}
                    {{--                                <span><i class="fa-solid fa-bed"></i> 3 Br</span>--}}
                    {{--                                <span><i class="fa-solid fa-shower"></i> 2 Ba</span>--}}
                    {{--                                <span><i class="fa-solid fa-table"></i> 900 SqFt</span>--}}
                    {{--                            </div>--}}
                    {{--                            <a href="#" class="card-footer px-0">--}}
                    {{--                                <div>--}}
                    {{--                                    <h4 class="m-0">House In Foxhall Ave, Kingston</h4>--}}
                    {{--                                    <p class="m-0">month</p>--}}
                    {{--                                    <p class="m-0"><b>$550</b></p>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
            <!-- <div class="swiper-button-prev swiper-button-prev2"></div>
                <div class="swiper-button-next swiper-button-next2"></div> -->
            <!-- </div> -->
        </div>
    </section>
    <!-- ! Feature Section -->

    <!-- Feature Section -->
    <section class="property-section community-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="heading text-white">COMMUNITIES SERVED</h2>
                </div>
                <div class="col-lg-2 text-right">
                    <a href="{{route('properties')}}" class="btn btn-outline-light px-4">See all properties</a>
                </div>
            </div>
            <div class="swiper propertyproduct mt-5">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="images/asset 38.jpeg" alt="">
                            <a href="#" class="card-footer px-0">
                                <div>
                                    <h4 class="m-0">House In Foxhall Ave, Kingston</h4>
                                    <p class="m-0">4 Properties</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="images/asset 39.jpeg" alt="">
                            <a href="#" class="card-footer px-0">
                                <div>
                                    <h4 class="m-0">House In Foxhall Ave, Kingston</h4>
                                    <p class="m-0">4 Properties</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="images/asset 40.jpeg" alt="">
                            <a href="#" class="card-footer px-0">
                                <div>
                                    <h4 class="m-0">House In Foxhall Ave, Kingston</h4>
                                    <p class="m-0">4 Properties</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="images/asset 41.jpeg" alt="">
                            <a href="#" class="card-footer px-0">
                                <div>
                                    <h4 class="m-0">House In Foxhall Ave, Kingston</h4>
                                    <p class="m-0">4 Properties</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="images/asset 42.jpeg" alt="">
                            <a href="#" class="card-footer px-0">
                                <div>
                                    <h4 class="m-0">House In Foxhall Ave, Kingston</h4>
                                    <p class="m-0">4 Properties</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ! Feature Section -->

    <!-- Service Section -->
    <section class="service-section">
        <div class="container">
            <div class="col-md-11 mx-auto">
                <h2 class="heading mb-4 text-center">COLDWELL BANKER REALTY</h2>
                <p class="text-center mb-5">As an agent who's an expert in this local area, I bring a wealth of
                    knowledge and expertise about buying and selling real estate here. It's not the same everywhere, so
                    you need someone you can trust for up-to-date information. I am eager to serve you. Here are some of
                    the things I can do for you:</p>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="images/4.png" alt="">
                        <div>
                            <h4>Find Your Next Home</h4>
                            <p>You need someone who knows this area inside and out! I can work with you to find the
                                right home at the right price for you</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="images/5.png" alt="">
                        <div>
                            <h4>Sell a Home</h4>
                            <p>When it's time to move, you need someone who will advertise your home, show to
                                prospective buyers, negotiate the purchase contract</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="images/6.png" alt="">
                        <div>
                            <h4>Consult on Home Selling Tactics</h4>
                            <p>Oftentimes buyers don't visualize living in your home the way you do. I can make your
                                home attractive to its ideal audience</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="images/4.png" alt="">
                        <div>
                            <h4>Buying tactics</h4>
                            <p>It has survived not only five centuries It has survived not only five centuries</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </section>

@endsection

@section('script')

    <script>

        // Wait for the document to be ready
        $(document).ready(function () {
            console.log("IN");
            // Hide the success alert after 10 seconds
            setTimeout(function () {
                $('.success-alert-index').fadeOut('slow');
            }, 5000); // 10000 milliseconds = 10 seconds
        });
    </script>

@endsection
