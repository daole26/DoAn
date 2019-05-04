@extends('layouts.master')
@section('Content')
    <!--<div class="title_product_hot">Tour Hot</div>-->
    <div class="1" style="margin-bottom: 25px">
        <div style="background: #fff">
            <div class="col-lg-9 no_padding_r no_padding_l">
                <div class="title_product">
                    <h2>
                        <a href="tour-da-nang/du-lich-da-nang-3-ngay-2-dem.html">TÌM THẤY {{ count($dataSearch) }} TOUR THEO YÊU CẦU</a>
                    </h2>
                </div>
                <ul class="product_grid white_bg col-lg-12 no_padding_l no_padding_r">
                    @foreach ($dataSearch as $search)
                    <li class=" items col-lg-3 col-md-4 col-sm-4 col-xs-6 col-xs1-12">
                        <a title="Tour ghép Đà Nẵng 3 ngày 2 đêm " href="">
                            <img title="" alt="" src="{{asset('images/'.$search->hinhAnhs[0]->hinh_anh)}}"/>
                            <span class="product_name">
                             {{ $search->ten_tour}}                       
                             </span>
                         </a>
                         <div class="price_box">
                            <p><strong>Mã tour: </strong>{{ $search->ma_tour}}</p>
                            <p>
                                <strong>Hình thức: </strong>
                                @foreach ($dataTourType as $typeTour)
                                    @if($typeTour->id === $search->id_hinh_thuc_tour)
                                        {{ $typeTour->hinh_thuc }}
                                    @endif
                                @endforeach
                            </p>
                            <p><strong>Thời gian: </strong>{{ $search->thoi_gian }}</p>
                            <p>
                                <strong>Giá: </strong>
                                <span class="product_price">
                                    {{ $search->gia_tour}} đ
                                </span>
                            </p>
                        </div>
                    </li>    
                    @endforeach         
                    <div class="clearfix"></div>
                </ul>
            </div>
            @include('layouts.newest_tour')
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- end product -->

    <div class="title_news">
        <a href="{{url('news')}}">Tin tức</a>
    </div>
    @include('layouts.tintuc_widget')
</div>
</div>
@endsection
