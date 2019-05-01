@extends('layouts.master')
@section('Content')
<ul class="product_grid white_bg col-lg-12 no_padding_l no_padding_r">
    @foreach($tour as $tour)
   <li class=" items col-lg-3 col-md-4 col-sm-4 col-xs-6 col-xs1-12">
       <a title="Tour ghép Đà Nẵng 3 ngày 2 đêm " href="{{route('tour.detail',['slug'=>$tour->slug])}}">
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
@endsection