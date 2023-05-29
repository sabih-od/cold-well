@extends('front.layouts.app')

@section('content')

    <!-- <div class="preLoader black">
        <img src="images/logo.png" alt="img">
    </div>
    <div class="preLoader white"></div> -->


    <section class="pagetitle">
        <div class="container">
            <h1>Sell your home</h1>
        </div>
    </section>

    @if(session()->has('success'))

        <div class="alert alert-success success-alert" role="alert">
            {{ session('success') }}
        </div>

    @endif

    <!-- Feature Section -->
    <section class="feature-section" style="position: relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="heading text-uppercase">Sell Your Home</h2>
                </div>
                <div class="col-md-11 mx-auto">
                    <form action="{{route('sellProperty')}}" id="geniusform" class="sellform" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <label for="">Name *</label>
                                <input type="text" class="form-control @error('property_name') is-invalid @enderror"
                                       name="property_name" value="{{ old('property_name') }}">
                                @error('property_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-4">
                                <label for="">Email *</label>
                                <input type="text" class="form-control @error('contact_email') is-invalid @enderror"
                                       name="contact_email" value="{{ old('property_name') }}">
                                @error('contact_email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-4">
                                <label for="">Phone Number *</label>
                                <input type="text"
                                       class="form-control @error('contact_phone_number') is-invalid @enderror"
                                       name="contact_phone_number" value="{{ old('property_name') }}">
                                @error('contact_phone_number')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-8 mb-4">
                                <label for="">Address *</label>
                                <input type="text"
                                       class="form-control @error('property_address') is-invalid @enderror"
                                       placeholder="Street, city, state"
                                       name="property_address" value="{{ old('property_name') }}">
                                @error('property_address')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-4">
                                <label for="">Zip/Postal Code *</label>
                                <input type="text" class="form-control @error('zip_code') is-invalid @enderror"
                                       name="zip_code" value="{{ old('property_name') }}">
                                @error('zip_code')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-4">
                                <label for="">Beds *</label>
                                <select name="total_bedrooms" id=""
                                        class="form-control @error('total_bedrooms') is-invalid @enderror" value="{{ old('property_name') }}">
                                    <option value=""></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                @error('total_bedrooms')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-4">
                                <label for="">Baths</label>
                                <select name="total_bathrooms" id=""
                                        class="form-control @error('total_bathrooms') is-invalid @enderror" value="{{ old('property_name') }}">
                                    <option value=""></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                @error('total_bathrooms')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-4">
                                <label for="">Sq. Ft *</label>
                                <input type="text" class="form-control @error('total_sq_feet') is-invalid @enderror"
                                       name="total_sq_feet" value="{{ old('property_name') }}">
                                @error('total_sq_feet')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-4">
                                <label for="">Price *</label>
                                <input type="text" class="form-control @error('price') is-invalid @enderror"
                                       name="price" value="{{ old('property_name') }}">
                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div class="col-md-12 mb-4">
                                <label for="">Upload An Image *</label>
                                <div class="dropbox" id="imageContainer"
                                     onclick="document.getElementById('myFileInput').click()">
                                    <input type="file" id="myFileInput" multiple name="property_image[]" class="form-control @error('property_image') is-invalid @enderror">
                                    <img src="images/icons/uploadicon.png" alt="">
                                    <p class="bold">Upload An Image</p>
                                    <p>Drag and drop image here</p>
                                    @error('property_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                {{--                                <div id="imagePreview"></div>--}}
                            </div>

                            <div class="col-md-12 mb-4">
                                <label for="">Description</label>
                                <textarea name="property_description" id="property_description"
                                          class="form-control @error('property_description') is-invalid @enderror"
                                          rows="5" value="{{ old('property_name') }}"></textarea>
                                @error('property_description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <button class="themeBtn w-100">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <div class="modal fade" id="setgallery" tabindex="-1" role="dialog" aria-labelledby="setgallery"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">{{ __('Image Gallery') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="top-area">
                            <div class="row">
                                <div class="col-sm-6 text-right">
                                    <div class="upload-img-btn">
                                        <label for="image-upload" id="prod_gallery"><i
                                                class="icofont-upload-alt"></i>{{ __('Upload File') }}</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <a href="javascript:;" class="upload-done" data-dismiss="modal"> <i
                                            class="fas fa-check"></i> {{ __('Done') }}</a>
                                </div>
                                <div class="col-sm-12 text-center">(
                                    <small>{{ __('You can upload multiple Images.') }}</small> )
                                </div>
                            </div>
                        </div>
                        <div class="gallery-images">
                            <div class="selected-image">
                                <div class="row">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ! Feature Section -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myFileInput').change(function (e) {
                var file = e.target.files[0];
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imageContainer img').attr('src', e.target.result);
                    $('#imagePreview').html('<img src="' + e.target.result + '" alt="Preview Image">');
                }

                reader.readAsDataURL(file);
            });
        });


        // Wait for the document to be ready
        $(document).ready(function () {
            // Hide the success alert after 10 seconds
            setTimeout(function () {
                $('.success-alert').fadeOut('slow');
            }, 5000); // 10000 milliseconds = 10 seconds
        });




    </script>

@endsection



