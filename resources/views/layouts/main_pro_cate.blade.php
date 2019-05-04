<div class="main_pro_cate">
  @php
      $__danhmuc = \App\DanhMucClass::getDanhMuc();
  @endphp
  @if(!empty($__danhmuc))
    <div class="header_cate"><span class="btn_cat"><i class="fa fa-bars"></i></span>Danh mục</div>
    <div class="product_cate">
        <ul>
          @php($i=0)
          @foreach($__danhmuc as $__danhmuc)
            <li>
                <div>
                    <a title="Tour trong nước" href="
                    @if(Route::currentRouteName()=='index')
                      #danhmuc-{{$__danhmuc->id}}
                    @else
                      {{route('tour.followdanhmuc',['slug'=> $__danhmuc->slug])}}
                    @endif
                    ">
                       <img src="{{ asset('templates/images/icon/cat'.($i+1).'.png') }}">                        <span>
                       {{$__danhmuc->ten_danh_muc}}                       </span>
                       <div class="clearfix"></div>
                   </a>
                    <i class="fa fa-angle-right btn_sup show1"></i>
                    <i style="display: none" class="fa fa-angle-down btn_sup hide1"></i>
                    <div class="clearfix"></div>
                    @if($__danhmuc['child']->count()!=0)
                      <ul style="" class="sub_p" id="sup_cate">
                          @foreach($__danhmuc['child'] as $child)
                          <li><a href="
                            @if(Route::currentRouteName()=='index')
                            #danhmuc-{{$child->id}}
                            @else
                              {{route('tour.followdanhmuc',['slug'=> $child->slug])}}
                            @endif
                          ">{{$child->ten_danh_muc}}</a></li>
                          @endforeach
                      </ul>
                    @endif
                </div>
            </li>
            @php($i++)
            @php($i%=5)
          @endforeach

    </ul>
    </div>
    @endif
      <div class="clearfix"></div>
