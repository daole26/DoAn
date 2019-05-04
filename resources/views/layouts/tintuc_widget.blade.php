<div class="news_grid">
    @php
        $tintucs = App\tin_tuc::take(4)->get();
    @endphp
    @php($i=0)
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