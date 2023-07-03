@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
@endphp

<div class="left_sidebar">
    <nav class="sidebar">
        <div class="user-info">
            <div class="image"><a href="javascript:void(0);"><img src="{{ asset('backend/assets/images/user.png') }}" alt="User"></a></div>
            <div class="detail mt-3">
                <h5 class="mb-0">{{ Auth::user()->name }}</h5>
                <small>{{ Auth::user()->email }}</small>
            </div>
            <div class="social">
                <a href="javascript:void(0);" title="facebook"><i class="ti-twitter-alt"></i></a>
                <a href="javascript:void(0);" title="twitter"><i class="ti-linkedin"></i></a>
                <a href="javascript:void(0);" title="instagram"><i class="ti-facebook"></i></a>
            </div>
        </div>
        <ul id="main-menu" class="metismenu">
            <li class="g_heading">Main</li>

            <li  class="{{ ($route == 'dashboard')?'active':'' }}"><a href="{{ route('dashboard') }}"><i class="ti-home"></i><span>Dashboard</span></a></li>

            @if(Auth::user()->category == 1)
            <li class="{{ ($prefix == '/category')?'active':'' }}">
                <a href="javascript:void(0)" class="has-arrow"><i class="ti-pie-chart"></i><span>Categories</span></a>
                <ul>
                    <li class="{{ ($route == 'category.view')?'active':'' }}"><a href="{{ route('category.view') }}">Category</a></li>
                    <li class="{{ ($route == 'subcategory.view')?'active':'' }}"><a href="{{ route('subcategory.view') }}">Sub-Category</a></li>
                </ul>
            </li>
            @else
            @endif

            @if(Auth::user()->post == 1)
            <li>
                <a href="javascript:void(0)" class="has-arrow"><i class="ti-pencil-alt"></i><span>Posts</span></a>
                <ul>
                    <li><a href="{{ route('post.view') }}">All Post</a></li>
                </ul>
            </li>
            @else
            @endif


            @if(Auth::user()->ads == 1)
            <li>
                <a href="{{ route('ads.view') }}"><i class="ti-na"></i><span>Advertisement</span></a>
             </li>
             @else
             @endif


             @if(Auth::user()->setting == 1)
             <li>
                <a href="javascript:void(0)" class="has-arrow"><i class="ti-view-list"></i><span>Settings</span></a>
                <ul>
                    <li><a href="{{ route('social.setting') }}">Social Media Settings</a></li>
                    <li><a href="{{ route('seo.setting') }}">SEO Settings</a></li>
                    <li><a href="{{ route('livetv.setting') }}">Live Tv Settings</a></li>
                    <li><a href="{{ route('notice.setting') }}">Notice Setting </a></li>
                    <li><a href="{{ route('website.view') }}">Website Links </a></li>
                </ul>
            </li>
            @else
            @endif


            @if(Auth::user()->gallery == 1)
            <li>
                <a href="{{ route('gallery.view') }}"><i class="ti-file"></i><span>Gallery</span></a>
            </li>
            @else
            @endif


            @if(Auth::user()->video == 1)
             <li>
                <a href="{{ route('video.view') }}"><i class="ti-clipboard"></i><span>Video</span></a>
            </li>
            @else
            @endif


            @if(Auth::user()->role == 1)
             <li class="open-top">
                <a href="{{ route('roles.view') }}"><i class="ti-lock"></i><span>User Role</span></a>
            </li>
            @else
            @endif

            @if(Auth::user()->website == 1)
            <li>
                <a href="{{ route('websetting.settings') }}"><i class="ti-menu-alt"></i><span>Website Settings</span></a>
            </li>
            @else
            @endif











            {{-- <li class="open-top">
                <a href="javascript:void(0)" class="has-arrow"><i class="ti-na"></i><span>Error Pages</span></a>
                <ul>
                    <li><a class="dropdown-item" href="error-400.html">400 error</a></li>
                    <li><a class="dropdown-item" href="error-401.html">401 error</a></li>
                    <li><a class="dropdown-item" href="error-403.html">403 error</a></li>
                    <li><a class="dropdown-item" href="error-404.html">404 error</a></li>
                    <li><a class="dropdown-item" href="error-500.html">500 error</a></li>
                    <li><a class="dropdown-item" href="error-503.html">503 error</a></li>
                </ul>
            </li>
            <li class="g_heading">Extra</li>
            <li class="open-top">
                <a href="javascript:void(0)" class="has-arrow"><i class="ti-clipboard"></i><span>Pages</span></a>
                <ul>
                    <li><a href="page-empty.html">Empty page</a></li>
                    <li><a href="page-pricing.html">Pricing cards</a>
                    <li><a href="page-search.html">Search Results</a></li>
                    <li><a href="page-testimonials.html">Testimonials</a></li>
                    <li><a href="page-maps.html">Maps</a></li>
                    <li><a href="page-icons.html">Icons</a></li>
                    <li><a href="page-carousel.html">Carousel</a></li>
                    <li><a href="page-gallery.html">Gallery</a></li>
                    <li><a href="page-lookup.html">Lookup</a></li>
                </ul>
            </li>
            <li><a href="../docs/introduction.html"><i class="ti-file"></i><span>Documentation</span></a></li> --}}



            {{-- <li class="g_heading">Users Roles</li>
            <li><a href="#"><i class="ti-user"></i><span>Add Writer</span></a></li>
            <li><a href="#"><i class="ti-menu-alt"></i><span>All Writer</span></a></li> --}}
        </ul>
    </nav>
</div>
