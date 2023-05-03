@extends('layouts.main')
@section('content')

    <section class="inerBanner">
        <img src="images/inerbaner1.jpg" class="img-fluid w-100" alt="img">
        <div class="container">
            <h2>Contact Us</h2>
        </div>
    </section>


    <section class="cntctInfo">
        <div class="container-lg">
            <div class="row oneTop">
                <div class="col-md-5 wow fadeInLeft" data-wow-delay="0.4s">
                    <div class="cntctSet">
                        <h1>Contact information</h1>
                        <p>fill the foam and our Team will get back to you in 24 hours.</p>
                        <ul class="contInfo">
                            <li>
                                <a href="tel:(347) 460-5587"><img src="{{asset('images/calimg.png')}}" alt="">
                                    <strong>Phone: <br><span>{{ $setting->phone_no_1 }}</span></strong>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:davidc@thetaxessentials.com"><img src="{{asset('images/emailimg.png')}}" alt="">
                                    <strong>Email<br><span>{{ $setting->email }}</span></strong>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('images/locimg.png')}}" alt="">
                                    <strong>Address:<span> {{ $setting->address }}</span></strong>
                                </a>
                            </li>
                        </ul>
                        <ul class="social">
                            <li><a href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $setting->tweeter }}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{ $setting->linkedIn }}"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="{{ $setting->instagram }}"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 wow fadeInRight" data-wow-delay="0.6s">
                    <form action="{{ route('contact') }}" class="estimateForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label>First Name</label>
                                <input type="text" class="@error('first_name') is-invalid @enderror" name="first_name" placeholder="John">
                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label>Last Name</label>
                                <input type="text" class="@error('last_name') is-invalid @enderror" name="last_name" placeholder="Deo">
                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label>Phone</label>
                                <input type="text" class="@error('phone_number') is-invalid @enderror" name="phone_number" placeholder="111 222 3333">
                                @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label>Email</label>
                                <input type="text" class="@error('email') is-invalid @enderror" name="email" placeholder="info@youremail.com">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label>Message</label>
                                <textarea placeholder="Type your Message here" class="@error('message') is-invalid @enderror" name="message"></textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <button type="submit" class="themeBtn">SUBMIT NOW</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
