<div class="headerRight">
            <div class="row">
                <div class="navi col-lg-6">
                    <div class="main_nav">
                        <ul>
                            <li class="active">
                                <a  href="{{url('/')}}">
                                    <p>Trang chủ</p>
                                    <img width="40px" src="templates/images/home.png"/>
                                </a>
                            </li>
                            <li >
                                <a  href="{{url('tour')}}">
                                    <img width="40px" src="templates/images/tour.png"/>
                                    <p>Tour</p>
                                </a>
                            </li>

                            <li 1 >
                                <a  href="{{url('news')}}">
                                    <p>Tin tức</p>
                                    <img width="40px" src="templates/images/tin-tuc1467729692.png"/>
                                </a>
                                <ul class="nav_sub">
                                    <li class="top"></li>
                                    <li><a href="tin-tuc/tin-tuc-khuyen-mai.html">Tin tức khuyến mãi</a></li>
                                    <li><a href="tin-tuc/tin-tuc-du-lich.html">Tin tức du lịch</a></li>
                                    <li><a href="tin-tuc/homestay-danh-cho-ban.html">Homestay dành cho bạn</a></li>
                                </ul>
                            </li>
                            <li 0 >
                                <a  href="{{url('food')}}">
                                    <img width="40px" src="templates/images/am-thuc1467729704.png"/>
                                    <p>Ẩm thực</p>
                                </a>
                            </li>
                            <li >
                                <a  href="{{url('/contact')}}">
                                    <p>Liên hệ</p>
                                    <img width="40px" src="templates/images/lienhe.png"/>
                                </a>
                            </li>                     
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <style type="text/css">
                        .main_nav{margin-top: 20px;  background-image: url("templates/images/bg_nav.png"); background-repeat: no-repeat  }
                        .main_nav>ul>li{
                            float: left;
                            padding: 10px 0px;
                            width: 100px;
                            position: relative;
                        }

                        .main_nav>ul>li>a{text-align: center; display: block; }
                        .main_nav>ul>li>a>img{border: #f59534 solid 1px; border-radius: 50%; padding: 5px; transition: all linear 0.3s}
                        .main_nav>ul>li>a>p{font-size: 14px;color: #36d622; text-transform: uppercase; font-weight: 700}    

                        .main_nav>ul>li>a:hover img{transform: rotate(360deg); -webkit-transition:all linear 0.3s}

                        .main_nav>ul>li:hover .nav_sub{display: block;}
                        .main_nav ul.nav_sub{
                            position: absolute;
                            border: solid 1px #e5e5e5;
                            left: 9%;
                            top: 100%;
                            background-color: #fff;
                            z-index: 99;
                            padding: 5px 15px;
                            display: none;
                        }
                        .main_nav ul.nav_sub>li.top{
                            background-image: url("templates/images/icon-submenu.png");
                            background-position: center top;
                            background-repeat: no-repeat;
                            height: 9px;
                            left: 28px;
                            position: absolute;
                            top: -9px;
                            width: 19px;
                        }

                        ul.nav_sub>li{
                            white-space: nowrap;
                            line-height: 20px;
                            padding: 5px 0;
                            font-size: 15px;
                        }
                        nav>ul>li>ul.nav_sub>li>a{
                            color: #333;
                        }

                    </style>                </div>

                    <div class="row row_search col-lg-6">
                        <div class="row">
                            <div class="hot_line_box col-lg-6 col-md-6">
                                <div class="mobile">
                                    <i class="ico_mobile"></i>
                                    <div class="ico_text">
                                        <span>Hotline</span>
                                        <p><a href="tel:(+84) 974 818 106">(+84) 974 818 106</a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="email">
                                    <i class="ico_email"></i>
                                    <div class="ico_text">
                                        <span>Email liên hệ</span>
                                        <p><a href="mailto:kinhdoanh@danangxanh.com">kinhdoanh@danangxanh.com</a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>


                            <div class="box_seach col-lg-6 col-md-6 col-xs-12 no_padding_r">
                                <ul class="social_tool">
                                    <li>
                                        <div class="fb-like" data-href="" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                                    </li>
                                    <li><a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                                        <script>!function(d, s, id){var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location)?'http':'https'; if (!d.getElementById(id)){js = d.createElement(s); js.id = id; js.src = p + '://platform.twitter.com/widgets.js'; fjs.parentNode.insertBefore(js, fjs); }}(document, 'script', 'twitter-wjs');</script>
                                    </li>
                                    <li style="margin-right: -30px !important;">
                                        <div data-size="medium" class="g-plusone"><g:plusone count="true" href="index.html"></g:plusone></div>
                                    </li>
                                    <div class="clearfix"></div>
                                </ul>
                                <form action="tim-kiem.html" method="get">
                                    <div class="form-group">
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 no_padding_r no_padding_l">
                                            <input placeholder="Nhập từ khóa...." class="form-control key" type="text" name="keyword"/>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 no_padding_l no_padding_r">
                                            <button type="submit" class="btn_seach"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>


                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            