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
                        <li class="breadcrumb-item active" aria-current="page">Faqs</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="card-box pd-20 height-100-p mb-30">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('cms.faqs') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Meta Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('meta_title') is-invalid @enderror" type="text"
                                   name="meta_title" value="{{ $faqs->meta_title }}"
                                   placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Meta Description</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" placeholder="" name="meta_description"
                                   value="{{ $faqs->meta_description }}" type="search">
                        </div>
                    </div>
                    <h4 class="h4 text-blue my-4">Main Faqs Section</h4>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Faq Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('faq_title') is-invalid @enderror"
                                   name="faq_title"
                                   value="{{ $faqs->content['faq_title'] }}" type="text">
                        </div>
                        @error('faq_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Banner Image</label>
                        <div class="img-upload ml-3">
                            <div id="image-preview" class="img-preview"
                                 style="background:url({{ (!empty($faqs->getMedia('faqs_banner_image')[0])
                                 ? $faqs->getMedia('faqs_banner_image')[$count - 1]->getUrl()
                                 : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png') }})">
                                <label for="image-upload" class="img-label"
                                       id="image-label">{{ __('Upload Image') }}</label>
                                <input type="file" name="faq_banner_image"
                                       class="img-upload @error('faq_banner_image') is-invalid @enderror"
                                       id="image-upload"
                                       value="">
                            </div>
                            @error('faq_banner_image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <h4 class="h4 text-blue my-4">Main Faqs Section</h4>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Faq Section Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control @error('faq_section_title') is-invalid @enderror"
                                   value="{{ $faqs->content['faq_section_title'] }}"
                                   name="faq_section_title" type="text">
                        </div>
                        @error('faq_section_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm scroll-click collapsed">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
