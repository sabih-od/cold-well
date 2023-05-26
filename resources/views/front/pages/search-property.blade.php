@extends('front.layouts.app')

@section('content')
    <!-- <div class="preLoader black">
        <img src="images/logo.png" alt="img">
    </div>
    <div class="preLoader white"></div> -->

    {{--    @dd($properties);--}}


    <section class="pagetitle">
        <div class="container">
            <h1>Search Properties</h1>
        </div>
    </section>

    <!-- Feature Section -->
    <section class="feature-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="heading text-uppercase">Search Properties</h2>
                    <p>Lorem dolor sit amet, disse suscipit sagittis leo sitea.</p>
                </div>
                <form class="searchProperty">
                    <div class="search-group">
                        <i class="fas fa-search"></i>
                        <input type="text" id="searchInput" class="form-control" placeholder="Search here" name="search"
                               value="{{ request()->get('search') }}">
                        {{--                        <input type="text" class="form-control" placeholder="Search here" name="search" >--}}
                    </div>
                    <select name="total_bedrooms" value="Beds" id="totalBedrooms" class="form-control">
                        <option selected disabled>bed</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <select name="total_bathrooms" value="Bath" id="totalBathdrooms" class="form-control select1">
                        <option selected disabled>bath</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <select name="" id="" class="form-control select2">
                        <option value="">Price Range</option>
                    </select>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-sliders-h"></i> More Filters
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <label>Square Feet</label>
                            <div class="d-flex align-items-center">
                                <select name="" id="" class="form-control">
                                    <option value="">Any Beds</option>
                                </select>
                                <span>to</span>
                                <select name="" id="" class="form-control">
                                    <option value="">Any Beds</option>
                                </select>
                            </div>
                            <label>Lot Size</label>
                            <div class="d-flex align-items-center">
                                <select name="" id="" class="form-control">
                                    <option value="">Any Beds</option>
                                </select>
                                <span>to</span>
                                <select name="" id="" class="form-control">
                                    <option value="">Any Beds</option>
                                </select>
                            </div>
                            <label>Status</label>
                            <div class="d-flex align-items-start">
                                <label for="active">
                                    <input type="checkbox" checked id="active"> Active
                                </label>
                                <label for="pending">
                                    <input type="checkbox" id="pending"> Pending/Under Contract
                                </label>
                            </div>
                            <label>Property Type</label>

                            <div class="d-flex">
                                <label for="single">
                                    <input type="checkbox" checked id="single"> Single Family
                                </label>
                                <label for="Condo">
                                    <input type="checkbox" id="Condo"> Condo/Townhouse
                                </label>
                                <label for="multi">
                                    <input type="checkbox" id="multi"> Multi Family
                                </label>
                                <label for="land">
                                    <input type="checkbox" id="land"> Land
                                </label>
                            </div>
                            <div>
                                <button type="button" class="btn themeBtn btn1">View Advanced Filters</button>
                            </div>
                            <div class="d-flex">
                                <button type="button" class="btn themeBtn">Reset Filters</button>
                                <button type="button" class="btn themeBtn btn3">View Listings</button>

                            </div>
                        </div>
                    </div>

                    <div class="ml-auto">
                        <button class="clear-filter-btn" onclick="clearSearchValue()">Clear Filter</button>

                        <button class="themeBtn" href="{{ route('filter') }}">Search Now</button>
                    </div>
                </form>
            </div>
            @if(count($properties) == 0)
                <h4>No Properties Found!!!</h4>
            @else
                <div class="featureproduct mt-4">
                    <div class="row">

                        @foreach($properties as $property)

                            {{--                        <a href="{{route('propertyDetail' , $property->id)}}">--}}
                            <div class="col-md-3 mb-4"
                                 onclick="window.location.href = '{{ route('propertyDetail' , $property->id )}}'">
                                <div class="card searchcard">
                                    <div class="card-header">
                                        <span class="badge badge-primary">Feature</span>
                                        <span class="badge badge-secondary">For Rent</span>
                                    </div>
                                    <img
                                        src="{{$property->hasMedia('images') ? $property->getFirstMedia('images')->getUrl() : asset('images/single-property-01.jpg')}}"
                                        alt="">
                                    <div class="card-footer">
                                        <a href="#" class="p">{{ $property->property_address ?? '' }}</a>
                                        <a href="#" class="h5 m-0">{{ $property->property_name ?? '' }}</a>
                                        <p class="price"><b>$ {{ $property->price ?? '' }}</b> / month</p>
                                        <div class="featureOption">
                                            <span><i
                                                    class="fas fa-bed"></i> {{ $property->total_bedrooms ?? ''}} Br</span>
                                            <span><i class="fas fa-shower"></i> {{ $property->total_bathrooms ?? ''}} Ba</span>
                                            <span><i class="fas fa-table"></i> {{ $property->total_sq_feet ?? ''}} SqFt</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--                        </a>--}}
                        @endforeach


                        {{--                    <div class="col-md-3 mb-4">--}}
                        {{--                        <div class="card searchcard">--}}
                        {{--                            <div class="card-header">--}}
                        {{--                                <span class="badge badge-primary">Feature</span>--}}
                        {{--                                <span class="badge badge-secondary">For Rent</span>--}}
                        {{--                            </div>--}}
                        {{--                            <img src="images/feature1.jpeg" alt="">--}}
                        {{--                            <div class="card-footer">--}}
                        {{--                                <a href="#" class="p">288 Foxhall Ave, Kingston</a>--}}
                        {{--                                <a href="#" class="h5 m-0">House In Foxhall Ave, Kingston</a>--}}
                        {{--                                <p class="price"><b>$550</b> / month</p>--}}
                        {{--                                <div class="featureOption">--}}
                        {{--                                    <span><i class="fas fa-bed"></i> 3 Br</span>--}}
                        {{--                                    <span><i class="fas fa-shower"></i> 2 Ba</span>--}}
                        {{--                                    <span><i class="fas fa-table"></i> 900 SqFt</span>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="col-md-3 mb-4">--}}
                        {{--                        <div class="card searchcard">--}}
                        {{--                            <div class="card-header">--}}
                        {{--                                <span class="badge badge-primary">Feature</span>--}}
                        {{--                                <span class="badge badge-secondary">For Rent</span>--}}
                        {{--                            </div>--}}
                        {{--                            <img src="images/feature1.jpeg" alt="">--}}
                        {{--                            <div class="card-footer">--}}
                        {{--                                <a href="#" class="p">288 Foxhall Ave, Kingston</a>--}}
                        {{--                                <a href="#" class="h5 m-0">House In Foxhall Ave, Kingston</a>--}}
                        {{--                                <p class="price"><b>$550</b> / month</p>--}}
                        {{--                                <div class="featureOption">--}}
                        {{--                                    <span><i class="fas fa-bed"></i> 3 Br</span>--}}
                        {{--                                    <span><i class="fas fa-shower"></i> 2 Ba</span>--}}
                        {{--                                    <span><i class="fas fa-table"></i> 900 SqFt</span>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="col-md-3 mb-4">--}}
                        {{--                        <div class="card searchcard">--}}
                        {{--                            <div class="card-header">--}}
                        {{--                                <span class="badge badge-primary">Feature</span>--}}
                        {{--                                <span class="badge badge-secondary">For Rent</span>--}}
                        {{--                            </div>--}}
                        {{--                            <img src="images/feature1.jpeg" alt="">--}}
                        {{--                            <div class="card-footer">--}}
                        {{--                                <a href="#" class="p">288 Foxhall Ave, Kingston</a>--}}
                        {{--                                <a href="#" class="h5 m-0">House In Foxhall Ave, Kingston</a>--}}
                        {{--                                <p class="price"><b>$550</b> / month</p>--}}
                        {{--                                <div class="featureOption">--}}
                        {{--                                    <span><i class="fas fa-bed"></i> 3 Br</span>--}}
                        {{--                                    <span><i class="fas fa-shower"></i> 2 Ba</span>--}}
                        {{--                                    <span><i class="fas fa-table"></i> 900 SqFt</span>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="col-md-3 mb-4">--}}
                        {{--                        <div class="card searchcard">--}}
                        {{--                            <div class="card-header">--}}
                        {{--                                <span class="badge badge-primary">Feature</span>--}}
                        {{--                                <span class="badge badge-secondary">For Rent</span>--}}
                        {{--                            </div>--}}
                        {{--                            <img src="images/feature1.jpeg" alt="">--}}
                        {{--                            <div class="card-footer">--}}
                        {{--                                <a href="#" class="p">288 Foxhall Ave, Kingston</a>--}}
                        {{--                                <a href="#" class="h5 m-0">House In Foxhall Ave, Kingston</a>--}}
                        {{--                                <p class="price"><b>$550</b> / month</p>--}}
                        {{--                                <div class="featureOption">--}}
                        {{--                                    <span><i class="fas fa-bed"></i> 3 Br</span>--}}
                        {{--                                    <span><i class="fas fa-shower"></i> 2 Ba</span>--}}
                        {{--                                    <span><i class="fas fa-table"></i> 900 SqFt</span>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="col-md-3 mb-4">--}}
                        {{--                        <div class="card searchcard">--}}
                        {{--                            <div class="card-header">--}}
                        {{--                                <span class="badge badge-primary">Feature</span>--}}
                        {{--                                <span class="badge badge-secondary">For Rent</span>--}}
                        {{--                            </div>--}}
                        {{--                            <img src="images/feature1.jpeg" alt="">--}}
                        {{--                            <div class="card-footer">--}}
                        {{--                                <a href="#" class="p">288 Foxhall Ave, Kingston</a>--}}
                        {{--                                <a href="#" class="h5 m-0">House In Foxhall Ave, Kingston</a>--}}
                        {{--                                <p class="price"><b>$550</b> / month</p>--}}
                        {{--                                <div class="featureOption">--}}
                        {{--                                    <span><i class="fas fa-bed"></i> 3 Br</span>--}}
                        {{--                                    <span><i class="fas fa-shower"></i> 2 Ba</span>--}}
                        {{--                                    <span><i class="fas fa-table"></i> 900 SqFt</span>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="col-md-3 mb-4">--}}
                        {{--                        <div class="card searchcard">--}}
                        {{--                            <div class="card-header">--}}
                        {{--                                <span class="badge badge-primary">Feature</span>--}}
                        {{--                                <span class="badge badge-secondary">For Rent</span>--}}
                        {{--                            </div>--}}
                        {{--                            <img src="images/feature1.jpeg" alt="">--}}
                        {{--                            <div class="card-footer">--}}
                        {{--                                <a href="#" class="p">288 Foxhall Ave, Kingston</a>--}}
                        {{--                                <a href="#" class="h5 m-0">House In Foxhall Ave, Kingston</a>--}}
                        {{--                                <p class="price"><b>$550</b> / month</p>--}}
                        {{--                                <div class="featureOption">--}}
                        {{--                                    <span><i class="fas fa-bed"></i> 3 Br</span>--}}
                        {{--                                    <span><i class="fas fa-shower"></i> 2 Ba</span>--}}
                        {{--                                    <span><i class="fas fa-table"></i> 900 SqFt</span>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="col-md-3 mb-4">--}}
                        {{--                        <div class="card searchcard">--}}
                        {{--                            <div class="card-header">--}}
                        {{--                                <span class="badge badge-primary">Feature</span>--}}
                        {{--                                <span class="badge badge-secondary">For Rent</span>--}}
                        {{--                            </div>--}}
                        {{--                            <img src="images/feature1.jpeg" alt="">--}}
                        {{--                            <div class="card-footer">--}}
                        {{--                                <a href="#" class="p">288 Foxhall Ave, Kingston</a>--}}
                        {{--                                <a href="#" class="h5 m-0">House In Foxhall Ave, Kingston</a>--}}
                        {{--                                <p class="price"><b>$550</b> / month</p>--}}
                        {{--                                <div class="featureOption">--}}
                        {{--                                    <span><i class="fas fa-bed"></i> 3 Br</span>--}}
                        {{--                                    <span><i class="fas fa-shower"></i> 2 Ba</span>--}}
                        {{--                                    <span><i class="fas fa-table"></i> 900 SqFt</span>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                    </div>
                </div>

            @endif
        </div>
    </section>
    <!-- ! Feature Section -->

    <script>
        function clearSearchValue() {
            document.getElementById('searchInput').value = '';
            document.getElementById('totalBathdrooms').value = '';
            document.getElementById('totalBeddrooms').value = '';
            location.reload();
        }
    </script>

@endsection
