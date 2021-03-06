@php
    $__danhmuc = App\DanhMucClass::getDanhMuc();
@endphp
<div class="cate">
    <ul>
        @foreach($__danhmuc as $__danhmuc)
        <li>
            <a title="Tour hằng ngày" href="{{route('tour.followdanhmuc',['slug'=>$__danhmuc->slug])}}">{{$__danhmuc->ten_danh_muc}}</a>
            @if(count($__danhmuc['child'])!=0)
                <span title="More" class="open" style="display: none"><i class="fa fa-plus plus"></i></span>
                <span title="Less" class="exit" ><i class="fa fa-minus minus"></i></span>
                <ul class="sub_cate_tour">
                    @foreach($__danhmuc['child'] as $child)
                        <li><a title="Tour Huế" href="{{route('tour.followdanhmuc',['slug'=>$child->slug])}}">{{$child->ten_danh_muc}}</a></li>
                    @endforeach
                </ul>
            @endif
            <div class="clearfix"></div>
        </li>
        @endforeach
    </ul>
</div>