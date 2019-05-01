@extends('layouts.master')
@section('style')
<link rel="stylesheet" href="{{asset('css/tour-detail.css')}}">
@endsection
@section('Content')
<div class="row">            

    <div class="colLeft col-lg-9 col-md-9">
    <h1 class="hidden" itemprop="name">{{$tour->ten_tour}}</h1>
    <script type="text/javascript">
        var tour_id = 136;
    </script>
    <div class="tour">
        <div class="row">
            <!-- slide img -->
            <div class="col-lg-7 slide_img_product">
                <div class="clearfix" style="">
                    @if(!empty($tour->hinhAnhs[0]))
                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                        @foreach($tour->hinhAnhs as $image)
                        <li data-thumb="{{$image->hinh_anh}}">
                            <img title="bana-hills-1467862246.jpg" alt="bana-hills-1467862246.jpg" src="{{$image->hinh_anh}}" />
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
            <!-- content right -->
            <div class="col-lg-5 box_tour_info">
                <h2 class="p_title">{{$tour->ten_tour}}</h2>

                <div class="info_tour">
                    <p class="code"><strong>Mã tour:&nbsp;</strong>{{strtoupper($tour->ma_tour)}}</p>
                    <p><strong>Thời gian:&nbsp;</strong>{{$tour->thoi_gian}}    </p>
                    <p><strong>Điểm khởi hành:&nbsp;</strong>{{$tour->diem_khoi_hanh}}</p>
                    <p><strong>Lịch trình:&nbsp;</strong>{{$tour->lich_trinh}}</p>
                    <p><strong>Phương tiện:&nbsp;</strong>{{$tour->phuong_tien}}</p>
                    <p><strong>Hình thức:&nbsp;</strong>{{$tour->hinhThucTour->hinh_thuc}}</p>

                    <div class="price_r" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <strong>Giá tour:</strong>
                            <span class="tour_price" itemprop='price' content='{{$tour->gia_tour*1000}}'>{{number_format($tour->gia_tour*1000,0,',','.')}}</span> <span itemprop="priceCurrency" content="VND">vnđ</span> 
                        <strong>/ người lớn</strong>
                    </div>
                    <div class="text-center">
                        <a class="btn_book" href="{{url('details')}}"><input class="btn_booking" type="button" value="Đặt Tour"></a>
                    </div>
                </div>

            </div><!-- end content right -->
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div style="padding-bottom: 5px;">
                    <h3 style="font-size: 17px; color: #CC0000; margin-top: 15px;text-transform: uppercase;margin-bottom: 10px;">Bảng giá Tour</h3>
                    <table class="tbl_price" cellpadding="0" cellspacing="0">
                        <tr>
                            <td style="width: 25%; background: #EDEDED; border: 1px solid #DADADA; font-weight: bold;"> Số lượng </td> <td style="width: 25%; background: #EDEDED; border: 1px solid #DADADA; font-weight: bold;"> Người lớn </td> <td style="width: 25%; background: #EDEDED; border: 1px solid #DADADA; font-weight: bold;"> Trẻ em </td> <td style="width: 25%; background: #EDEDED; border: 1px solid #DADADA; font-weight: bold;"> Em bé </td>
                        </tr>
                                                <tr>
                            <td style="width: 25%; background: #EDEDED; border: 1px solid #DADADA; font-weight: bold;">>= 2 khách</td>
                            <td style="border: 1px solid #DADADA;">{{number_format($tour->gia_tour*2000,0,',','.')}}</td>
                            <td style="border: 1px solid #DADADA;">{{number_format($tour->gia_tour*1000,0,',','.')}}</td>
                            <td style="border: 1px solid #DADADA;">0</td>
                        </tr>
                                            </table>
                </div>

                <div class="content_tour">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#chuongtrinh">Chương trình Tour</a></li>
                        <li><a data-toggle="tab" href="#dieukien">Điều kiện</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="chuongtrinh" class="tab-pane fade in active p_row" >
                            {!!$tour->chuong_trinh!!}
                        </div>

                        <div id="dieukien" class="tab-pane fade p_row">
                            {!!$tour->dieu_kien!!}
                        </div>

                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab">Phụ lục</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="phuluc" class="tab-pane fade in active p_row" >
                                    {!!$tour->phu_luc!!}
                            </div>
                        </div>


                        <div class="tour_comment">
                            <h2 class="danhgiatour">Những đánh giá sau tour</h2>
                            <div class="midTab" style="overflow: hidden;">
                                <div class="form_comment_div">
                                    <form action="https://dulichdanangxanh.com/136-tour-ba-na-tu-da-nang" method="post" accept-charset="utf-8" id="form_comment">
                                    <div class="hidden">
                                    <input type="hidden" name="token" value="2c9d6440eb024c398a6c45a5aaa5a5e7" />
                                    </div>                            <input type="hidden" name="vdata[tour_id]" value="{{$tour->id}}"/>
                                    <div class="form-contact">
                                        <div class="row">
                                            <div class="form-group col-md-5 col-sm-6 col-xs-6 sp_xs_12">
                                                <input type="text" name="vdata[fullname]" class="form-control" placeholder="Họ tên *">
                                            </div>
                                            <div class="form-group col-md-7 col-sm-6 col-xs-6 sp_xs_12">
                                                <input type="text" name="vdata[email]" placeholder="Email *" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="vdata[content]" placeholder="Nôi dung *"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="button" style="margin: 0px; padding: 7px 30px; margin-top: 4px; border: none !important; color: #fff;background: #2ac415;" value="Gửi">
                                        </div>
                                    </div>


                                    </form>
                                    <div class="lcom" style="overflow: hidden;">
                                        <div style="clear: both; overflow: hidden; border-bottom: 1px dashed #EDEDED; padding-top: 5px;">
                                            <img src="https://dulichdanangxanh.com/templates/images/user.png" alt="" style="float: left; margin: 5px; border-radius: 7px;">
                                            <div id="content_comment">
                                                <div style="overflow: hidden;">   
                                                    <div class="ten col-lg-6 col-md-6 col-sm-6"><b class="fullname">Lê Hồng Vân</b> - <span class="data">Ngày gửi: Tue/08/2016 12:58</span></div>
                                                    <div class="danhgia col-lg-6 col-md-6 col-sm-6">Dịch vụ Rất tốt                                                <span class="small-star" style="width: 80px; float: right; height: 16px;"><span class="current-rating" style="width: 80px;height: 24px; float: right;"></span></span></div>
                                                </div>
                                                <div style="margin-left: 62px;">Tour Bà Nà ngày 01/09/2014: Cảm ơn công ty Đà Nẵng Xanh đã có những hướng dẫn viên nhiệt tình và chu đáo để những chuyến đi an toàn, hợp lý, mong các bạn phát huy</div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="preloader" style="text-align: center; display: none">
                                        <img src="https://dulichdanangxanh.com/templates/images/ajax-load.gif"/>
                                    </h2>
                                        <input class="danhgiatour" type="button" style="float: right;" value="Xem thêm Đánh giá Tour ">                                     
                                </div>
                            </div><!-- end .midTab -->
                        </div><!-- /.tour_comment -->
                    </div>
                </div><!-- /.content-tour -->
            </div>  <!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.tour -->
</div><!-- ./colLeft -->
                    
    <div class="colRight col-lg-3 col-md-3">
                                    <!--Box-->
        <div class="boxItem">
            <div class="box-title">
                <div class="lb-name">Danh mục tour</div>
            </div>
                                        
            <div class="cate">
                <ul>
                    @foreach($danhmuc2 as $danhmuc2)
                    <li>
                        <a title="Tour hằng ngày" href="{{route('tour.followdanhmuc',['slug'=>$danhmuc2->slug])}}">{{$danhmuc2->ten_danh_muc}}</a>
                        @if(count($danhmuc2['child'])!=0)
                            <span title="More" class="open" style="display: none"><i class="fa fa-plus plus"></i></span>
                            <span title="Less" class="exit" ><i class="fa fa-minus minus"></i></span>
                            <ul class="sub_cate_tour">
                                @foreach($danhmuc2['child'] as $child)
                                    <li><a title="Tour Huế" href="{{route('tour.followdanhmuc',['slug'=>$child->slug])}}">{{$child->ten_danh_muc}}</a></li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="clearfix"></div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div><!--End Box-->
        
        <!--Box-->
        <div class="boxItem">
            <div class="box-title">
                <div class="lb-name">Hỗ trợ trực tuyến</div>
            </div>
                                        
            <div class="support">
                <div class="avt">
                            <img alt="avt" title="avt" src="https://dulichdanangxanh.com/data/support/mr-trung1.jpg"/>
                        </div>
                <div class="content">
                    <span>Tư vấn dịch vụ</span>
                    <p>
                        <a href="skype:#?chat">
                            <i class="fa fa-skype"></i>
                        </a>
                        Mr Trung        </p>
                    <p>
                        <i class="glyphicon glyphicon-phone"></i>
                        0974 818 106        </p>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="support">
                <div class="avt">
                            <img alt="avt" title="avt" src="https://dulichdanangxanh.com/data/support/ms-cao-phuong.png"/>
                        </div>
                <div class="content">
                    <span>Tư vấn dịch vụ</span>
                    <p>
                        <a href="skype:caophuong97?chat">
                            <i class="fa fa-skype"></i>
                        </a>
                        Ms Cao Phương        </p>
                    <p>
                        <i class="glyphicon glyphicon-phone"></i>
                        0913 818 107        </p>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="support">
                <div class="avt">
                            <img alt="avt" title="avt" src="https://dulichdanangxanh.com/data/support/ms-kim-thanh.jpg"/>
                        </div>
                <div class="content">
                    <span>Tư vấn dịch vụ</span>
                    <p>
                        <a href="skype:kimthanhnguyen53?chat">
                            <i class="fa fa-skype"></i>
                        </a>
                        Ms Kim Thành        </p>
                    <p>
                        <i class="glyphicon glyphicon-phone"></i>
                        0946 333 006        </p>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="support">
                <div class="avt">
                            <img alt="avt" title="avt" src="https://dulichdanangxanh.com/data/support/ms-kim-sen.png"/>
                        </div>
                <div class="content">
                    <span>Tư vấn tour </span>
                    <p>
                        <a href="skype:tramanh1111?chat">
                            <i class="fa fa-skype"></i>
                        </a>
                        Ms Thắm        </p>
                    <p>
                        <i class="glyphicon glyphicon-phone"></i>
                        0988 159 152        </p>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="support">
                <div class="avt">
                            <img alt="avt" title="avt" src="https://dulichdanangxanh.com/data/support/ms-thu-thao.jpg"/>
                        </div>
                <div class="content">
                    <span>Tư vấn tour </span>
                    <p>
                        <a href="skype:thaolethithu?chat">
                            <i class="fa fa-skype"></i>
                        </a>
                        Ms Thu Thảo        </p>
                    <p>
                        <i class="glyphicon glyphicon-phone"></i>
                        0928 259 889        </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div><!--End Box-->
        <div class="clearfix"></div>
    </div>
</div>
@endsection