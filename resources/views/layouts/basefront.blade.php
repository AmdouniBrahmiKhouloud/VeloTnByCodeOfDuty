<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('assetsFront/images/logo.png')}}">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assetsFront/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assetsFront/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('assetsFront/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('assetsFront/images/fevicon.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('assetsFront/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assetsFront/css/owl.carousel.min.css')}}">
    <link rel="stylesoeet" href="{{asset('assetsFront/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
<!-- header section start -->
<div class="header_section header_bg">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="{{ url('/') }}" class="logo"><img src="{{asset('assetsFront/images/logo.png')}}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/cycle') }}">Our Cycle</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/news') }}">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/events') }}">Evenements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                </li>
            </ul>
            @guest
            <form class="form-inline my-2 my-lg-0">
                <div class="login_menu">
                    <ul>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{url('/carte')}}"><img src="{{asset('assetsFront/images/trolly-icon.png')}}"></a></li>
                        <li><a href="#"><img src="{{asset('assetsFront/images/search-icon.png')}}"></a></li>
                    </ul>
                </div>
                <div></div>
            </form>
            @else
                <form class="form-inline my-2 my-lg-0">
                    <div class="login_menu">
                        <ul>
                            <li><a href="{{ url('/profile') }}">My Profile</a></li>
                            <li><a href="{{url('/carte')}}"><img src="{{asset('assetsFront/images/trolly-icon.png')}}"></a></li>
                        </ul>
                    </div>
                    <div></div>
                </form>
            @endguest
        </div>
        <div id="main">
            <span style="font-size:36px;cursor:pointer; color: #fff" onclick="openNav()"><img src="{{asset('assetsFront/images/toggle-icon.png')}}" style="height: 30px;"></span>
        </div>
    </nav>
    <!-- banner section start -->
    <div class="banner_section layout_padding">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="best_text">Best</div>
                                <div class="image_1"><img src="{{asset('assetsFront/images/img-1.png')}}"></div>
                            </div>
                            <div class="col-md-5">
                                <h1 class="banner_taital">New Model Cycle</h1>
                                <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content </p>
                                <div class="contact_bt"><a href="contact.html">Shop Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="best_text">Best</div>
                                <div class="image_1"><img src="{{asset('assetsFront/images/img-1.png')}}"></div>
                            </div>
                            <div class="col-md-5">
                                <h1 class="banner_taital">New Model Cycle</h1>
                                <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content </p>
                                <div class="contact_bt"><a href="contact.html">Shop Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="best_text">Best</div>
                                <div class="image_1"><img src="{{asset('assetsFront/images/img-1.png')}}"></div>
                            </div>
                            <div class="col-md-5">
                                <h1 class="banner_taital">New Model Cycle</h1>
                                <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content </p>
                                <div class="contact_bt"><a href="contact.html">Shop Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
    <!-- banner section end -->
</div>
<!-- header section end -->
<!-- Content -->

@yield('Content')

<!-- / Content -->
<!-- footer section start -->

<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
    <div class="container">
        <p class="copyright_text"> ©<script>
                document.write(new Date().getFullYear());
            </script>
            , made with ❤️ by
            CodeOfDuty</p>
    </div>
</div>
<!-- copyright section end -->
<!-- Javascript files-->
<script src="{{asset('assetsFront/js/jquery.min.js')}}"></script>
<script src="{{asset('assetsFront/js/bootstrap.bundle.min.js')}}"></script>
<script src=""></script>
<script src="{{asset('assetsFront/js/jquery-3.0.0.min.js')}}"></script>
<script src="{{asset('assetsFront/js/plugin.js')}}"></script>
<!-- sidebar -->
<script src="{{asset('assetsFront/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assetsFront/js/custom.js')}}"></script>
<!-- javascript -->
<script src="{{asset('assetsFront/js/owl.carousel.js')}}"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";

    }

    $("#main").click(function(){
        $("#navbarSupportedContent").toggleClass("nav-normal")
    })
</script>
</body>
</html>
