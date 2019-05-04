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
