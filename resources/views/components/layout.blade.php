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
                        <a href="#">
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
                <div class="col-lg-2 col-md-2 col-sm-3 hidden-xs hidden-sm">
                    <div class="dropdown">
                        <a data-toggle="dropdown" href="#" class="user-area">
                            <div class="thumb">
                                <img src="https://s.gravatar.com/avatar/ee561b770bfade20798025cb8d4d2759?s=80">
                            </div>
                            <h2>امیررضا جانانفر</h2>
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
                                    <i class="fa fa-sign-out color-4"></i>
                                    خروج
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="main-category">
        <div class="container-full">
            <div class="row">
                <div class="col-md-12">
                    <ul class="main-category-menu">
                        <li class="color-1">
                            <a href="#">
                                <i class="fa fa-music"></i>
                                موسیقی
                            </a>
                        </li>
                        <li class="color-2">
                            <a href="#"><i class="fa fa-soccer-ball-o"></i>
                                ورزشی
                            </a>
                        </li>
                        <li class="color-3">
                            <a href="#"><i class="fa fa-gamepad"></i>
                                بازی
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="site-output">
        <div id="all-output" class="col-md-12">
            {{ $content ?? '' }}
        </div>
    </div>
    @vite(['resources/js/jquery.js', 'resources/js/jquery-sticky-kit.js', 'resources/js/custom.js', 'resources/js/bootstrap-scripts.js', 'resources/js/imagesloaded.js', 'resources/js/grid-blog.js'])
</body>

</html>
