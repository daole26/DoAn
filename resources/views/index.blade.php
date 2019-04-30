@extends('layouts.master')
@section('style')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@show
@section('Content')
    <!--<div class="title_product_hot">Tour Hot</div>-->
    <ul class="product_grid">
        @foreach($new_tour as $tour)
        <li class=" items col-lg-20 col-md-3 col-sm-4 col-xs-6 col-xs1-12">
            <div class="hot_label">
                
                <img src="templates/images/bg_productlabel.png"/>
                
            </div>
            <a title="Tour Bà Nà từ Đà Nẵng" href="136-tour-ba-na-tu-da-nang.html">
                @if(!empty($tour->hinhAnhs[0]))
                <img title="Tour Bà Nà từ Đà Nẵng" alt="Tour Bà Nà từ Đà Nẵng" src="{{asset('images/'.$tour->hinhAnhs[0]->hinh_anh)}}"/>
                @endif
                <span class="product_name">
                Tour Bà Nà từ Đà Nẵng            </span>
            </a>
            <div class="price_box">
                <p><strong>Mã tour: </strong>{{strtoupper($tour->ma_tour)}}</p>
                <p><strong>Hình thức: </strong>{{$tour->ten_tour}}</p>
                <p><strong>Thời gian: </strong>{{$tour->thoi_gian}}</p>
                <p>
                    <strong>Giá: </strong>
                    <span class="product_price">
                    {{number_format($tour->gia_tour*1000,0,',','.') }}₫                </span>
                </p>
            </div>
        </li>
        @endforeach
    </ul>
    @php($j=0)
    @foreach($danhmuc_all as $danhmuc_all)
    <div class="1" style="margin-bottom: 25px">
        <div style="background: #fff">
            @if($j%2==1)
                <div class="col-lg-3 no_padding_l no_padding_r tour_hot">
                    <div class="title_product_1">
                        <h2>
                            <a href="du-lich-da-nang-3-ngay-2-dem.html">Mới nhất</a>
                        </h2>
                    </div>
                    <ul>
                        @for($i=count($danhmuc_all->tours)-1;$i>=count($danhmuc_all->tours)-5 && $i>=0;$i--)
                            @php($tour = $danhmuc_all->tours[$i])
                            @if(!empty($tour))
                            <li>
                                <div class="col-lg-5">
                                    <a href="detail/{{$tour->slug}}">
                                         @if(!empty($tour->hinhAnhs[0]))
                                            <img title="Tour Bà Nà từ Đà Nẵng" alt="Tour Bà Nà từ Đà Nẵng" src="{{asset('images/'.$tour->hinhAnhs[0]->hinh_anh)}}"/>
                                        @endif
                                    </a>
                                </div> 
                                <div class="col-lg-7">
                                    <a href="202-tour-ha-noi-da-nang-3-ngay-2-dem-bang-may-bay.html">
                                        {{$tour->ten_tour}}
                                    </a>
                                    <span class="product_price">
                                        {{number_format($tour->gia_tour*1000,0,',','.') }} ₫  
                                    </span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            @endif
                        @endfor
                    </ul>
                </div>
                @endif
            <div class="col-lg-9 no_padding_r no_padding_l">
                <div class="title_product">
                    <h2>
                        <a href="tour-da-nang/{{$danhmuc_all->slug}}">{{$danhmuc_all->ten_danh_muc}}</a>
                    </h2>
                </div>

                <ul class="product_grid white_bg col-lg-12 no_padding_l no_padding_r">
                     @foreach($danhmuc_all->tours as $tour)
                    <li class=" items col-lg-3 col-md-4 col-sm-4 col-xs-6 col-xs1-12">
                        <a title="Tour ghép Đà Nẵng 3 ngày 2 đêm " href="detail/{{$tour->slug}}">
                            @if(!empty($tour->hinhAnhs[0]))
                                <img title="Tour Bà Nà từ Đà Nẵng" alt="Tour Bà Nà từ Đà Nẵng" src="{{asset('images/'.$tour->hinhAnhs[0]->hinh_anh)}}"/>
                            @endif
                            <span class="product_name">
                            {{$tour->ten_tour}}                        </span>
                        </a>
                        <div class="price_box">
                            <p><strong>Mã tour: </strong>{{strtoupper($tour->ma_tour)}}</p>
                            <p><strong>Hình thức: </strong>{{$tour->hinhthucTour->hinh_thuc}}</p>
                            <p><strong>Thời gian: </strong>{{$tour->thoi_gian}}</p>
                            <p>
                                <strong>Giá: </strong>
                                <span class="product_price">
                                 {{number_format($tour->gia_tour*1000,0,',','.') }} ₫                            </span>
                            </p>
                        </div>
                    </li>
                    @endforeach
                    <div class="clearfix"></div>
                </ul>
            </div>
            @if($j%2==0)
            <div class="col-lg-3 no_padding_l no_padding_r tour_hot">
                <div class="title_product_1">
                    <h2>
                        <a href="du-lich-da-nang-3-ngay-2-dem.html">Mới nhất</a>
                    </h2>
                </div>
                <ul>
                    @for($i=count($danhmuc_all->tours)-1;$i>=count($danhmuc_all->tours)-5 && $i>=0;$i--)
                        @php($tour = $danhmuc_all->tours[$i])
                        @if(!empty($tour))
                        <li>
                            <div class="col-lg-5">
                                <a href="detail/{{$tour->slug}}">
                                     @if(!empty($tour->hinhAnhs[0]))
                                        <img title="Tour Bà Nà từ Đà Nẵng" alt="Tour Bà Nà từ Đà Nẵng" src="{{asset('images/'.$tour->hinhAnhs[0]->hinh_anh)}}"/>
                                    @endif
                                </a>
                            </div> 
                            <div class="col-lg-7">
                                <a href="202-tour-ha-noi-da-nang-3-ngay-2-dem-bang-may-bay.html">
                                    {{$tour->ten_tour}}
                                </a>
                                <span class="product_price">
                                    {{number_format($tour->gia_tour*1000,0,',','.') }} ₫  
                                </span>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        @endif
                    @endfor
                </ul>
            </div>
            @endif
            <div class="clearfix"></div>
        </div>
    </div>
    @php($j++)
    @endforeach
    <!-- end product -->

    <div class="title_news">
        <a href="tin-tuc.html">Tin tức</a>
    </div>
    <div class="news_grid">

        
        @foreach ($tintucs as $tintuc)
            <div class="news_items col-lg-20 col-md-3 col-sm-4 col-xs-6 col-xs1-12 n_padding_l_r">
                @if(($i)%2==0)
                <div class="img_n">
                    <a  title="{{$tintuc->tieu_de}}" href="{{route('index.tintuc',['slug'=>$tintuc->slug])}}">
                        <img alt="{{$tintuc->tieu_de}}" src="{{asset('images/'.$tintuc->hinh_anh->hinh_anh)}}"/>
                    </a>
                </div>
                @endif
                <div class="content_n">
                    <span class="title_n">
                        <a class="n_title" title="{{$tintuc->tieu_de}}m" href="{{route('index.tintuc',['slug'=>$tintuc->slug])}}">{{$tintuc->tieu_de}}</a>
                    </span>
                    <p class="des_n">
                        {!!$tintuc->noi_dung!!}
                    </p>
                </div>
                @if(($i)%2!=0)
                <div class="img_n">
                    <a  title="{{$tintuc->tieu_de}}" href="{{route('index.tintuc',['slug'=>$tintuc->slug])}}">
                        <img alt="{{$tintuc->tieu_de}}" src="{{asset('images/'.$tintuc->hinh_anh->hinh_anh)}}"/>
                    </a>
                </div>
                @endif
            </div>
            @php($i++)
        @endforeach
        <div class="clearfix"></div>
    </div>
</div>
</div>
@endsection
