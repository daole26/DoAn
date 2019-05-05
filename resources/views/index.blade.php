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
            <a title="Tour Bà Nà từ Đà Nẵng" href="{{route('tour.detail',['slug'=>$tour->slug])}}">
                @if(!empty($tour->hinhAnhs[0]))
                <img title="Tour Bà Nà từ Đà Nẵng" alt="Tour Bà Nà từ Đà Nẵng" src="{{asset('images/'.$tour->hinhAnhs[0]->hinh_anh)}}"/>
                @endif
                <span class="product_name">
                {{$tour->ten_tour}}          </span>
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
            @include('layouts.newest_tour_per_danhmuc')
            @endif
            <div class="col-lg-9 no_padding_r no_padding_l">
                <div class="title_product">
                    <h2 id="danhmuc-{{$danhmuc_all->id}}">
                        <a href="{{route('tour.followdanhmuc',['slug'=> $danhmuc_all->slug])}}">{{$danhmuc_all->ten_danh_muc}}</a>
                    </h2>
                </div>

                <ul class="product_grid white_bg col-lg-12 no_padding_l no_padding_r">
                     @foreach($danhmuc_all->indexTours as $tour)
                    <li class=" items col-lg-3 col-md-4 col-sm-4 col-xs-6 col-xs1-12">
                        <a title="Tour ghép Đà Nẵng 3 ngày 2 đêm " href="{{route('tour.detail',['slug'=>$tour->slug])}}">
                            @if(!empty($tour->hinhAnhs[0]))
                                <img title="Tour Bà Nà từ Đà Nẵng" alt="Tour Bà Nà từ Đà Nẵng" src="{{asset('images/'.$tour->hinhAnhs[0]->hinh_anh)}}"/>
                            @endif
                            <span class="product_name">
                                {{$tour->ten_tour}}
                            </span>
                        </a>
                        <div class="price_box">
                            <p><strong>Mã tour: </strong>{{strtoupper($tour->ma_tour)}}</p>
                            <p><strong>Hình thức: </strong>{{$tour->hinhthucTour->hinh_thuc}}</p>
                            <p><strong>Thời gian: </strong>{{$tour->thoi_gian}}</p>
                            <p>
                                <strong>Giá: </strong>
                                <span class="product_price">
                                 {{number_format($tour->gia_tour*1000,0,',','.') }} ₫
                                </span>
                            </p>
                        </div>
                    </li>
                    @endforeach
                    <div class="clearfix"></div>
                </ul>
            </div>
            @if($j%2==0)
            @include('layouts.newest_tour_per_danhmuc')
            @endif
            <div class="clearfix"></div>
        </div>
    </div>
    @php($j++)
    @endforeach
    <!-- end product -->

    <div class="title_news">
        <a href="{{url('news')}}">Tin tức</a>
    </div>
    @include('layouts.tintuc_widget')
</div>
</div>
@endsection
