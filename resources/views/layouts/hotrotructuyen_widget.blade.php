<!--Box-->
<div class="boxItem">
    <div class="box-title">
        <div class="lb-name">Hỗ trợ trực tuyến</div>
    </div>
    @php
        $_hotro = App\ho_tro_truc_tuyen::all()
    @endphp
    @foreach ($_hotro as $_hotro)
        <div class="support">
            <div class="avt">
                        <img alt="avt" title="avt" src="{{asset('/images/hotro/'.$_hotro->hinh_anh)}}"/>
                    </div>
            <div class="content">
                <span>Tư vấn dịch vụ</span>
                <p>
                    <a href="{{$_hotro->url}}">
                        <span class="fa fa-skype"></span>
                        {{$_hotro->ten}}
                    </a>
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    @endforeach
</div><!--End Box-->