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
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="card-box pd-20 height-100-p mb-30">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('cms.about') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Meta Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('meta_title') is-invalid @enderror" type="text"
                                   name="meta_title" value="{{ $abouts->meta_title }}"
                                   placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Meta Description</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" placeholder="" name="meta_description"
                                   value="{{ $abouts->meta_description }}" type="search">
                        </div>
                    </div>
                    <h4 class="h4 text-blue my-4">Main Banner Section</h4>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">About Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('about_title') is-invalid @enderror"
                                   name="about_title"
                                   value="{{ $abouts->content['about_title'] }}" type="text">
                        </div>
                        @error('about_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">About Banner Image</label>
                        <div class="img-upload ml-3">
                            <div id="image-preview" class="img-preview"
                                 style="background:url({{ !empty($abouts->getMedia('about_us_image')->first())
                        ? $abouts->getMedia('about_us_image')->first()->getUrl()
                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }})">
                                <label for="image-upload" class="img-label"
                                       id="image-label">{{ __('Upload Image') }}</label>
                                <input type="file" name="about_banner_image"
                                       class="img-upload @error('about_banner_image') is-invalid @enderror"
                                       id="image-upload"
                                       value="">
                            </div>
                            @error('about_banner_image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <h4 class="h4 text-blue my-4">About Section First</h4>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">About Section Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('mission_section_title') is-invalid @enderror"
                                   value="{{ $abouts->content['mission_section_title'] }}"
                                   name="mission_section_title" type="text">
                        </div>
                        @error('mission_section_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">About Section Heading</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('mission_section_heading') is-invalid @enderror"
                                   value="{{ $abouts->content['mission_section_heading'] }}"
                                   name="mission_section_heading" type="text">
                        </div>
                        @error('mission_section_heading')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">About Section Description</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('mission_description') is-invalid @enderror" placeholder=""
                                   name="mission_description"
                                   value="{{ $abouts->content['mission_description'] }}" type="search">
                        </div>
                        @error('mission_description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">About Section Image</label>
                        <div class="img-upload ml-3">
                            <div id="image-preview" class="img-preview"
                                 style="background:url({{ !empty($abouts->getMedia('mission_image')->first())
                        ? $abouts->getMedia('mission_image')->first()->getUrl()
                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }})">
                                <label for="image-upload" class="img-label"
                                       id="image-label">{{ __('Upload Image') }}</label>
                                <input type="file" name="mission_section_image"
                                       class="img-upload @error('mission_section_image') is-invalid @enderror"
                                       id="image-upload"
                                       value="">
                            </div>
                            @error('mission_section_image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Image description</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('image0-des') is-invalid @enderror"
                                   value="{{ $abouts->content['image0-des'] }}"
                                   name="image0-des" type="text">
                        </div>
                        @error('mission_section_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">about description after Image</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('about-des') is-invalid @enderror"
                                   value="{{ $abouts->content['about-des'] }}"
                                   name="about-des" type="text">
                        </div>
                        @error('mission_section_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <h4 class="h4 text-blue my-4">About Section-2</h4>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">About Section Description</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('mission_section_description') is-invalid @enderror" placeholder=""
                                   name="mission_section_description"
                                   value="{{ $abouts->content['mission_section_description'] }}" type="search">
                        </div>
                        @error('mission_section_description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">About Section Image</label>
                        <div class="img-upload ml-3">
                            <div id="image-preview" class="img-preview"
                                 style="background:url({{ !empty($abouts->getMedia('mission_section_image')->first())
                        ? $abouts->getMedia('mission_section_image')->first()->getUrl()
                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }})">
                                <label for="image-upload" class="img-label"
                                       id="image-label">{{ __('Upload Image') }}</label>
                                <input type="file" name="mission_images"
                                       class="img-upload @error('mission_images') is-invalid @enderror"
                                       id="image-upload"
                                       value="">
                            </div>
                            @error('mission_images')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Image description</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('image1-des') is-invalid @enderror"
                                   value="{{ $abouts->content['image1-des'] }}"
                                   name="image1-des" type="text">
                        </div>
                        @error('mission_section_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">About Section End</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('about-section-third') is-invalid @enderror" placeholder=""
                                   name="about-section-third"
                                   value="{{ $abouts->content['about-section-third'] }}"
                                   type="search">
                        </div>
                        @error('about-section-third')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm scroll-click collapsed">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
