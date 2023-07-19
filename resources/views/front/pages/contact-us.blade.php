@extends('front.layouts.app')

@section('content')
    <!-- <div class="preLoader black">
        <img src="images/logo.png" alt="img">
    </div>
    <div class="preLoader white"></div> -->


    <section class="pagetitle">
        <div class="container">
            <h1>Contact us</h1>
        </div>
    </section>

    <section class="contactInfo pb-5">
        <div class="container">
            <div class="col-md-10 mx-auto row">
                <div class="col-md-4">
                    <div class="info">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h5 class="mb-3 font-weight-bold">Contact</h5>
                            <a href="tel:(239) 810 1010">Office Phone: (239) 810 1010</a>
{{--                            <a href="tel:(239) 810-1010">Cell Phone: (239) 810-1010</a>--}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <i class="far fa-envelope-open"></i>
                        <div>
                            <h5 class="mb-3 font-weight-bold">Email Us</h5>
                            <a href="mailto:larrydeberry@ymail.com">larrydeberry@ymail.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h5 class="mb-3 font-weight-bold">Location</h5>
                            <p>1631 Del Prado Blvd Unit 410 Cape Coral, FL 33990-6741</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="col-md-10 mx-auto">
                <div class="col-md-8 mb-4">
                    <h2 class="heading">Get In Touch</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                </div>
                <form action="{{ route('contactUsViaMail') }}" method="POST" class="formContact">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="first_name" placeholder="First Name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="email" placeholder="Your Email">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="phone_number" placeholder="Your Phone">
                        </div>
                        <div class="col-md-12">
                            <textarea  class="form-control" rows="6" name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button class="btn themeBtn" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- ! About Section -->

    <hr>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="col-md-10 mx-auto row">
                <div class="col-md-8">
                    <h2 class="heading">Visit our office</h2>
                    <p><i class="fas fa-map-marker-alt mr-2"></i> 2005 Stokes Isle Apt. 896, Venaville, New York</p>
                </div>
                <div class="col-12">
                    <iframe class="map" loading="lazy" src="https://maps.google.com/maps?q=1631%20Del%20Prado%20Blvd%20Unit%20410%20Cape%20Coral%2C%20FL%2033990-6741&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="1631 Del Prado Blvd Unit 410 Cape Coral, FL 33990-6741" aria-label="1631 Del Prado Blvd Unit 410 Cape Coral, FL 33990-6741"></iframe>
                </div>
            </div>

        </div>
    </section>
    <!-- ! About Section -->

@endsection
