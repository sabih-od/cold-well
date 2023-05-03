<!-- Begin: Footer -->
<footer>
    <img src="{{asset('images/footTree.png')}}" class="img-fluid tree" alt="">
    <div class="container">
        <div class="row justify-content-between align-items-baseline">
            <div class="col-md-2 order-2 order-md-0" data-aos="fade-up" data-aos-duration="2000">
                <h3>Quick Links</h3>
                <ul class="links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About us</a></li>
                    <li><a href="{{ route('our.services') }}">Services</a></li>
                    {{--                    <li><a href="#">Resources</a></li>--}}
                    {{--                    <li><a href="blog.php">Blog</a></li>--}}
                    <li><a href="{{ route('contact') }}">Contact us</a></li>
                    <li><a href="{{ route('review') }}">Reviews</a></li>
                    <li><a href="{{ route('terms.condition') }}">Terms And Condition</a></li>
                    <li><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-6 order-0" data-aos="fade-up" data-aos-duration="2000">
                <a href="" class="footLogo">
                    <img
                        src="{{ !empty($setting->getMedia('settings_image')->first()) ? $setting->getMedia('settings_image')->first()->getUrl() : $setting->logo }}"
                        alt="">
                </a>
                <div class="contactInfo">
                    <h3>Call Us</h3>
                    <a href="tel:{{$setting->phone_no_1}}" class="footCall">
                        <i class="fas fa-phone-alt"></i>
                        <p>
                            {{ $setting->phone_no_1 }}
                        </p>
                    </a>
                </div>
                <div class="contactInfo">
                    <h3>Contact Us</h3>
                    <a href="mailto:{{$setting->email}}" class="footCall">
                        <i class="fas fa-envelope"></i>
                        <p>
                            {{ $setting->email }}
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-6 order-1" data-aos="fade-up" data-aos-duration="2000">
                <h3>Our Address</h3>
                <p>{{ $setting->address }}</p>
            </div>
        </div>
        <div class="row copyRight">
            <div class="col-md-12 text-center">
                <p>© Copyright 2023 | all rights reserved</p>
            </div>
        </div>
    </div>
</footer>
<!-- END: Footer -->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/gsap.js')}}"></script>
<script src="{{asset('js/scrollTrigger.js')}}"></script>
<script src="{{asset('js/custom.min.js')}}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if(session()->has('success'))
    <script type="text/javascript"> toastr.success('{{ session('success')}}');</script>
@endif
@if(session()->has('error'))
    <script type="text/javascript"> toastr.error('{{ session('error')}}');</script>
@endif
</body>
    </html>
