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



    <!-- Feature Section -->
    <section class="feature-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="heading text-uppercase">Sell Your Home</h2>
                </div>
                <div class="col-md-11 mx-auto">
                    <form action="{{route('sellProperty')}}" class="sellform" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <label for="">Name *</label>
                                <input type="text" class="form-control @error('property_name') is-invalid @enderror"
                                       name="property_name">
                                @error('property_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-4">
                                <label for="">Email *</label>
                                <input type="text" class="form-control @error('contact_email') is-invalid @enderror"
                                       name="contact_email">
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
                                       name="contact_phone_number">
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
                                       name="property_address">
                                @error('property_address')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-4">
                                <label for="">Zip/Postal Code *</label>
                                <input type="text" class="form-control @error('zip_code') is-invalid @enderror"
                                       name="zip_code">
                                @error('zip_code')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-4">
                                <label for="">Beds *</label>
                                <select name="total_bedrooms" id=""
                                        class="form-control @error('total_bedrooms') is-invalid @enderror">
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
                                        class="form-control @error('total_bathrooms') is-invalid @enderror">
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
                                       name="total_sq_feet">
                                @error('total_sq_feet')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-4">
                                <label for="">Upload An Image *</label>
                                <div class="dropbox" id="imageContainer"
                                     onclick="document.getElementById('myFileInput').click()">
                                    <input type="file" id="myFileInput" name="property_image">
                                    <img src="images/icons/uploadicon.png" alt="">
                                    <p class="bold">Upload An Image</p>
                                    <p>Drag and drop image here</p>
                                </div>
                                {{--                                <div id="imagePreview"></div>--}}
                            </div>

                            <div class="col-md-12 mb-4">
                                <label for="">Description</label>
                                <textarea name="property_description" id="property_description"
                                          class="form-control @error('property_description') is-invalid @enderror"
                                          rows="5"></textarea>
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
    </script>

@endsection



