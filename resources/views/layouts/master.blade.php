<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <!--Css-->
    <link href="{{ asset('templates/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templates/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templates/css/cart.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templates/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templates/lightslider/css/lightslider.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('templates/css/jcarousel.responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto&amp;subset=latin,vietnamese' rel='stylesheet'
        type='text/css'>
    @section('style')
    {{-- custom style for each page --}}
    @show
    <!--Javascipt-->
    <script type="text/javascript">
        var base_url = 'index.html';

    </script>
    <script src="{{ asset('templates/js/jquery.min.js') }}"></script>
    <script src="{{ asset('templates/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('templates/js/function.js') }}"></script>
    <!--<script src="templates/js/jquery.lazyload.js"></script>-->
    <script src="{{ asset('templates/js/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('templates/lightslider/js/lightslider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('templates/js/jquery.ellipsis.js') }}" type="text/javascript"></script>
    <script src="{{ asset('templates/js/book.js') }}" type="text/javascript"></script>

    <script src="{{ asset('templates/js/jquery.vticker.min.js') }}" type="text/javascript"></script>
    <!--<script src="templates/js/jquery.fancybox.js" type="text/javascript"></script>-->
    <script src="{{ asset('templates/js/jquery.jcarousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('templates/js/jcarousel.responsive.js') }}" type="text/javascript"></script>
    <script src="{{ asset('templates/js/dnx.js') }}" type="text/javascript"></script>


    <title>Du lịch My Tour - hệ thống đặt tour du lịch Việt Nam chất lượng 2019</title>

    {{-- <script src="../apis.google.com/js/platform.js" async defer></script> --}}

    <div id="fb-root"></div>
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            // js.src = "../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>

    <link rel="canonical" href="{{url('/')}}" />
</head>
@include("layouts.menu_wrap")

<body>
    <!-- header -->
    @include("layouts.header_top")
    <div class="col-lg-6 col-md-6 col-sm-6">
        @if (Route::has('login'))
        <ul>
            @auth
            <li><a href="{{ url('/information') }}">Chào {{ Auth::user()->ten_hien_thi }}</a></li>
            <li><a href="{{ route('logout') }}">Thoát!</a></li>
            @else
            <li><a href="{{url('login')}}">Đăng nhập</a></li>
            <li><a href="{{url('register')}}">Đăng kí</a></li>
            @endauth
        </ul>
        @endif
    </div>
    </div>
    </div>
    </div>
    <header>
        <div class="container" style="position: relative">

            <span class="main_menu_btn">
                <i class="fa fa-2x fa-bars"></i>
            </span>

            <div class="headerLeft">
                <div class="boxLogo">
                    <a title="HaTinh" href="{{url('/')}}">
                        <img alt="Dịch vụ du lịch My Tour hệ thống đặt tour du lịch Việt Nam chất lượng 2019"
                            src="{{ asset('templates/images/top.png') }}" />
                    </a>
                </div>
            </div>
            @include("layouts.headerRight")
            <div class="clearfix"></div>
        </div>
    </header>
    <!-- end header -->

    <!--wrapper-->
    <div class="container">
        <div id="wrapper">
            <div class="row" id="header-bottom">
                <div class="col-lg-3 col-md-3">
                    <script type="text/javascript">
                        $(document).ready(function () {
                            //box-support -------------------------------
                            var cat = $('.product_cate');
                            $('.btn_cat').click(function (event) {

                                event.preventDefault();
                                // if the menu is visible slide it up
                                if (cat.is(":visible")) {
                                    cat.slideUp(400);
                                    //$(this).removeClass("open");
                                }
                                // otherwise, slide the menu down
                                else {
                                    cat.slideDown(400);
                                    //$(this).addClass("open");
                                }
                            });


                            $(".hide1").click(function () {
                                $(this).parent().find("#sup_cate").hide(50);
                                $(this).parent().find(".show1").show();
                                $(this).parent().find(".hide1").hide();
                            });
                            $(".show1").click(function () {
                                $(this).parent().find("#sup_cate").show(10, 'swing');
                                $(this).hide();
                                $(this).parent().find(".hide1").show();
                            });



                        });

                    </script>
                    @include("layouts.main_pro_cate")
                    <div class="clearfix"></div>

                </div>
            </div>
            @include("layouts.slider")
        </div>
    </div>
    </div>

    <div class="pageContent">
        @yield('Content')
    </div>

    </div>
    </div>
    @include("layouts.footer")
    @section('script')
    @show
</body>

</html>
