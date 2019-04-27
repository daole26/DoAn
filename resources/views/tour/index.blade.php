@extends('layouts.master')
@section('section')
    <link rel="stylesheet" href="{{ asset('user/css/main.css') }}">
@endsection
@section('Content')
<div class="row">
    <div class="colLeft col-lg-9 col-md-9">
        <!--tour-->
        <div class="tour">
            <h1 style="display: none">Tour du lịch</h1>
            <h2 class="title"><span>Tour du lịch</span></h2>
            <input type="hidden" name="count" value="{{ $count }}">
            <ul class="product_grid white_bg" id="list-tour">
            </ul>
            <li id="item-clone" class="items tour-item col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs1-12" style="display:none;">
                <a title="" href="">
                    <img class="tour_image" title="" alt="" src="" />
                    <span class="product_name"></span>
                </a>
                <div class="price_box">
                    <p><strong class ="ma_tour">Mã tour: </strong></p>
                    <p><strong class="hinh_thuc_tour">Hình thức: </strong></p>
                    <p><strong class="thoi_gian">Thời gian: </strong></p>
                    <p>
                        <strong>Giá: </strong>
                        <span class="product_price"></span>
                    </p>
                </div>
            </li>

            <div class="clearfix"></div>

            <form action="https://dulichdanangxanh.com/tour-du-lich" method="post" accept-charset="utf-8" id="load_more_tour">
                <div class="hidden">
                    <input type="hidden" name="token" value="2c9d6440eb024c398a6c45a5aaa5a5e7" />
                </div>
                <div class="load_more">
                    <input type="hidden" name="offset" class="offset" value="12">
                    <input type="hidden" name='arcat' class="arr_cat" value="" />
                    <h2 class="preloader" style="text-align: center; display: none">
            <img src="https://dulichdanangxanh.com/templates/images/ajax-load.gif"/>
        </h2>
                    <button class="btn_load_more">XEM THÊM</button>
                </div>
            </form>
        </div>
        <!--end tour-->

    </div>

    <div class="colRight col-lg-3 col-md-3">
        <!--Box-->
        <div class="boxItem">
            <div class="box-title">
                <div class="lb-name">Danh mục tour</div>
            </div>

            <div class="cate">
                <ul>
                    <li>
                        <span title="More" class="open" style="display: none"><i class="fa fa-plus plus"></i></span>
                        <span title="Less" class="exit"><i class="fa fa-minus minus"></i></span>
                        <a title="Tour hằng ngày" href="tour-hang-ngay.html">Tour hằng ngày</a>
                        <ul class="sub_cate_tour">
                            <li><a title="Tour Huế" href="tour-hang-ngay/tour-hue.html">Tour Huế</a></li>
                            <li><a title="Tour Bà Nà " href="tour-hang-ngay/tour-ba-na.html">Tour Bà Nà </a></li>
                            <li><a title="Tour Hội An" href="tour-hang-ngay/tour-hoi-an.html">Tour Hội An</a></li>
                            <li><a title="Tour Cù Lao Chàm" href="tour-hang-ngay/tour-cu-lao-cham.html">Tour Cù Lao Chàm</a></li>
                            <li><a title="Tour du lịch Sơn Trà" href="tour-hang-ngay/tour-du-lich-son-tra.html">Tour du lịch Sơn Trà</a></li>
                            <li><a title="Tour tham quan Đà Nẵng" href="tour-hang-ngay/tour-tham-quan-da-nang.html">Tour tham quan Đà Nẵng</a></li>
                            <li><a title="Tour tham quan Bạch Mã" href="tour-hang-ngay/tour-tham-quan-bach-ma.html">Tour tham quan Bạch Mã</a></li>
                            <li><a title="Tour Tắm Bùn Đà Nẵng" href="tour-hang-ngay/tour-tam-bun-da-nang.html">Tour Tắm Bùn Đà Nẵng</a></li>
                        </ul>

                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <span title="More" class="open" style="display: none"><i class="fa fa-plus plus"></i></span>
                        <span title="Less" class="exit"><i class="fa fa-minus minus"></i></span>
                        <a title="Tour Đà Nẵng" href="tour-da-nang.html">Tour Đà Nẵng</a>
                        <ul class="sub_cate_tour">
                            <li><a title="Du lịch Đà Nẵng trong ngày" href="tour-da-nang/du-lich-da-nang-trong-ngay.html">Du lịch Đà Nẵng trong ngày</a></li>
                            <li><a title="Du lịch Đà Nẵng 2 ngày 1 đêm" href="tour-da-nang/du-lich-da-nang-2-ngay-1-dem.html">Du lịch Đà Nẵng 2 ngày 1 đêm</a></li>
                            <li><a title="Du lịch Đà Nẵng 3 ngày 2 đêm" href="tour-da-nang/du-lich-da-nang-3-ngay-2-dem.html">Du lịch Đà Nẵng 3 ngày 2 đêm</a></li>
                            <li><a title="Du lịch Đà Nẵng 4 ngày 3 đêm" href="tour-da-nang/du-lich-da-nang-4-ngay-3-dem.html">Du lịch Đà Nẵng 4 ngày 3 đêm</a></li>
                            <li><a title="Du lịch Đà Nẵng 5 ngày 4 đêm " href="tour-da-nang/du-lich-da-nang-5-ngay-4-dem.html">Du lịch Đà Nẵng 5 ngày 4 đêm </a></li>
                            <li><a title="Du lịch Đà Nẵng 6 ngày 5 đêm" href="tour-da-nang/du-lich-da-nang-6-ngay-5-dem.html">Du lịch Đà Nẵng 6 ngày 5 đêm</a></li>
                        </ul>

                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <span title="More" class="open" style="display: none"><i class="fa fa-plus plus"></i></span>
                        <span title="Less" class="exit"><i class="fa fa-minus minus"></i></span>
                        <a title="Tour nước ngoài" href="tour-nuoc-ngoai.html">Tour nước ngoài</a>
                        <ul class="sub_cate_tour">
                            <li><a title="Tour Singapore Malaysia" href="tour-nuoc-ngoai/tour-singapore-malaysia.html">Tour Singapore Malaysia</a></li>
                            <li><a title="Tour Campuchia" href="tour-nuoc-ngoai/tour-campuchia.html">Tour Campuchia</a></li>
                            <li><a title="Tour Thái Lan" href="tour-nuoc-ngoai/tour-thai-lan.html">Tour Thái Lan</a></li>
                        </ul>

                        <div class="clearfix"></div>
                    </li>
                </ul>
            </div>
        </div>
        <!--End Box-->
        <!--Box-->
        <div class="boxItem">
            <div class="box-title">
                <div class="lb-name">Hỗ trợ trực tuyến</div>
            </div>

            <div class="support">
                <div class="avt">
                    <img alt="avt" title="avt" src="https://dulichdanangxanh.com/data/support/mr-trung1.jpg" />
                </div>
                <div class="content">
                    <span>Tư vấn dịch vụ</span>
                    <p>
                        <a href="skype:#?chat">
                            <i class="fa fa-skype"></i>
                        </a>
                        Mr Trung </p>
                    <p>
                        <i class="glyphicon glyphicon-phone"></i> 0974 818 106 </p>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="support">
                <div class="avt">
                    <img alt="avt" title="avt" src="https://dulichdanangxanh.com/data/support/ms-cao-phuong.png" />
                </div>
                <div class="content">
                    <span>Tư vấn dịch vụ</span>
                    <p>
                        <a href="skype:caophuong97?chat">
                            <i class="fa fa-skype"></i>
                        </a>
                        Ms Cao Phương </p>
                    <p>
                        <i class="glyphicon glyphicon-phone"></i> 0913 818 107 </p>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="support">
                <div class="avt">
                    <img alt="avt" title="avt" src="" />
                </div>
                <div class="content">
                    <span>Tư vấn dịch vụ</span>
                    <p>
                        <a href="skype:kimthanhnguyen53?chat">
                            <i class="fa fa-skype"></i>
                        </a>
                        Ms Kim Thành </p>
                    <p>
                        <i class="glyphicon glyphicon-phone"></i> 0946 333 006 </p>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="support">
                <div class="avt">
                    <img alt="avt" title="avt" src="https://dulichdanangxanh.com/data/support/ms-kim-sen.png" />
                </div>
                <div class="content">
                    <span>Tư vấn tour </span>
                    <p>
                        <a href="skype:tramanh1111?chat">
                            <i class="fa fa-skype"></i>
                        </a>
                        Ms Thắm </p>
                    <p>
                        <i class="glyphicon glyphicon-phone"></i> 0988 159 152 </p>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="support">
                <div class="avt">
                    <img alt="avt" title="avt" src="https://dulichdanangxanh.com/data/support/ms-thu-thao.jpg" />
                </div>
                <div class="content">
                    <span>Tư vấn tour </span>
                    <p>
                        <a href="skype:thaolethithu?chat">
                            <i class="fa fa-skype"></i>
                        </a>
                        Ms Thu Thảo </p>
                    <p>
                        <i class="glyphicon glyphicon-phone"></i> 0928 259 889 </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--End Box-->
        <div class="clearfix"></div>
    </div>
</div>
@endsection
@section('script')
    <script src="{{ asset('js/tour.js') }}"></script>
@endsection
