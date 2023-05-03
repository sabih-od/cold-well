@extends('layouts.main')
@section('content')

    <section class="inerBanner">
        <img src="{{asset('images/inerbaner1.jpg')}}" class="img-fluid w-100" alt="img">
        <div class="container">
            <h2>{{ $blogs->content['banner_title'] ?? '' }}</h2>
        </div>
    </section>

    <section class="blogSec" data-aos="fade-down">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5">
                    <h4>{{isset($blogs) ? ($blogs->content['blog_section_title'] ?? '') : ''}}</h4>
                    <h6>{{isset($blogs) ? ($blogs->content['blog_section_heading '] ?? '') : ''}}</h6>
                </div>
                    <div class="col-md-4" data-aos="fade-up-right">
                        <div class="serviceBox">
                            <figure><img src="{{ !empty($blogs->getMedia('blog_image')->first())
                        ? $blogs->getMedia('blog_image')->first()->getUrl()
                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }}" alt=""></figure>
                            <h4>{{ $blogs->content['banner_title'] ?? '' }}</h4>
                            <h6>{{ $blogs->content['blog_section_heading '] ?? '' }}</h6>
                        </div>
                    </div>
            </div>
        </div>
    </section>
{{--                <div class="col-md-4">--}}
{{--                    <div class="blogWrap" data-aos="fade-up" data-aos-duration="2000">--}}
{{--                        <figure>--}}
{{--                            <img src="{{ !empty($blogs->getMedia('blog_image')->first())
                        ? $blogs->getMedia('blog_image')->first()->getUrl()
                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }}" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <div class="blogContent">--}}
{{--                            <h3>FASHION / SEPTEMBER 17, 2022</h3>--}}
{{--                            <h4><a href="#">PODCAST: Cost Segregation and the--}}
{{--                                    New Tax Law Gorfine, Schil</a></h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="blogWrap" data-aos="fade-up" data-aos-duration="2000">--}}
{{--                        <figure>--}}
{{--                            <img src="images/blog3.jpg" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <div class="blogContent">--}}
{{--                            <h3>FASHION / SEPTEMBER 17, 2022</h3>--}}
{{--                            <h4><a href="#">PODCAST: Cost Segregation and the--}}
{{--                                    New Tax Law Gorfine, Schil</a></h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="blogWrap" data-aos="fade-up" data-aos-duration="2000">--}}
{{--                        <figure>--}}
{{--                            <img src="images/blog1.jpg" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <div class="blogContent">--}}
{{--                            <h3>FASHION / SEPTEMBER 17, 2022</h3>--}}
{{--                            <h4><a href="#">PODCAST: Cost Segregation and the--}}
{{--                                    New Tax Law Gorfine, Schil</a></h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="blogWrap" data-aos="fade-up" data-aos-duration="2000">--}}
{{--                        <figure>--}}
{{--                            <img src="images/blog2.jpg" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <div class="blogContent">--}}
{{--                            <h3>FASHION / SEPTEMBER 17, 2022</h3>--}}
{{--                            <h4><a href="#">PODCAST: Cost Segregation and the--}}
{{--                                    New Tax Law Gorfine, Schil</a></h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="blogWrap" data-aos="fade-up" data-aos-duration="2000">--}}
{{--                        <figure>--}}
{{--                            <img src="images/blog3.jpg" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <div class="blogContent">--}}
{{--                            <h3>FASHION / SEPTEMBER 17, 2022</h3>--}}
{{--                            <h4><a href="#">PODCAST: Cost Segregation and the--}}
{{--                                    New Tax Law Gorfine, Schil</a></h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="blogWrap" data-aos="fade-up" data-aos-duration="2000">--}}
{{--                        <figure>--}}
{{--                            <img src="images/blog1.jpg" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <div class="blogContent">--}}
{{--                            <h3>FASHION / SEPTEMBER 17, 2022</h3>--}}
{{--                            <h4><a href="#">PODCAST: Cost Segregation and the--}}
{{--                                    New Tax Law Gorfine, Schil</a></h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="blogWrap" data-aos="fade-up" data-aos-duration="2000">--}}
{{--                        <figure>--}}
{{--                            <img src="images/blog2.jpg" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <div class="blogContent">--}}
{{--                            <h3>FASHION / SEPTEMBER 17, 2022</h3>--}}
{{--                            <h4><a href="#">PODCAST: Cost Segregation and the--}}
{{--                                    New Tax Law Gorfine, Schil</a></h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="blogWrap" data-aos="fade-up" data-aos-duration="2000">--}}
{{--                        <figure>--}}
{{--                            <img src="images/blog3.jpg" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <div class="blogContent">--}}
{{--                            <h3>FASHION / SEPTEMBER 17, 2022</h3>--}}
{{--                            <h4><a href="#">PODCAST: Cost Segregation and the--}}
{{--                                    New Tax Law Gorfine, Schil</a></h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="blogWrap" data-aos="fade-up" data-aos-duration="2000">--}}
{{--                        <figure>--}}
{{--                            <img src="images/blog1.jpg" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <div class="blogContent">--}}
{{--                            <h3>FASHION / SEPTEMBER 17, 2022</h3>--}}
{{--                            <h4><a href="#">PODCAST: Cost Segregation and the--}}
{{--                                    New Tax Law Gorfine, Schil</a></h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="blogWrap" data-aos="fade-up" data-aos-duration="2000">--}}
{{--                        <figure>--}}
{{--                            <img src="images/blog2.jpg" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <div class="blogContent">--}}
{{--                            <h3>FASHION / SEPTEMBER 17, 2022</h3>--}}
{{--                            <h4><a href="#">PODCAST: Cost Segregation and the--}}
{{--                                    New Tax Law Gorfine, Schil</a></h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="blogWrap" data-aos="fade-up" data-aos-duration="2000">--}}
{{--                        <figure>--}}
{{--                            <img src="images/blog3.jpg" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <div class="blogContent">--}}
{{--                            <h3>FASHION / SEPTEMBER 17, 2022</h3>--}}
{{--                            <h4><a href="#">PODCAST: Cost Segregation and the--}}
{{--                                    New Tax Law Gorfine, Schil</a></h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="blogWrap" data-aos="fade-up" data-aos-duration="2000">--}}
{{--                        <figure>--}}
{{--                            <img src="images/blog1.jpg" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <div class="blogContent">--}}
{{--                            <h3>FASHION / SEPTEMBER 17, 2022</h3>--}}
{{--                            <h4><a href="#">PODCAST: Cost Segregation and the--}}
{{--                                    New Tax Law Gorfine, Schil</a></h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="blogWrap" data-aos="fade-up" data-aos-duration="2000">--}}
{{--                        <figure>--}}
{{--                            <img src="images/blog2.jpg" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <div class="blogContent">--}}
{{--                            <h3>FASHION / SEPTEMBER 17, 2022</h3>--}}
{{--                            <h4><a href="#">PODCAST: Cost Segregation and the--}}
{{--                                    New Tax Law Gorfine, Schil</a></h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="blogWrap" data-aos="fade-up" data-aos-duration="2000">--}}
{{--                        <figure>--}}
{{--                            <img src="images/blog3.jpg" class="img-fluid" alt="">--}}
{{--                        </figure>--}}
{{--                        <div class="blogContent">--}}
{{--                            <h3>FASHION / SEPTEMBER 17, 2022</h3>--}}
{{--                            <h4><a href="#">PODCAST: Cost Segregation and the--}}
{{--                                    New Tax Law Gorfine, Schil</a></h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="col-md-12">
                    <div class="pagination">
                        <ul>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                        </ul>
                    </div>
                </div>
    </section>

@endsection
