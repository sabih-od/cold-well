<div class="left-side-bar">
    <div class="brand-logo">
        <a href="#">

            <img src="{{asset('images/logo.png')}}" alt="" class="light-logo ms-4">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="{{route('dashboard.home')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                    </a>
                </li>
               <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-edit2"></span><span class="mtext">CMS</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('cms.home') }}">Home</a></li>
                        <li><a href="{{ route('cms.about') }}">About Us</a></li>
                        <li><a href="{{route('cms.services')}}">Our Services</a></li>
{{--                        <li><a href="{{route('cms.blogs')}}">Blog</a></li>--}}
{{--                        <li><a href="{{ route('cms.faqs') }}">Faqs</a></li>--}}
{{--                        <li><a href="{{ route('cms.fee.schedule') }}">Fee Schedule</a></li>--}}
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Settings</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('cms.settings') }}">General Settings</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('subscriber.List') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-house"></span><span class="mtext">Subscribers</span>
                    </a>
                </li>
{{--                <li>--}}
{{--                    <a href="{{ route('index.blog') }}" class="dropdown-toggle no-arrow">--}}
{{--                        <span class="micon dw dw-house"></span><span class="mtext">Add Blog</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="{{route('index.service')}}" class="dropdown-toggle no-arrow">--}}
{{--                        <span class="micon dw dw-edit-2"></span><span class="mtext">Add Services</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li>
                    <a href="{{route('review.index')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-edit-2"></span><span class="mtext">Reviews</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>
