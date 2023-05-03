@extends('admin.app')

@section('dashboard')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Setting Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Setting</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Site Settings</h3>
                            </div>
                            <form class="category-form" method="post" action="{{ route('cms.settings') }}"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Site Title</label>
                                                <input type="text" class="form-control" name="site_title" id="name"
                                                       value="{{$content->site_title ?? ''}}" placeholder="site title"
                                                       required>
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Company Name</label>
                                                <input type="text" class="form-control" name="company_name" id="name"
                                                       value="{{$content->company_name ?? ''}}" placeholder="company_name"
                                                       required>
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Email</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                       value="{{$content->email ??''}}" placeholder="email"
                                                       required>
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Phone No 1 </label>
                                                <input type="text" class="form-control" name="phone_no_1" id="name"
                                                       value="{{$content->phone_no_1 ?? ''}}" placeholder="Phone Number 1"
                                                       required>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="name">Address</label>
                                                    <input type="text" class="form-control" name="address" id="address"
                                                           value="{{$content->address ?? ''}}" placeholder="address"
                                                           required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Facebook</label>
                                                    <input type="url" class="form-control" name="facebook" id="facebook"
                                                           value="{{$content->facebook ?? ''}}" placeholder="facebook"
                                                    >
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Twitter</label>
                                                    <input type="text" class="form-control" name="tweeter" id="tweeter"
                                                           value="{{$content->tweeter ?? ''}}" placeholder="Tweeter"
                                                    >
                                                </div>

                                                <div class="form-group">
                                                    <label for="name">LinkedIn</label>
                                                    <input type="text" class="form-control" name="linkedIn"
                                                           id="LinkedIn"
                                                           value="{{$content->linkedIn ?? ''}}" placeholder="LinkedIn"
                                                    >
                                                </div>

                                                <div class="form-group">
                                                    <label for="name">Instagram</label>
                                                    <input type="text" class="form-control" name="instagram"
                                                           id="instagram"
                                                           value="{{$content->instagram ?? ''}}" placeholder="instagram"
                                                    >
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Logo</label>
                                                    <div class="input-group-btn">
                                                        <div class="image-upload">
                                                            <img src="{{ !empty($content->getMedia('settings_image')->first()) ? $content->getMedia('settings_image')->first()->getUrl() : $content->logo }}" class="img-responsive" width="100px"
                                                                 height="100px">
                                                            <div class="file-btn mt-4">
                                                                <input type="file" name="add_setting_image"
                                                                       class="img-upload"
                                                                       id="image-upload"
                                                                       value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- /.card-body -->
                                                <div class="card-footer float-right">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

