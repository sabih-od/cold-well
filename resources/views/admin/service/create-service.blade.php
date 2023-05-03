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
                        <li class="breadcrumb-item active" aria-current="page">Our Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="card-box pd-20 height-100-p mb-30">
        <div class="row">
            <div class="col-md-12">
{{--                {{ dd($services->content) }}--}}
                <form action="{{ route('cms.services') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Meta Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('meta_title') is-invalid @enderror" type="text"
                                   name="meta_title" value="{{ $services->content['meta_title'] ?? '' }}"
                                   placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Meta Description</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" placeholder="" name="meta_description"
                                   value="{{ $services->content['meta_description'] ?? '' }}" type="search">
                        </div>
                    </div>
                    <h4 class="h4 text-blue my-4">Main Banner Section</h4>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Banner Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('service_title') is-invalid @enderror"
                                   name="service_title"
                                   value="{{$services->content['service_title']}}" type="text">
                        </div>
                        @error('service_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Banner Image</label>
                        <div class="img-upload ml-3">
                            <div id="image-preview" class="img-preview"
                                 style="background:url({{ (!empty($services->getMedia('service_banner_image')[0])
                                 ? $services->getMedia('service_banner_image')->first()->getUrl()
                                 : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png') }})">
                                <label for="image-upload" class="img-label"
                                       id="image-label">{{ __('Upload Image') }}</label>
                                <input type="file" name="service_banner_image"
                                       class="img-upload @error('service_banner_image') is-invalid @enderror"
                                       id="image-upload"
                                       value="">
                            </div>
                            @error('service_banner_image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

{{--                    \\Section Starts\\--}}
                    <h4 class="h4 text-blue my-6">Main Service Section</h4>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Service Heading First</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('service_heading') is-invalid @enderror"
                                   value="{{$services->content['service_heading_first']}}"
                                   name="service_heading_first" type="text">
                        </div>
                        @error('service_heading')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Service Description First</label>
                        <div class="col-sm-12 col-md-10">
                            <textarea class="textarea_editor form-control border-radius-0" name="service_description_first"
                                      placeholder="Enter text ..."
                                      value="{{$services->content['service_description_first']}}"
                            >{!! $services->content['service_description_first'] !!}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Service Section Image</label>
                        <div class="img-upload ml-3">
                            <div id="image-preview" class="img-preview"
                                 style="background:url({{ (!empty($services->getMedia('service_banner_image_one')[0])
                                 ? $services->getMedia('service_banner_image_one')->first()->getUrl()
                                 : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png') }})">
                                <label for="image-upload" class="img-label"
                                       id="image-label">{{ __('Upload Image') }}</label>
                                <input type="file" name="service_banner_image_one"
                                       class="img-upload @error('service_banner_image_one') is-invalid @enderror"
                                       id="image-upload"
                                       value="">
                            </div>
                            @error('service_banner_image_one')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Service Heading Second</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('service_heading') is-invalid @enderror"
                                   value="{{$services->content['service_heading_second']}}"
                                   name="service_heading_second" type="text">
                        </div>
                        @error('service_heading')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Service Description Second</label>
                        <div class="col-sm-12 col-md-10">
                            <textarea class="textarea_editor form-control border-radius-0" name="service_description_second"
                                      placeholder="Enter text ..."
                                      value="{{$services->content['service_description_second']}}"
                            >{!! $services->content['service_description_second'] !!}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Service Section Image</label>
                        <div class="img-upload ml-3">
                            <div id="image-preview" class="img-preview"
                                 style="background:url({{ (!empty($services->getMedia('service_banner_image_two')[0])
                                 ? $services->getMedia('service_banner_image_two')->first()->getUrl()
                                 : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png') }})">
                                <label for="image-upload" class="img-label"
                                       id="image-label">{{ __('Upload Image') }}</label>
                                <input type="file" name="service_banner_image_two"
                                       class="img-upload @error('service_banner_image_two') is-invalid @enderror"
                                       id="image-upload"
                                       value="">
                            </div>
                            @error('service_banner_image_two')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Service Heading Third</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('service_heading_third') is-invalid @enderror"
                                   value="{{$services->content['service_heading_third']}}"
                                   name="service_heading_third" type="text">
                        </div>
                        @error('service_heading_third')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">Service Description Third</label>--}}
{{--                        <div class="col-sm-12 col-md-10">--}}
{{--                            <input class="form-control @error('service_description') is-invalid @enderror"--}}
{{--                                   value="{{$services->content['service_description_third']}}"--}}
{{--                                   name="service_description_third" type="text">--}}
{{--                        </div>--}}
{{--                        @error('service_description')--}}
{{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Service Description Third</label>
                        <div class="col-sm-12 col-md-10">
                            <textarea class="textarea_editor form-control border-radius-0" name="service_description_third"
                                      placeholder="Enter text ..."
                                      value="{{$services->content['service_description_third']}}"
                            >{!! $services->content['service_description_third'] !!}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Service Section Image</label>
                        <div class="img-upload ml-3">
                            <div id="image-preview" class="img-preview"
                                 style="background:url({{ (!empty($services->getMedia('service_banner_image_three')[0])
                                 ? $services->getMedia('service_banner_image_three')->first()->getUrl()
                                 : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png') }})">
                                <label for="image-upload" class="img-label"
                                       id="image-label">{{ __('Upload Image') }}</label>
                                <input type="file" name="service_banner_image_three"
                                       class="img-upload @error('service_banner_image_three') is-invalid @enderror"
                                       id="image-upload"
                                       value="">
                            </div>
                            @error('service_banner_image_three')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary btn-sm scroll-click collapsed">Submit</button>

                </form>
            </div>
        </div>
    </div>
@endsection
