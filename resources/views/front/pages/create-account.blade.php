@extends('front.layouts.app')

@section('content')


    <!-- <div class="preLoader black">
        <img src="images/logo.png" alt="img">
    </div>
    <div class="preLoader white"></div> -->


    <section class="pagetitle">
        <div class="container">
            <h1>Create Account</h1>
        </div>
    </section>


    <section class="accountAccesSec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="whitebg">
                        <h2><span>Create an Account</span></h2>
                        <form action="{{ route('userRegister') }}" class="formStyle form-row" method="POST">
                            @csrf
                            <div class="input-group">
                                <label>First Name<em>*</em></label>
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                       name="first_name">
                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group">
                                <label>Last Name<em>*</em></label>
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                       name="last_name">

                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group">
                                <label>Email Address<em>*</em></label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                       pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,63}$" name="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group">
                                <label>Password<em>*</em></label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                       placeholder="At least 6 characters" name="password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group">
                                <label>Re-enter password<em>*</em></label>
                                <input type="password" class="form-control" placeholder="At least 6 characters"
                                       name="password_confirmation">


                            </div>
                            <div class="input-group justify-content-md-end">
                                <button class="themeBtn rounded">Sign Up</button>
                            </div>
                        </form>
                        <div class="or"><span>or</span></div>
                        <ul class="list-unstyled socialIo justify-content-center mb-4">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                        <p>Already have an account? <a href="{{ route('signIn') }}">SignIn</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
