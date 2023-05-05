@extends('admin.app')
@section('dashboard')
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>Form</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="card-box pd-20 height-100-p mb-30">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('cms.home') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{--Meta Title--}}
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Meta Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text"
                                   name="meta_title" value="{{ $home->content['meta_title'] ?? '' }}"
                                   placeholder="">
                        </div>
                    </div>

                    {{--Meta Description--}}
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Meta Description</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" placeholder="" name="meta_description"
                                   value="{{ $home->content['meta_description'] ?? '' }}" type="search">
                        </div>
                    </div>

                    {{--Main Home Section--}}
                    <h4 class="h4 text-blue my-4">Main Home Section</h4>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Home Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('home_title') is-invalid @enderror"
                                   name="home_title"
                                   value="{{$home->content['home_title'] ?? ''}}" type="text">
                        </div>
                        @error('home_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Home Heading</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('home_heading') is-invalid @enderror"
                                   placeholder="" name="home_heading"
                                   value="{{$home->content['home_heading'] ?? ''}}" type="search">
                        </div>
                        @error('home_heading')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Home Banner Image</label>
                        <div class="img-upload ml-3">
                            <div id="image-preview" class="img-preview"
                                 style="background:url({{ !empty($home->getMedia('home_image')->first())
                        ? $home->getMedia('home_image')->first()->getUrl()
                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }})">
                                <label for="image-upload" class="img-label"
                                       id="image-label">{{ __('Upload Image') }}</label>
                                <input type="file" name="home_banner_image"
                                       class="img-upload @error('home_banner_image') is-invalid @enderror"
                                       id="image-upload"
                                       value="{{($home->getMedia('home_image'))}}">
                            </div>
                            @error('home_banner_image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">Home Button</label>--}}
{{--                        <div class="col-sm-12 col-md-10">--}}
{{--                            <button--}}
{{--                                class="btn btn-primary btn-sm scroll-click collapsed @error('home_button') is-invalid @enderror"--}}
{{--                                name="home_button"--}}
{{--                                value="" type="submit">--}}
{{--                                Explore More--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                        @error('home_button')--}}
{{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">Home Button</label>--}}
{{--                        <div class="col-sm-12 col-md-10">--}}
{{--                            <button--}}
{{--                                class="btn btn-primary btn-sm scroll-click collapsed @error('home_button') is-invalid @enderror"--}}
{{--                                name="home_button"--}}
{{--                                value="" type="submit">--}}
{{--                                Get In Touch--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                        @error('home_button')--}}
{{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

                    {{--Our Service Section--}}
{{--                    <h4 class="h4 text-blue my-4">Our Service Section</h4>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">Service Sub Title</label>--}}
{{--                        <div class="col-sm-12 col-md-10">--}}
{{--                            <input class="form-control @error('service_title') is-invalid @enderror"--}}
{{--                                   value="{{$home->content['service_title'] ?? ''}}"--}}
{{--                                   name="service_title" type="text">--}}
{{--                        </div>--}}
{{--                        @error('service_title')--}}
{{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">Service Description</label>--}}
{{--                        <div class="col-sm-12 col-md-10">--}}
{{--                            <input class="form-control @error('service_description') is-invalid @enderror"--}}
{{--                                   placeholder="" name="service_description"--}}
{{--                                   value="{{$home->content['service_description'] ?? ''}}" type="search">--}}
{{--                        </div>--}}
{{--                        @error('service_description')--}}
{{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    --}}{{--Service Section--}}
{{--                    <h4 class="h4 text-blue my-4">Service Section</h4>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">Service Heading</label>--}}
{{--                        <div class="col-sm-12 col-md-10">--}}
{{--                            <input class="form-control @error('service_heading') is-invalid @enderror"--}}
{{--                                   value="{{$home->content['service_heading'] ?? ''}}"--}}
{{--                                   name="service_heading" type="text">--}}
{{--                        </div>--}}
{{--                        @error('service_heading')--}}
{{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">Service Description</label>--}}
{{--                        <div class="col-sm-12 col-md-10">--}}
{{--                            <input class="form-control @error('service_description1') is-invalid @enderror"--}}
{{--                                   placeholder="" name="service_description1"--}}
{{--                                   value="{{$home->content['service_description1'] ?? ''}}" type="search">--}}
{{--                        </div>--}}
{{--                        @error('service_description1')--}}
{{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">Service Image</label>--}}
{{--                        <div class="img-upload ml-3">--}}
{{--                            <div id="image-preview" class="img-preview"--}}
{{--                                 style="background:url({{ !empty($home->getMedia('service_image')->first())--}}
{{--                        ? $home->getMedia('service_image')->first()->getUrl()--}}
{{--                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }})">--}}
{{--                                <label for="image-upload" class="img-label"--}}
{{--                                       id="image-label">{{ __('Upload Image') }}</label>--}}
{{--                                <input type="file" name="service_image"--}}
{{--                                       class="img-upload @error('service_image') is-invalid @enderror"--}}
{{--                                       id="image-upload"--}}
{{--                                       value="">--}}
{{--                            </div>--}}
{{--                            @error('service_image')--}}
{{--                            <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    --}}{{--About Section--}}
{{--                    <h4 class="h4 text-blue my-4">About Section</h4>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">About Sub Title</label>--}}
{{--                        <div class="col-sm-12 col-md-10">--}}
{{--                            <input class="form-control @error('about_sub_title') is-invalid @enderror"--}}
{{--                                   value="{{$home->content['about_sub_title'] ?? ''}}"--}}
{{--                                   name="about_sub_title" type="text">--}}
{{--                        </div>--}}
{{--                        @error('about_sub_title')--}}
{{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">About Heading</label>--}}
{{--                        <div class="col-sm-12 col-md-10">--}}
{{--                            <input class="form-control @error('about_heading') is-invalid @enderror"--}}
{{--                                   value="{{$home->content['about_heading'] ?? ''}}"--}}
{{--                                   name="about_heading" type="text">--}}
{{--                        </div>--}}
{{--                        @error('about_heading')--}}
{{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">About Description</label>--}}
{{--                        <div class="col-sm-12 col-md-10">--}}
{{--                            <input class="form-control @error('about_description') is-invalid @enderror"--}}
{{--                                   placeholder="" name="about_description"--}}
{{--                                   value="{{$home->content['about_description'] ?? ''}}" type="search">--}}
{{--                        </div>--}}
{{--                        @error('about_description')--}}
{{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">About Image</label>--}}
{{--                        <div class="img-upload ml-3">--}}
{{--                            <div id="image-preview" class="img-preview"--}}
{{--                                 style="background:url({{ !empty($home->getMedia('about_image')->first())--}}
{{--                        ? $home->getMedia('about_image')->first()->getUrl()--}}
{{--                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }})">--}}
{{--                                <label for="image-upload" class="img-label"--}}
{{--                                       id="image-label">{{ __('Upload Image') }}</label>--}}
{{--                                <input type="file" name="about_image"--}}
{{--                                       class="img-upload @error('about_image') is-invalid @enderror"--}}
{{--                                       id="image-upload"--}}
{{--                                       value="">--}}
{{--                            </div>--}}
{{--                            @error('about_image')--}}
{{--                            <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">About Image-2</label>--}}
{{--                        <div class="img-upload ml-3">--}}
{{--                            <div id="image-preview" class="img-preview"--}}
{{--                                 style="background:url({{ !empty($home->getMedia('about_section_image')->first())--}}
{{--                        ? $home->getMedia('about_section_image')->first()->getUrl()--}}
{{--                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }})">--}}
{{--                                <label for="image-upload" class="img-label"--}}
{{--                                       id="image-label">{{ __('Upload Image') }}</label>--}}
{{--                                <input type="file" name="about_section_image"--}}
{{--                                       class="img-upload @error('about_section_image') is-invalid @enderror"--}}
{{--                                       id="image-upload"--}}
{{--                                       value="">--}}
{{--                            </div>--}}
{{--                            @error('about_section_image')--}}
{{--                            <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                    --}}{{--Company Section--}}
{{--                    <h4 class="h4 text-blue my-4">Company Section</h4>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">Company Sub Title</label>--}}
{{--                        <div class="col-sm-12 col-md-10">--}}
{{--                            <input class="form-control @error('company_sub_title') is-invalid @enderror"--}}
{{--                                   value=""--}}
{{--                                   name="company_sub_title" type="text">--}}
{{--                        </div>--}}
{{--                        @error('company_sub_title')--}}
{{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">Company Heading</label>--}}
{{--                        <div class="col-sm-12 col-md-10">--}}
{{--                            <input class="form-control @error('company_heading') is-invalid @enderror"--}}
{{--                                   value=""--}}
{{--                                   name="company_heading" type="text">--}}
{{--                        </div>--}}
{{--                        @error('company_heading')--}}
{{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">Company Description</label>--}}
{{--                        <div class="col-sm-12 col-md-10">--}}
{{--                            <input class="form-control @error('company_description') is-invalid @enderror"--}}
{{--                                   placeholder="" name="company_description"--}}
{{--                                   value="" type="search">--}}
{{--                        </div>--}}
{{--                        @error('company_description')--}}
{{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">Company Image</label>--}}
{{--                        <div class="img-upload ml-3">--}}
{{--                            <div id="image-preview" class="img-preview"--}}
{{--                                 style="background:url()">--}}
{{--                                <label for="image-upload" class="img-label"--}}
{{--                                       id="image-label">{{ __('Upload Video') }}</label>--}}
{{--                                <input type="file" name="company_video"--}}
{{--                                       class="img-upload @error('company_video') is-invalid @enderror"--}}
{{--                                       id="image-upload"--}}
{{--                                       value="">--}}
{{--                            </div>--}}
{{--                            @error('company_video')--}}
{{--                            <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    --}}{{--Contact Section--}}
{{--                    <h4 class="h4 text-blue my-4">Contact Section</h4>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">Contact Sub Title</label>--}}
{{--                        <div class="col-sm-12 col-md-10">--}}
{{--                            <input class="form-control @error('contact_sub_title') is-invalid @enderror"--}}
{{--                                   value=""--}}
{{--                                   name="contact_sub_title" type="text">--}}
{{--                        </div>--}}
{{--                        @error('contact_sub_title')--}}
{{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">Contact Description</label>--}}
{{--                        <div class="col-sm-12 col-md-10">--}}
{{--                            <input class="form-control @error('contact_description') is-invalid @enderror"--}}
{{--                                   placeholder="" name="contact_description"--}}
{{--                                   value="" type="search">--}}
{{--                        </div>--}}
{{--                        @error('contact_description')--}}
{{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">Contact Button</label>--}}
{{--                        <div class="col-sm-12 col-md-10">--}}
{{--                            <button--}}
{{--                                class="btn btn-primary btn-sm scroll-click collapsed @error('contact_button') is-invalid @enderror"--}}
{{--                                name="contact_button"--}}
{{--                                value="" type="submit">--}}
{{--                                Contact Us--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                        @error('contact_button')--}}
{{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">Contact Image</label>--}}
{{--                        <div class="img-upload ml-3">--}}
{{--                            <div id="image-preview" class="img-preview"--}}
{{--                                 style="background:url()">--}}
{{--                                <label for="image-upload" class="img-label"--}}
{{--                                       id="image-label">{{ __('Upload Image') }}</label>--}}
{{--                                <input type="file" name="contact_image"--}}
{{--                                       class="img-upload @error('contact_image') is-invalid @enderror"--}}
{{--                                       id="image-upload"--}}
{{--                                       value="">--}}
{{--                            </div>--}}
{{--                            @error('contact_image')--}}
{{--                            <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    {{--Blog Section--}}
{{--                    <h4 class="h4 text-blue my-4">Blog Section</h4>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">Blog Sub Title</label>--}}
{{--                        <div class="col-sm-12 col-md-10">--}}
{{--                            <input class="form-control @error('blog_sub_title') is-invalid @enderror"--}}
{{--                                   value="{{$home->content['blog_sub_title'] ?? ''}}"--}}
{{--                                   name="blog_sub_title" type="text">--}}
{{--                        </div>--}}
{{--                        @error('blog_sub_title')--}}
{{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">Blog Heading</label>--}}
{{--                        <div class="col-sm-12 col-md-10">--}}
{{--                            <input class="form-control @error('blog_heading') is-invalid @enderror"--}}
{{--                                   placeholder="" name="blog_heading"--}}
{{--                                   value="{{$home->content['blog_heading'] ?? ''}}" type="search">--}}
{{--                        </div>--}}
{{--                        @error('blog_heading')--}}
{{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

                    {{--Button Submit--}}
                    <button type="submit" class="btn btn-primary btn-sm scroll-click collapsed">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
