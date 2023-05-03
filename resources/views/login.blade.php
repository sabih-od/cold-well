@extends('include.app')
@section('title', 'Login - tax-essentials')
@section('content')

    <!-- Begin: Main Slider -->
    <section class="inerBanner">
        <img src="{{asset('images/inerbaner1.jpg')}}" class="img-fluid w-100" alt="img">
        <div class="container">
            <h2>Login</h2>
        </div>
    </section>
    <!-- END: Main Slider -->

    <section class="accountAccesSec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="whitebg">
                        <h2>Fill in your information below to log into your account</h2>
                        <form action="{{ route('login') }}" class="formStyle form-row" method="POST">
                            @csrf
                           <div class="row justify-content-center">
                               <div class="col-12">
                                   <div class="form-group">
                                       <label>Email Address<em>*</em></label>
                                       <input required id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                              name="email" placeholder="Enter your Email">
                                       @error('email')
                                       <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                       @enderror
                                   </div>
                               </div>
                               <div class="col-12">
                                   <div class="form-group">
                                       <label>Password<em>*</em></label>
                                       <input required id="password" type="password"
                                              class="form-control @error('password') is-invalid @enderror" name="password"
                                              placeholder="********">

                                       @error('password')
                                       <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                       @enderror
                                   </div>
                                   <div class="input-group justify-content-sm-between align-items-sm-center">
                                       <button class="themeBtn rounded" type="submit">Sign In</button>
                                       <a href="{{route('forget.password')}}" class="forgetPass">Forgot my password</a>
                                   </div>
                               </div>
                           </div>
                        </form>
                        <div class="or"><span>or</span></div>
                        <p>Don’t have an account? <a href="{{route('get-started')}}">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
