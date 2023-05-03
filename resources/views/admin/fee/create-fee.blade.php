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
                        <li class="breadcrumb-item active" aria-current="page">Fee Schedule</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="card-box pd-20 height-100-p mb-30">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('cms.fee.schedule') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Meta Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('meta_title') is-invalid @enderror" type="text"
                                   name="meta_title" value="{{ $fees->meta_title }}"
                                   placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Meta Description</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" placeholder="" name="meta_description"
                                   value="{{ $fees->meta_description }}" type="search">
                        </div>
                    </div>
                    <h4 class="h4 text-blue my-4">Main Banner Section</h4>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Fee Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('fee_title') is-invalid @enderror"
                                   name="fee_title"
                                   value="{{ $fees->content['fee_title'] }}" type="text">
                        </div>
                        @error('fee_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Fee Banner Image</label>
                        <div class="img-upload ml-3">
                            <div id="image-preview" class="img-preview"
                                 style="background:url({{ (!empty($fees->getMedia('fee_schedule_image')[0]->getUrl())
                                 ? $fees->getMedia('fee_schedule_image')[$count - 1]->getUrl()
                                 : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png') }})">
                                <label for="image-upload" class="img-label"
                                       id="image-label">{{ __('Upload Image') }}</label>
                                <input type="file" name="fee_banner_image"
                                       class="img-upload @error('fee_banner_image') is-invalid @enderror"
                                       id="image-upload"
                                       value="">
                            </div>
                            @error('fee_banner_image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <h4 class="h4 text-blue my-4">Fee Schedule Section</h4>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Fee Section Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('fee_section_title') is-invalid @enderror"
                                   value="{{ $fees->content['fee_section_title'] }}"
                                   name="fee_section_title" type="text">
                        </div>
                        @error('fee_section_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm scroll-click collapsed">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
