@extends('layouts.main')
@section('content')

    <section class="inerBanner">
        <img src="{{asset('images/inerbaner1.jpg')}}" class="img-fluid w-100" alt="img">
        <div class="container">
            <h2>{{'Reviews'}}</h2>
        </div>
    </section>

    <section class="reviewInnerSec" data-aos="fade-down">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="secHeading text-center">
                        Post a Review
                    </h2>
                    <div class="container-fluid">
                        <form action="{{ route('review.form') }}" class="row" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="Enter Your Email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="review" placeholder="Enter Your Review">
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="themeBtn">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($reviews as $review)
                    @if($review->status == 1)
                    <div class="col-lg-3 col-md-4 col-md-6">
                    <div class="reviewBox">
                        <figure>
                            <img src="images/review1.png" class="img-fluid" alt="">
                        </figure>
                        <div class="reviewContent">
                            <p class="clamp">"{{ $review->review }}"</p>
                            <span>{{ $review->name }} . - {{ $review->created_at }}</span>
                        </div>
                    </div>
                </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
{{--    <div class="col-md-12">--}}
{{--        <div class="pagination">--}}
{{--            <ul>--}}
{{--                <li><a href="#" class="active">1</a></li>--}}
{{--                <li><a href="#">2</a></li>--}}
{{--                <li><a href="#">3</a></li>--}}
{{--                <li><a href="#">4</a></li>--}}
{{--                <li><a href="#">5</a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
    </section>

@endsection
