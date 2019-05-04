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
                    <ul id="image-gallery" class="gallery list-unstyled">
                        @foreach($tour->hinhAnhs as $image)
                        <li data-thumb="{{asset('images/'.$image->hinh_anh)}}">
                            <img title="bana-hills-1467862246.jpg" alt="bana-hills-1467862246.jpg" src="{{asset('images/'.$image->hinh_anh)}}" />
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
                    <p><strong>Khuyến mãi: </strong></p>
                    <p>{{$tour->khuyenMai->khuyen_mai}}</p>
                    <div class="price_r" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <strong>Giá tour:</strong>
                            <span class="tour_price" itemprop='price' content='{{$tour->gia_tour*1000}}'>{{number_format($tour->gia_tour*1000,0,',','.')}}</span> <span itemprop="priceCurrency" content="VND">vnđ</span> 
                        <strong>/ người lớn</strong>
                    </div>
                    <div class="text-center">
                        <a class="btn_book" href="{{route('dattour',['slug'=>$tour->slug])}}"><input class="btn_booking" type="button" value="Đặt Tour"></a>
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
                                    @if(Auth::check())
                                    <form action="https://dulichdanangxanh.com/136-tour-ba-na-tu-da-nang" method="post" accept-charset="utf-8" id="form_comment">
                                        @csrf
                                        <input type="hidden" id="cmt-tour-id" name="tour_id" value="{{$tour->id}}"/>
                                        <div class="form-contact">
                                            <div class="form-group">
                                                <label id="cmt-name" for="cmt-content" class="form-comtrol font-weight-bold" data-id="{{Auth::user()->id}}">{{Auth::user()->ten_hien_thi}}</label>
                                                <textarea class="form-control" id="cmt-content" name="content" placeholder="Nôi dung *"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input id="cmt-submit" type="submit" class="button cmt-button" value="Gửi">
                                            </div>
                                        </div>
                                    </form>
                                    @else
                                        <p class="font-weight-bold">Đăng nhập để gửi bình luận</p>
                                    @endif
                                </div>
                                    <!-- Comment -->
                                    <div class="lcom">
                                        @foreach($tour->commentList as $list)
                                        <div class="lcom-item">
                                            <img src="https://dulichdanangxanh.com/templates/images/user.png">
                                            <div class="row">  
                                                    <div class="ten col-lg-6 col-md-6 col-sm-6"><b class="fullname">{{$list->user->ten_hien_thi}}</b> - <span class="data">Ngày gửi: {{$list->created_at}}</span></div>
                                                    <div class="content">{{$list->noi_dung}}</div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- /Comment -->
                                        <h2 class="preloader" style="text-align: center; display: none">
                                            <img src="{{url('templates/images/ajax-load.gif')}}"/>
                                        </h2>
                                            <input id="btn-xemthem" data-id="{{$tour->id}}" class="danhgiatour" type="button" style="float: right;" value="Xem thêm Đánh giá Tour ">                                     
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
                                        
            @include('layouts.sub_pro_cat')
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

@section('script')
<script src="{{asset('js/comment_loadmore.js')}}"></script>
<script src="{{asset('js/comment_store.js')}}"></script>
@endsection