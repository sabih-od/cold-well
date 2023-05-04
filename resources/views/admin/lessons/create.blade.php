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
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lessons On Daddy's Lap</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="card-box pd-20 height-100-p mb-30">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('cms.lessons') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Meta Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control"
                                   type="text" name="meta_title"
                                   value="{{ $lessons->content['meta_title'] ?? '' }}"
                                   placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Meta Description</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" placeholder="" name="meta_description"
                                   value="{{ $lessons->content['meta_description'] ?? '' }}" type="search">
                        </div>
                    </div>
                    <h4 class="h4 text-blue my-4">Banner Section</h4>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Banner Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('banner_title') is-invalid @enderror" name="banner_title"
                                   value="{{ $lessons->content['banner_title'] ?? ''}}" type="text">
                        </div>
                        @error('banner_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Banner Image</label>
                        <div class="img-upload ml-3">
                            <div id="image-preview" class="img-preview"
{{--                                 style="background:url({{ (!empty($lessons->getMedia('banner_image')[0])--}}
{{--                                 ? $lessons->getMedia('banner_image')->first()->getUrl()--}}
{{--                                 : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png') }})"--}}
                            >
                                <label for="image-upload" class="img-label"
                                       id="image-label">{{ __('Upload Image') }}</label>
                                <input type="file" name="banner_image" class="img-upload @error('banner_image') is-invalid @enderror" id="image-upload"
                                       value="">
                            </div>
                            @error('banner_image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <h4 class="h4 text-blue my-4">Lessons Section</h4>
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">Blog Title</label>--}}
{{--                        <div class="col-sm-12 col-md-10">--}}
{{--                            <input class="form-control--}}
{{--                            @error('blog_section_title') is-invalid @enderror"--}}
{{--                                   value="{{ $blogs->content['blog_section_title'] ?? '' }}"--}}
{{--                                   name="blog_section_title" type="text">--}}
{{--                        </div>--}}
{{--                        @error('blog_section_title')--}}
{{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Lessons Heading</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control
                            @error('blog_section_heading') is-invalid @enderror"
                                   value="{{ $lessons->content['lesson_section_heading'] ?? ''}}"
                                   name="lesson_section_heading" type="text">
                        </div>
                        @error('blog_section_heading')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Description</label>
                        <div class="col-sm-12 col-md-10">
                            <textarea class="textarea_editor form-control border-radius-0" name="lesson_section_des"
                                      >{{ $lessons->content['lesson_section_des'] ?? ''}}"</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Lessons Learned On Daddy’s Lap:</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control
                            @error('lesson') is-invalid @enderror"
                                   value="{{ $lessons->content['lesson'] ?? ''}}"
                                   name="lesson" type="text">
                        </div>
                        @error('lesson')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Additional Items:</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control
                            @error('additional') is-invalid @enderror"
                                   value="{{ $lessons->content['additional'] ?? ''}}"
                                   name="additional" type="text">
                        </div>
                        @error('additional')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">Blog Image</label>--}}
{{--                        <div class="img-upload ml-3">--}}
{{--                            <div id="image-preview" class="img-preview"--}}
{{--                                 style="background:url({{ (!empty($blogs->getMedia('blog_image')[0])--}}
{{--                                 ? $blogs->getMedia('blog_image')->first()->getUrl()--}}
{{--                                 : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png') }})">--}}
{{--                                <label for="image-upload" class="img-label"--}}
{{--                                       id="image-label">{{ __('Upload Image') }}</label>--}}
{{--                                <input type="file" name="blog_section_image" class="img-upload @error('blog_section_image') is-invalid @enderror" id="image-upload"--}}
{{--                                       value="">--}}
{{--                            </div>--}}
{{--                            @error('blog_section_image')--}}
{{--                            <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <button type="submit" class="btn btn-primary btn-sm scroll-click collapsed">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
