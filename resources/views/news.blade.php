@extends('layouts.master')
@section('Content')
<div class="">
    <div class="news">
        <h2 id="news-title" class="title wow slideInUp">{{$tieude}}</h2>
            <div class="news_grid">
                @php($i=0)
                @foreach ($tintuc as $tintuc)
                    <div class="news_items col-lg-3 col-sm-4 col-xs-6 col-xs1-12 n_padding_l_r">
                        @if($i%2==0)
                        <div class="img_n">
                            <a  title="{{$tintuc->tieu_de}}" href="tin-tuc/{{$tintuc->slug}}">
                                <img width="300" alt="{{$tintuc->tieu_de}}" src="{{asset('images/'.$tintuc->hinh_anh->hinh_anh)}}"/>
                            </a>
                        </div>
                        @endif
                        <div class="content_n">
                            <span class="title_n">
                                <a class="n_title" title="{{$tintuc->tieu_de}}" href="tin-tuc/{{$tintuc->slug}}">{{$tintuc->tieu_de}}</a>
                            </span>
                            <p class="des_n elipsis">
                                {!!strip_tags($tintuc->noi_dung)!!}
                            </p>
                        </div>
                        @if($i%2==1)
                        <div class="img_n">
                            <a  title="{{$tintuc->tieu_de}}" href="tin-tuc/{{$tintuc->slug}}">
                                <img width="300" alt="{{$tintuc->tieu_de}}" src="{{asset('images/'.$tintuc->hinh_anh->hinh_anh)}}"/>
                            </a>
                        </div>
                        @endif
                    </div>
                @php($i++)
                @endforeach           
            </div>
       
        <div class="clearfix"></div>  
        <h2 class="preloader" style="text-align: center; display: none">
            <img src="{{url('templates/images/ajax-load.gif')}}"/>
        </h2> 
        <div class="load_more">
            <button id="btn-loadmore" class="btn_load_more">XEM THÊM</button>
        </div> 
    </div>
</div> 
@endsection
@section('script')
    <script src="{{asset('js/tintuc_loadmore.js')}}"></script>
@endsection