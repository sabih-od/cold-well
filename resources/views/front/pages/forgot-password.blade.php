@extends('front.layouts.app')

@section('content')


    <!-- <div class="preLoader black">
        <img src="images/logo.png" alt="img">
    </div>
    <div class="preLoader white"></div> -->


    <section class="pagetitle">
        <div class="container">
            <h1>Forget Password</h1>
        </div>
    </section>


    <section class="accountAccesSec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="whitebg">
                        <h2><span>Reset Password</span></h2>
                        <form action="{{ route('password.change') }}" method="POST" class="formStyle form-row">
                            @csrf
                            <div class="input-group">
                                <label>New Password<em>*</em></label>
                                <input type="text" class="form-control @error('password') is-invalid @enderror"
                                       placeholder="At least 6 characters" name="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group">
                                <label>Confirm Password<em>*</em></label>
                                <input type="text" class="form-control" placeholder="At least 6 characters" name="password_confirmation">
                            </div>
                            <div class="input-group justify-content-md-end">
                                <button class="themeBtn rounded">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
