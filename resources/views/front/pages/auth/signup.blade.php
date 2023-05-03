@extends('front.layouts.app')

@section('title', 'Signup')
@section('description', '')
@section('keywords', '')

@section('content')

    <!-- Begin: Main Slider -->
    <section class="main-slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    @if($sliderContent = $data->where('slug', 'sign-up-main-slider')->first())
                        <div class="main-wrapper wow fadeInDown">
                            <div class="logoWrap">
                                <a href="{{route('pages.home')}}" class="wow fadeInDown" data-wow-delay="0.8s">
                                    <img src="{{asset($sliderContent->content['figure1']['value'])}}" alt="">
                                </a>
                            </div>
                            <div class="swiper mainSlider wow fadeInDown" data-wow-delay="0.8s">
                                <div class="swiper-wrapper">
                                    {{--                                <div class="swiper-slide">--}}
                                    <div class="w-100">
                                        <figure><img src="{{asset($sliderContent->content['figure2']['value'])}}"
                                                     class="w-100"
                                                     alt=""></figure>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- END: Main Slider -->



    <section class="signUpPage">
        <div class="container-lg">
            <div class="row jcc">
                <div class="col-md-12 ">
                    @if($sliderContent = $data->where('slug', 'sign-up-signUpPage')->first())
                        <div class="content">
                            <h2 class="heading">{{$sliderContent->content['h2']['value']}}</h2>
                            <ul>
{{--                                {{dd(collect($sliderContent->content['ul'])->chunk(3, function ($c) {}))}}--}}
{{--                                @php--}}
{{--                                    $li_chunks = collect($sliderContent->content['ul'])->chunk(3, function ($c) {}) ?? [];--}}
{{--                                @endphp--}}

                                @foreach($sliderContent->content['ul'] as $li)
                                    @if(!is_null($li['value']) && $li['value'] !== '<br>')
                                        {!! $li['value'] !!}
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="formWrap">
                        <form action="{{route('user.register')}}" class="w-100" method="POST">
                            @csrf
                            <h3>Everyone must fill out this section</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">First Name<span>*</span></label>
                                        <input type="text"
                                               class="form-control @error('first_name') is-invalid @enderror"
                                               placeholder="First Name" name="first_name" required autofocus>

                                        @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Last Name<span>*</span></label>
                                        <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                               placeholder="Last Name" name="last_name" required>
                                        @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Home Address</label>
                                        <input type="text" class="form-control @error('address') is-invalid @enderror"
                                               placeholder="Address" name="address">
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">ZipCode</label>
                                        <input type="text" class="form-control @error('zipcode') is-invalid @enderror"
                                               placeholder="Zipcode" name="zipcode">
                                        @error('zipcode')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                               placeholder="Email Address" name="email"
                                               pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,63}$">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                               onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"
                                               placeholder="Phone Number" name="phone">
                                        @error('phone')10
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Username<span>*</span></label>
                                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                                               placeholder="Username" name="username" required>
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Password<span>*</span></label>
                                        <input type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               placeholder="***********" name="password" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Affiliation<span>*</span></label>
                                        <select name="affiliation[]"
                                                class="form-control @error('affiliation') is-invalid @enderror"
                                                multiple="multiple" id="select_affiliation" required>
                                            <option value="FIRE">FIRE</option>
                                            <option value="EMS">EMS</option>
                                            <option value="LEO">LEO</option>
                                            <option value="Hero Family Member">Hero Family Member</option>
                                            <option value="None (Friend of Public Safety)">None (Friend of Public
                                                Safety)
                                            </option>
                                        </select>
                                        @error('affiliation')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{--                                    <label for="">Affiliation<span>*</span></label>--}}
                                    {{--                                    <div class="btn-group">--}}
                                    {{--                                        <div class="input-radio">--}}
                                    {{--                                            <input type="radio" id="test3" name="affiliation" value="FIRE" required>--}}
                                    {{--                                            <label for="test3">Fire</label>--}}
                                    {{--                                        </div>--}}
                                    {{--                                        <div class="input-radio">--}}
                                    {{--                                            <input type="radio" id="test4" name="affiliation" value="EMS" required>--}}
                                    {{--                                            <label for="test4">EMS</label>--}}
                                    {{--                                        </div>--}}
                                    {{--                                        <div class="input-radio">--}}
                                    {{--                                            <input type="radio" id="test5" name="affiliation" value="LEO" required>--}}
                                    {{--                                            <label for="test5">LEO</label>--}}
                                    {{--                                        </div>--}}
                                    {{--                                        <div class="input-radio">--}}
                                    {{--                                            <input type="radio" id="test6" name="affiliation" value="" required>--}}
                                    {{--                                            <label for="test6">None (Friend of Public Safety)</label>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Status<span>*</span></label>
                                        <select name="affiliation_dropdown[]"
                                                class="form-control @error('affiliation_dropdown') is-invalid @enderror"
                                                multiple="multiple" id="select_affiliation_dropdown" required>
                                            <option value="Not-Applicable">Not Applicable</option>
                                            <option value="Career">Career</option>
                                            <option value="Volunteer">Volunteer</option>
                                            <option value="Active">Active</option>
                                            <option value="Retired">Retired</option>
                                        </select>
                                        @error('affiliation_dropdown')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{--                                    <div class="form-group">--}}
                                    {{--                                        <label for="">Status<span>*</span></label>--}}
                                    {{--                                        <select id="" class="form-control" name="affiliation_dropdown">--}}
                                    {{--                                            <option value="Career">Career</option>--}}
                                    {{--                                            <option value="Volunteer">Volunteer</option>--}}
                                    {{--                                            <option value="Active">Active</option>--}}
                                    {{--                                            <option value="Retired">Retired</option>--}}
                                    {{--                                        </select>--}}
                                    {{--                                    </div>--}}
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Department Associated With</label>
                                        <input type="text" class="form-control" id="department_associated_with"
                                               placeholder="Department" name="department_associated_with">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">State<span>*</span></label>
                                        <select class="form-control @error('state_id') is-invalid @enderror"
                                                name="state_id" id="state_id2" required>
                                            <option value="">Select State</option>
                                            @foreach($states as $state)
                                                <option
                                                    value="{{$state->id}}">{{$state->name . ' (' . $state->business_state->name . ')'}}</option>
                                            @endforeach
                                        </select>
                                        @error('state_id')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">County/City<span>*</span></label>
                                        <select class="form-control @error('city_id') is-invalid @enderror"
                                                name="city_id" id="city_id" required>
                                            <option value="">Select City</option>
                                        </select>
                                        @error('city_id')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="">Family member of First Responder<span>*</span></label>
                                    <div class="btn-group">
                                        <div class="input-radio">
                                            <input type="radio" id="test7" name="first_responder_radio"
                                                   class="first_responder_radio" value="Yes">
                                            <label for="test7">Yes</label>
                                        </div>
                                        <div class="input-radio">
                                            <input type="radio" id="test8" class="first_responder_radio"
                                                   name="first_responder_radio" checked value="No">
                                            <label for="test8">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 name_of_hero_member" hidden>
                                    <div class="form-group">
                                        <label for="">Name of Hero Member</label>
                                        <input type="text" class="form-control name_of_hero_member"
                                               placeholder="Name of Hero Member" name="name_of_hero_member">
                                    </div>
                                </div>
                                <div class="col-sm-12 affiliation_of_hero_member justify-content-end" hidden>
                                    <div class="btn-group">
                                        <div class="input-radio">
                                            <input type="radio" id="affiliation_of_hero_member_1" value="FIRE"
                                                   name="affiliation_of_hero_member"
                                                   class="is_advertising_business" checked>
                                            <label for="affiliation_of_hero_member_1">FIRE</label>
                                        </div>
                                        <div class="input-radio">
                                            <input type="radio" id="affiliation_of_hero_member_2" value="EMS"
                                                   name="affiliation_of_hero_member" class="is_advertising_business"
                                                   required>
                                            <label for="affiliation_of_hero_member_2">EMS</label>
                                        </div>
                                        <div class="input-radio">
                                            <input type="radio" id="affiliation_of_hero_member_3" value="LEO"
                                                   name="affiliation_of_hero_member" class="is_advertising_business"
                                                   required>
                                            <label for="affiliation_of_hero_member_3">LEO</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="">Will you be advertising a business with us?</label>
                                    <div class="btn-group">
                                        <div class="input-radio">
                                            <input type="radio" id="test1" value="1" name="is_advertising_business"
                                                   class="is_advertising_business" required>
                                            <label for="test1">Yes</label>
                                        </div>
                                        <div class="input-radio">
                                            <input type="radio" id="test2" checked value="0"
                                                   name="is_advertising_business" class="is_advertising_business"
                                                   required>
                                            <label for="test2">No</label>
                                        </div>
                                    </div>
                                </div>
{{--                                <div class="col-md-12 mt-3 additional_information_wrappers" hidden>--}}
{{--                                    <h3>Fill out this section if applicable <span>(First Responders Only)</span></h3>--}}
{{--                                </div>--}}
                            </div>
                            <div class="row additional_information_wrappers" hidden>
                                {{--                                <div class="col-sm-6">--}}
                                {{--                                    <div class="form-group">--}}
                                {{--                                        <label for="">State<span>*</span></label>--}}
                                {{--                                        <select class="form-control" id="state_id" name="state_id" id="state_id">--}}
                                {{--                                            @foreach($states as $state)--}}
                                {{--                                                <option--}}
                                {{--                                                    value="{{$state->id}}">{{$state->name . ' (' . $state->business_state->name . ')'}}</option>--}}
                                {{--                                            @endforeach--}}
                                {{--                                        </select>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="themeBtn redBtn">SUBMIT NOW</button>
                                <p class="text-center">Already Have An Account? <a
                                        href="{{route('pages.login')}}">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script>
        $(document).ready(function () {//on business state change
            $('#state_id2').on('change', function () {
                getCitiesByState();
            });

            //on bottom state_id change
            $('#state_id').on('change', function () {
                $('#state_id2').val($(this).val());
                $('#state_id2').trigger('change');
            });

            //init select2
            $('#select_affiliation').select2({
                placeholder: 'Select Affiliation'
            });
            $('#select_affiliation_dropdown').select2({
                placeholder: 'Select Status'
            });
            $($('#select_affiliation_dropdown').parent().find('span')[1]).css('width', '100%');

            //on is_advertising_business change
            $('.is_advertising_business').on('click', function () {
                if ($(this).val() == 0) {
                    $('.additional_information_wrappers').prop('hidden', true);
                    $('#select_affiliation_dropdown').prop('required', false);
                    // $('#department_associated_with').prop('required', false);
                    $('#state_id').prop('required', false);
                    $('.first_responder_radio').prop('required', true);
                }
                if ($(this).val() == 1) {
                    $('.additional_information_wrappers').prop('hidden', false);
                    $('#select_affiliation_dropdown').prop('required', true);
                    // $('#department_associated_with').prop('required', true);
                    $('#state_id').prop('required', true);
                    $('.first_responder_radio').prop('r' +
                        'equired', false);
                }
            });

            //on first_responder_radio click
            $('.first_responder_radio').on('click', function () {
                $('.name_of_hero_member').val('');
                if ($(this).val() == 'Yes') {
                    $('.name_of_hero_member').prop('hidden', false);
                    $('.affiliation_of_hero_member').prop('hidden', false).addClass('d-flex');
                    $('.name_of_hero_member').prop('required', true);
                } else {
                    $('.name_of_hero_member').prop('hidden', true);
                    $('.affiliation_of_hero_member').prop('hidden', true).removeClass('d-flex');
                    $('.name_of_hero_member').prop('required', false);
                }
            });

            function getCitiesByState() {
                $('#city_id').html('<option value="">Select City</option>');
                if ($('#state_id').val() == '') {
                    return
                }

                var url = '{{route('pages.getCityByStates', 'temp')}}';
                var selectedEl = $('#state_id2').find(":selected");
                url = url.replace('temp', selectedEl.val());
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function (data) {
                        data.forEach(function (item) {
                            $('#city_id').append('<option value="' + item.id + '">' + item.name + '</option>');
                        });
                    },
                    error: function () {

                    }
                });
            }
        });
    </script>
@endsection
