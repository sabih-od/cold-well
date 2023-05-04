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
                        <li class="breadcrumb-item"><a href="{{ route('index.additional') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('index.additional') }}">Add
                                Additional Item</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update Additional Item</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="card-box pd-20 height-100-p mb-30">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('update.additional', $additional->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">Image</label>--}}
{{--                        <div class="img-upload ml-3">--}}
{{--                            {{dd($blog->getMedia('blog_banner_image'))}}--}}
{{--                            <div id="image-preview" class="img-preview"--}}
{{--                                 style="background:url({{ $blog->getMedia('add_blog_image')[0]->getUrl()}});"--}}
{{--                            >--}}
{{--                                <label for="image-upload" class="img-label"--}}
{{--                                       id="image-label">{{ __('Upload Image') }}</label>--}}
{{--                                <input type="file" name="add_blog_image" class="img-upload @error('add_blog_image') is-invalid @enderror" id="image-upload"--}}
{{--                                       value="{{$blog->add_blog_image}}">--}}
{{--                            </div>--}}
{{--                            @error('add_blog_image')--}}
{{--                            <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label" for="date-input">Date</label>--}}
{{--                        <div class="col-sm-12 col-md-10">--}}
{{--                            <input type="date" id="date-input" name="date" class="form-control" value="{{ $blog->blog_date}}">--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="title" value="{{ $additional->name }}" placeholder="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Image</label>
                        <div class="col-sm-12 col-md-10">
                            <input type="hidden" name="old_image" value="{{ $additional->image }}">
                            <input type="file" id="image-input" name="image" onchange="previewImage(event)">
                            <img id="image-preview" src="{{ asset('admin/images/' . $additional->image) }}" alt="Preview Image">
                        </div>
                    </div>
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">Heading</label>--}}
{{--                        <div class="col-sm-12 col-md-10">--}}
{{--                            <input class="form-control" type="text" name="heading" value="{{ $blog->blog_heading }}" placeholder="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-sm-12 col-md-2 col-form-label">Description</label>--}}
{{--                        <div class="col-sm-12 col-md-10">--}}
{{--                            <textarea class="textarea_editor form-control border-radius-0" name="add_blog_description"--}}
{{--                                      placeholder="Enter text ...">{{ $blog->blog_description }}</textarea>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <button type="submit" class="btn btn-primary btn-sm scroll-click collapsed">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function previewImage(event) {
            var input = event.target;
            var reader = new FileReader();

            reader.onload = function () {
                var preview = document.getElementById('image-preview');
                preview.src = reader.result;
            }
            reader.readAsDataURL(input.files[0]);
        }

    </script>
@endsection
