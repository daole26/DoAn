@extends('layouts.master')
@section('style')
<link rel="stylesheet" href="{{asset('css/tintuc-detail.css')}}">
@endsection
@section('Content')
<div class="row">
    <div id="breadcrumbs">
        <ul class="breadcrumb">
            <li><a itemprop="url" href="/" title="Trang chủ"><span itemprop="title">Trang chủ</span></a></li>
            <li><a itemprop="url" href="{{route('index.tintuc',['slug'=>$slug])}}" title="Tin tức"><span itemprop="title">Tin tức</span></a></li>
            <li><a itemprop="url" href="{{route('index.tintuc',['slug'=>$slug])}}" title="Tin tức" class="active end"><span itemprop="title">Tin tức</span></a></li>
        </ul>
    </div>

    <div class="column col-lg-9 col-md-9">

        <h1 class="title">{{$tintuc->tieu_de}}</h1>
        <h2 class="elipsis">{!!strip_tags($tintuc->noi_dung)!!}</h2>
        <img width="100%" src="{{asset('images/'.$tintuc->hinh_anh->hinh_anh)}}" alt="{{$tintuc->tieu_de}}">
        {!!$tintuc->noi_dung!!}
    </div>


    <div class="colRight col-lg-3 col-md-3 ">
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
                    <a title="Tour hằng ngày" href="https://dulichdanangxanh.com/tour-hang-ngay.html">Tour hằng ngày</a>
                <ul class="sub_cate_tour">
                                                        <li><a title="Tour Huế" href="https://dulichdanangxanh.com/tour-hang-ngay/tour-hue.html">Tour Huế</a></li>
                                    <li><a title="Tour Bà Nà " href="https://dulichdanangxanh.com/tour-hang-ngay/tour-ba-na.html">Tour Bà Nà </a></li>
                                    <li><a title="Tour Hội An" href="https://dulichdanangxanh.com/tour-hang-ngay/tour-hoi-an.html">Tour Hội An</a></li>
                                    <li><a title="Tour Cù Lao Chàm" href="https://dulichdanangxanh.com/tour-hang-ngay/tour-cu-lao-cham.html">Tour Cù Lao Chàm</a></li>
                                    <li><a title="Tour du lịch Sơn Trà" href="https://dulichdanangxanh.com/tour-hang-ngay/tour-du-lich-son-tra.html">Tour du lịch Sơn Trà</a></li>
                                    <li><a title="Tour tham quan Đà Nẵng" href="https://dulichdanangxanh.com/tour-hang-ngay/tour-tham-quan-da-nang.html">Tour tham quan Đà Nẵng</a></li>
                                    <li><a title="Tour tham quan Bạch Mã" href="https://dulichdanangxanh.com/tour-hang-ngay/tour-tham-quan-bach-ma.html">Tour tham quan Bạch Mã</a></li>
                                    <li><a title="Tour Tắm Bùn Đà Nẵng" href="https://dulichdanangxanh.com/tour-hang-ngay/tour-tam-bun-da-nang.html">Tour Tắm Bùn Đà Nẵng</a></li>
                                                </ul>

                <div class="clearfix"></div>
                </li>
                <li>
                    <span title="More" class="open" style="display: none"><i class="fa fa-plus plus"></i></span>
                <span title="Less" class="exit"><i class="fa fa-minus minus"></i></span>
                    <a title="Tour Đà Nẵng" href="https://dulichdanangxanh.com/tour-da-nang.html">Tour Đà Nẵng</a>
                <ul class="sub_cate_tour">
                                                        <li><a title="Du lịch Đà Nẵng trong ngày" href="https://dulichdanangxanh.com/tour-da-nang/du-lich-da-nang-trong-ngay.html">Du lịch Đà Nẵng trong ngày</a></li>
                                    <li><a title="Du lịch Đà Nẵng 2 ngày 1 đêm" href="https://dulichdanangxanh.com/tour-da-nang/du-lich-da-nang-2-ngay-1-dem.html">Du lịch Đà Nẵng 2 ngày 1 đêm</a></li>
                                    <li><a title="Du lịch Đà Nẵng 3 ngày 2 đêm" href="https://dulichdanangxanh.com/tour-da-nang/du-lich-da-nang-3-ngay-2-dem.html">Du lịch Đà Nẵng 3 ngày 2 đêm</a></li>
                                    <li><a title="Du lịch Đà Nẵng 4 ngày 3 đêm" href="https://dulichdanangxanh.com/tour-da-nang/du-lich-da-nang-4-ngay-3-dem.html">Du lịch Đà Nẵng 4 ngày 3 đêm</a></li>
                                    <li><a title="Du lịch Đà Nẵng 5 ngày 4 đêm " href="https://dulichdanangxanh.com/tour-da-nang/du-lich-da-nang-5-ngay-4-dem.html">Du lịch Đà Nẵng 5 ngày 4 đêm </a></li>
                                    <li><a title="Du lịch Đà Nẵng 6 ngày 5 đêm" href="https://dulichdanangxanh.com/tour-da-nang/du-lich-da-nang-6-ngay-5-dem.html">Du lịch Đà Nẵng 6 ngày 5 đêm</a></li>
                                                </ul>

                <div class="clearfix"></div>
                </li>
                <li>
                    <span title="More" class="open" style="display: none"><i class="fa fa-plus plus"></i></span>
                <span title="Less" class="exit"><i class="fa fa-minus minus"></i></span>
                    <a title="Tour nước ngoài" href="https://dulichdanangxanh.com/tour-nuoc-ngoai.html">Tour nước ngoài</a>
                <ul class="sub_cate_tour">
                                                        <li><a title="Tour Singapore Malaysia" href="https://dulichdanangxanh.com/tour-nuoc-ngoai/tour-singapore-malaysia.html">Tour Singapore Malaysia</a></li>
                                    <li><a title="Tour Campuchia" href="https://dulichdanangxanh.com/tour-nuoc-ngoai/tour-campuchia.html">Tour Campuchia</a></li>
                                    <li><a title="Tour Thái Lan" href="https://dulichdanangxanh.com/tour-nuoc-ngoai/tour-thai-lan.html">Tour Thái Lan</a></li>
                                                </ul>

                <div class="clearfix"></div>
                </li>
                </ul>
                </div>
        </div><!--End Box-->
    <!--Box-->
        <div class="boxItem">
            <div class="box-title">
                <div class="lb-name">Hỗ trợ</div>
            </div>
            <div class="support">
                <div class="avt">
                    <img alt="avt" title="avt" src="https://dulichdanangxanh.com/data/support/ms-kim-sen.png">
                </div>
                <div class="content">
                    <span>Tư vấn tour </span>
                    <p>
                        <a href="skype:tramanh1111?chat">
                            <i class="fa fa-skype"></i>
                        </a>
                        Ms Thắm        
                    </p>
                    <p>
                        <i class="glyphicon glyphicon-phone"></i>
                        0988 159 152
                    </p>
                </div>
            <div class="clearfix"></div>
            </div>

            <div class="support">
                <div class="avt">
                    <img alt="avt" title="avt" src="https://dulichdanangxanh.com/data/support/ms-thu-thao.jpg">
                </div>
                <div class="content">
                    <span>Tư vấn tour </span>
                    <p>
                        <a href="skype:thaolethithu?chat">
                            <i class="fa fa-skype"></i>
                        </a>
                        Ms Thu Thảo
                    </p>
                    <p>
                        <i class="glyphicon glyphicon-phone"></i>
                        0928 259 889
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div><!--End Box-->
            <div class="clearfix"></div>
    </div>

</div>
@endsection