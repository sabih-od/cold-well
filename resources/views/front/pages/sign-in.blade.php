@extends('front.layouts.app')

@section('content')

    <!-- <div class="preLoader black">
        <img src="images/logo.png" alt="img">
    </div>
    <div class="preLoader white"></div> -->


    <section class="pagetitle">
        <div class="container">
            <h1>Sign in</h1>
        </div>
    </section>


    <section class="accountAccesSec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="whitebg">
                        <h2><span>Welcome back!</span>Sign in to your account</h2>
                        <form action="{{ route('userLogin') }}" class="formStyle form-row" method="POST">
                            @csrf
                            <div class="input-group">
                                <label>Email<em>*</em></label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                       placeholder="Enter your Email " name="email" >
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group">
                                <label>Password<em>*</em></label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                       placeholder="********" name="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group justify-content-sm-between align-items-sm-center">
                                <button class="themeBtn rounded" type="submit" >Sign In</button>
                                <a href="{{route('resetPasswordEmail') , }}" class="forgetPass">Forgot my password</a>
                            </div>
                        </form>
                        <div class="or"><span>or</span></div>
                        <ul class="list-unstyled socialIo justify-content-center mb-4">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                        <p>Don’t have an account? <a href="{{route('createAccount')}}">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
