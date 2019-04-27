@extends('layouts.master')
@section('Content')
<div class="pageContent">
    <div class="row">
        <div class="colLeft col-lg-9 col-md-9">
            <div itemscope="" itemtype="http://schema.org/Product">
                <h1 style="display: none" itemprop="name">{{$tour->ten_tour}}</h1>
                <div class="tour">
                    <h3 style="padding: 5px 0 15px 0; line-height: 20px;" itemprop="description">Tour Hội An đi từ Đà Nẵng nhiều điểm đến hấp dẫn được sắp xếp trong lịch trình chi tiết của Đà Nẵng Xanh mang lại cho du khách những cảm xúc khó quên tại phố cổ</h3>
                    <div class="row">
                        <!-- slide img -->
                        @include('tour.slide_img', ['images' => $tour->hinhAnhs])
                        <!-- content right -->
                        <div class="col-lg-5 box_tour_info">
                            <h2 class="p_title">{{ $tour->ten_tour }}</h2>
                            <div class="tourTool" style="margin: 10px 0;">
                                <span class="google" style="width:80px;float:left">
                                    <div id="___plusone_2" style="position: absolute; width: 450px; left: -10000px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position:absolute;top:-10000px;width:450px;margin:0px;border-style:none" tabindex="0" vspace="0" width="100%" id="I2_1556012533324" name="I2_1556012533324" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;count=true&amp;hl=vi&amp;origin={{ urlencode(url()->current())}}&amp;url={{urlencode(url()->current())}}&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.zgv58Fea3Pk.O%2Fam%3DwQE%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCPwizMUhsFqR3droZnbNnKWlkkqMQ%2Fm%3D__features__#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I2_1556012533324&amp;_gfid=I2_1556012533324&amp;parent=https%3A%2F%2Fdulichdanangxanh.com&amp;pfname=&amp;rpctoken=78050030" data-gapiattached="true"></iframe></div>
                                    <g:plusone size="medium" count="true" href="{{ urlencode(url()->current()) }}" data-gapiscan="true" data-onload="true" data-gapistub="true"></g:plusone>
                                </span>
                                <div id="fb-root"></div>
                                <span class="facebook" style="width:80px;float:left">
                                    <div class="fb-like fb_iframe_widget" data-href="{{ urlencode(url()->current()) }}" data-layout="button" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=80&amp;href={{ urlencode(url()->current()) }}&amp;layout=button&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 96px; height: 20px;"><iframe name="f3ab1eae932db0c" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.5/plugins/like.php?action=like&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fd_vbiawPdxB.js%3Fversion%3D44%23cb%3Df175f153268ce%26domain%3Ddulichdanangxanh.com%26origin%3Dhttps%253A%252F%252Fdulichdanangxanh.com%252Ff245d47d569ee04%26relation%3Dparent.parent&amp;container_width=80&amp;href={{ urlencode(url()->current()) }}&amp;layout=button&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 96px; height: 20px;" class=""></iframe></span></div>
                                </span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="info_tour">
                                <p class="code"><strong>Mã tour:&nbsp;</strong>{{ $tour->ma_tour }}</p >
                                <p><strong>Thời gian:&nbsp;</strong>{{ $tour->thoi_gian }}</p>
                                <p><strong>Điểm khởi hành:&nbsp;</strong>{{ $tour->diem_khoi_hanh }}</p>
                                <p><strong>Lịch trình:&nbsp;</strong>{{ $tour->lich_trinh }}</p>
                                <p><strong>Phương tiện:&nbsp;</strong>{{ $tour->phuong_tien }}</p>
                                <div class="price_r" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                    <strong>Giá tour:</strong>
                                    <span class="tour_price" itemprop="price" content="450000">{{ $tour->gia_tour }}</span> <span itemprop="priceCurrency" content="VND">vnđ</span>
                                    <strong>/ người lớn</strong>
                                </div>
                                <div style="text-align: center">
                                    <a class="btn_book" href="https://dulichdanangxanh.com/dat-tour/tour-hoi-an-di-tu-da-nang-139.html">
                                    <input class="btn_booking" type="button" value="Đặt Tour">
                                    </a>
                                </div>
                                <div class="rating">
                                    <div class="score-container" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                                        <div class="score" itemprop="ratingValue">5,0</div>
                                        <div class="score-container-star-rating">
                                            <div class="small-star star-rating-non-editable-container">
                                                <div style="width: 100%;" class="current-rating"></div>
                                            </div>
                                            <div class="show_rating">
                                                <a onmouseout="rolloff(this, 0)" onmouseover="rating(this, 0)" id="0_1" onclick="rateIt(this, 0)" class=""></a>
                                                <a onmouseout="rolloff(this, 0)" onmouseover="rating(this, 0)" id="0_2" onclick="rateIt(this, 0)" class=""></a>
                                                <a onmouseout="rolloff(this, 0)" onmouseover="rating(this, 0)" id="0_3" onclick="rateIt(this, 0)" class=""></a>
                                                <a onmouseout="rolloff(this, 0)" onmouseover="rating(this, 0)" id="0_4" onclick="rateIt(this, 0)" class=""></a>
                                                <a onmouseout="rolloff(this, 0)" onmouseover="rating(this, 0)" id="0_5" onclick="rateIt(this, 0)" class=""></a>
                                                <input type="hidden" value="" name="rating" id="0_rating">
                                            </div>
                                        </div>
                                        <div class="reviews-stats">
                                            Tổng số
                                            <span itemprop="reviewCount" class="reviews-num">25</span> đánh giá
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end content right -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div style="padding-bottom: 5px;">
                                <h3 style="font-size: 17px; color: #CC0000; margin-top: 15px;text-transform: uppercase;margin-bottom: 10px;">Bảng giá Tour</h3>
                                <table class="tbl_price" cellpadding="0" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td style="width: 25%; background: #EDEDED; border: 1px solid #DADADA; font-weight: bold;"> Số lượng </td>
                                            <td style="width: 25%; background: #EDEDED; border: 1px solid #DADADA; font-weight: bold;"> Người lớn </td>
                                            <td style="width: 25%; background: #EDEDED; border: 1px solid #DADADA; font-weight: bold;"> Trẻ em </td>
                                            <td style="width: 25%; background: #EDEDED; border: 1px solid #DADADA; font-weight: bold;"> Em bé </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 25%; background: #EDEDED; border: 1px solid #DADADA; font-weight: bold;">&gt;= 5 khách</td>
                                            <td style="border: 1px solid #DADADA;">{{ $tour->gia_tour . 'VNĐ' }}</td>
                                            <td style="border: 1px solid #DADADA;">{{ $tour->gia_tour . 'VNĐ'  }}</td>
                                            <td style="border: 1px solid #DADADA;">Xác nhận thực tế</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 25%; background: #EDEDED; border: 1px solid #DADADA; font-weight: bold;">&gt;= 2 khách</td>
                                            <td style="border: 1px solid #DADADA;">{{ $tour->gia_tour . 'VNĐ' }}</td>
                                            <td style="border: 1px solid #DADADA;">{{ $tour->gia_tour . 'VNĐ' }}</td>
                                            <td style="border: 1px solid #DADADA;">Xác nhận thực tế</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="content_tour">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#chuongtrinh">Chương trình Tour</a></li>
                                    <li><a data-toggle="tab" href="#dieukien">Điều kiện</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="chuongtrinh" class="tab-pane fade in active p_row">
                                        {!! $tour->chuong_trinh !!}
                                    </div>
                                    <div id="dieukien" class="tab-pane fade p_row">
                                        {!! $tour->dieu_kien !!}
                                    </div>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab">Phụ lục</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="phuluc" class="tab-pane fade in active p_row">
                                        {!! $tour->phu_luc !!}
                                    </div>
                                </div>
                            </div>
                            <div class="tour_comment">
                                <h2 class="danhgiatour">Những đánh giá sau tour</h2>
                                <div class="midTab" style="overflow: hidden;">

                                    <div class="form_comment_div">
                                        @if((auth()->check() && !auth()->user()->isAdmin()))
                                        <form action="{{ route('api.comment.store') }}" method="post" accept-charset="utf-8" id="form_comment">
                                            <input type="hidden" name="vdata[id_tour]" value="{{ $tour->id }}">
                                            <input type="hidden" name="vdata[id_users]" value="{{ auth()->user()->id }}">
                                            <div class="form-contact">
                                                <div class="row">
                                                    <div class="form-group col-md-5 col-sm-6 col-xs-6 sp_xs_12">
                                                        <input type="text" name="vdata[ten_hien_thi]" class="form-control" placeholder="Họ tên *" value="{{ auth()->user()->ten_hien_thi}}" disabled>
                                                    </div>
                                                    <div class="form-group col-md-7 col-sm-6 col-xs-6 sp_xs_12">
                                                        <input type="text" name="vdata[email]" placeholder="Email *" class="form-control" value="{{ auth()->user()->email }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" name="vdata[noi_dung]" placeholder="Nộii dung *"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-3 col-sm-3 col-xs-6 sp_xs_12">
                                                        <select id="star" name="vdata[star]" class="form-control">
                                                            <option value="5">5 Sao</option>
                                                            <option value="4">4 Sao</option>
                                                            <option value="3">3 Sao</option>
                                                            <option value="2">2 Sao</option>
                                                            <option value="1">1 Sao</option>
                                                        </select>
                                                    </div>
                                                    <div style="height: 34px; line-height: 34px" class="form-group col-md-3 col-sm-3 col-xs-6 sp_xs_12">
                                                        <span id="txt_star">Dịch vụ rất tốt</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="button" class="button" style="margin: 0px; padding: 7px 30px; margin-top: 4px; border: none !important; color: #fff;background: #2ac415;" value="Gửi">
                                                    <h2 class="preloader-2" style="text-align: center; display: none">
                                                        <img src="https://dulichdanangxanh.com/templates/images/ajax-load.gif">
                                                    </h2>
                                                </div>
                                            </div>
                                        </form>
                                        @endif
                                        <h4 style="border-bottom: 1px solid #2AC415; margin-top: 10px; color: #249805;">Hiện có <span id="total_c">{{ $totalComment }}</span> đánh giá</h4>
                                        <div id="list-comment" class="lcom" style="overflow: hidden;">
                                            @foreach ($tour->comments as $comment)
                                                <div style="clear: both; overflow: hidden; border-bottom: 1px dashed #EDEDED; padding-top: 5px;">
                                                    <img src="https://dulichdanangxanh.com/templates/images/user.png" alt="" style="float: left; margin: 5px; border-radius: 7px;">
                                                    <div class="comment-block">
                                                        <div style="overflow: hidden;">
                                                            <div class="ten col-lg-6 col-md-6 col-sm-6">
                                                                <b class="fullname">{{ $comment->user->ten_hien_thi }}</b> -
                                                                <span class="comment_at">Ngày gửi: {{ $comment->comment_at }}</span>
                                                            </div>
                                                            <div class="danhgia col-lg-6 col-md-6 col-sm-6">Dịch vụ Rất tốt <span class="small-star" style="width: 80px; float: right; height: 16px;"><span class="current-rating" style="width: 80px;height: 24px; float: right;"></span></span>
                                                            </div>
                                                        </div>
                                                        <div class="content" style="margin-left: 62px;">{{ $comment->noi_dung }}</div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <!-- Clone comment block-->
                                        <div id="comment-clone" style="display:none; clear: both; overflow: hidden; border-bottom: 1px dashed #EDEDED; padding-top: 5px;">
                                            <img src="https://dulichdanangxanh.com/templates/images/user.png" alt="" style="float: left; margin: 5px; border-radius: 7px;">
                                            <div class="comment-block">
                                                <div style="overflow: hidden;">
                                                    <div class="ten col-lg-6 col-md-6 col-sm-6">
                                                        <b class="fullname"></b> -
                                                        <span class="comment_at">Ngày gửi: </span>
                                                    </div>
                                                    <div class="danhgia col-lg-6 col-md-6 col-sm-6">Dịch vụ Rất tốt <span class="small-star" style="width: 80px; float: right; height: 16px;"><span class="current-rating" style="width: 80px;height: 24px; float: right;"></span></span>
                                                    </div>
                                                </div>
                                                <div class="content" style="margin-left: 62px;"></div>
                                            </div>
                                        </div>
                                        <!-- End comment block-->
                                        <h2 class="preloader" style="text-align: center; display: none">
                                            <img src="https://dulichdanangxanh.com/templates/images/ajax-load.gif">
                                        </h2>
                                        <input type="hidden" name="id_tour" value="{{ $tour->id }}">
                                        <input id="load_more_comment" class="danhgiatour" type="button" style="float: right;" value="Xem thêm Đánh giá Tour ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('tour.right_column')
    </div>
</div>
@endsection
@section('script')
    <script type="text/javascript" src="{{ asset('js/tour.js') }}">
    </script>
@endsection
