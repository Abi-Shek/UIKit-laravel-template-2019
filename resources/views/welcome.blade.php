@extends("layout.app")
{{--title--}}
@section('title', 'Page Title')
{{--seo section--}}
@section('copyright','this is demo welcome page')
@section('description','this is description line')
@section('keyword','this is seo keyword line')

{{--end of seo--}}



{{--        <div class="flex-center position-ref full-height">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="top-right links">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}



@section('maincontent')

<div class="uk-container">
    <div class="text-left uk-float-left">
        <p>logo</p>
    </div>
    <div class="text-right uk-float-right">
        <p>contact</p>
    </div>
</div>
<div class="uk-clearfix"></div>
    <nav class="uk-navbar-container" uk-navbar>
        <div class="uk-navbar-center">

            <ul class="uk-navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Destination</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="#">Nepal</a>


{{--                                <div class="uk-navbar-dropdown pos: right-center">--}}
{{--                                    <ul class="uk-nav uk-navbar-dropdown-nav">--}}
{{--                                        <li><a href="#">Day Trip</a></li>--}}
{{--                                        <li><a href="#">Special Trip</a></li>--}}
{{--                                        <li><a href="#">Heli-Tour Package</a></li>--}}
{{--                                        <li><a href="#">pro-adventure package</a></li>--}}

{{--                                    </ul>--}}
{{--                                </div>--}}

                                <div uk-dropdown="pos: right-center">
                                    <ul class="uk-nav uk-dropdown-nav">
                                        <li class="uk-active"><a href="#">Active</a></li>
                                        <li><a href="#">Item</a></li>
                                        <li class="uk-nav-header">Header</li>
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Item</a></li>
                                        <li class="uk-nav-divider"></li>
                                        <li><a href="#">Item</a></li>
                                    </ul>
                                </div>



                            </li>
                            <li><a href="#">India</a></li>
                            <li><a href="#">Tibet</a></li>
                        </ul>
                    </div>                </li>
                <li><a href="#">packages</a>

                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="#">Day Trip</a></li>
                            <li><a href="#">Special Trip</a></li>
                            <li><a href="#">Heli-Tour Package</a></li>
                            <li><a href="#">pro-adventure package</a></li>

                        </ul>
                    </div>
                </li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Blogs</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">contact us</a></li>
            </ul>

        </div>
    </nav>

{{--end of navbar--}}






{{--    banner or slider--}}

<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 4:3; animation: push">

    <ul class="uk-slideshow-items">
        <li>
            <img src="image/banner.jpg" alt="" uk-cover>
        </li>
        <li>
            <img src="image/banner2.jpg" alt="" uk-cover>
        </li>
        <li>
            <img src="image/banner3.jpg" alt="" uk-cover>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>











{{--    end of slider--}}



@endsection
