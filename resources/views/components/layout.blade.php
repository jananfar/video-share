<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    @vite(['resources/css/bootstrap.css', 'resources/css/style.css', 'resources/css/responsive.css'])
</head>

<body>
    <header>
        <div class="container-full">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <a id="main-category-toggler" class="hidden-md hidden-lg hidden-md" href="#">
                        <i class="fa fa-navicon"></i>
                    </a>
                    <a id="main-category-toggler-close" class="hidden-md hidden-lg hidden-md" href="#">
                        <i class="fa fa-close"></i>
                    </a>
                    <div id="logo">
                        <a href="{{ route('index') }}">
                            <img src="{{ Vite::asset('resources/img/logo.png') }}">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs hidden-sm">
                    <div class="search-form">
                        <form id="search" action="#" method="post">
                            <input type="text" placeholder="جستجو در سایت...">
                            <input type="submit" value="Keywords">
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-5 hidden-xs hidden-sm"></div>
                <div class="col-lg-2 col-md-2 col-sm-4 hidden-xs hidden-sm"></div>
                @auth
                <div class="col-lg-2 col-md-2 col-sm-3 hidden-xs hidden-sm">
                    <div class="dropdown">
                        <a data-toggle="dropdown" href="#" class="user-area">
                            <div class="thumb">
                                <img src="{{ auth()->user()->gravatar }}">
                            </div>
                            <h2>{{ auth()->user()->name }}</h2>
                            <h3>25 اشتراک</h3>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu account-menu">
                            <li>
                                <a href="#">
                                    <i class="fa fa-edit color-1"></i>
                                    ویرایش پروفایل
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-video-camera color-2"></i>
                                    اضافه کردن فیلم
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star color-3"></i>
                                    برگزیده
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <i class="fa fa-sign-out color-4"></i>
                                        <button type="submit" style="border: none;background-color: transparent;">
                                            خروج
                                        </button>
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                @endauth
                @guest
                <a href="{{ route('login') }}">
                    <button class="btn btn-danger">@lang('register.login')</button>
                </a>
                <a href="{{ route('register') }}">
                    <button class="btn btn-danger">@lang('register.register')</button>
                </a>
                @endguest
            </div>
        </div>
    </header>
    <x-header-menu />
    @if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
    @endif
    <div class="site-output">
        <div id="all-output" class="col-md-12">
            {{ $content ?? '' }}
        </div>
    </div>
    @vite(['resources/js/jquery.js', 'resources/js/jquery-sticky-kit.js', 'resources/js/custom.js', 'resources/js/bootstrap-scripts.js', 'resources/js/imagesloaded.js', 'resources/js/grid-blog.js'])
</body>

</html>