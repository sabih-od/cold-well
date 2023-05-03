@extends('include.app')
@section('title', 'About - Mortgage Free Escrow')

@section('content')

    <!-- Begin: Main Slider -->


    <div class="main-slider bgInner">
        <!-- <img class="img-fluid w-100" src="images/innerBnnr.jpg" alt="First slide"> -->
        <div class="carousel-caption">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Account</h1>

                    </div>
                    <div class="col-md-6 text-right">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="#">Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Main Slider -->


    <section class="accountAccesSec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="whitebg">
                        <h2><span>Account</span></h2>
                        <div class="col-md-12 text-left mb-3 text-capitalize">
                            <h5>status</h5>
                            <span>{{isset($customer->user_details_where_key('payment_status')->value) ?
                                    $customer->user_details_where_key('payment_status')->value : ''}}</span>
                        </div>

                        <div class="col-md-12 text-left mb-3 text-capitalize">
                            <h5>next payment date</h5>
                            <span>{{isset($customer->user_details_where_key('next_payment_date')->value) ?
                                    $customer->user_details_where_key('next_payment_date')->value : ''}}</span>
                        </div>

                        <div class="col-md-12 text-left mb-3 text-capitalize">
                            <h5>next payment amount</h5>
                            <span>{{$customer->user_details_where_key('next_payment_amount')->value ?
                                    $customer->user_details_where_key('next_payment_amount')->value : ''}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
