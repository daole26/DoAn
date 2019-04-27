<div class="col-lg-7 slide_img_product">
    <div class="clearfix" style="">
        <div class="lSSlideOuter ">
            <div class="lSSlideWrapper usingCss" style="transition-duration: 500ms; transition-timing-function: ease;">
                <ul id="image-gallery" class="gallery list-unstyled lightSlider lsGrab lSSlide" style="width: 1996px; transform: translate3d(-998px, 0px, 0px); height: 379px; padding-bottom: 0%;">
                    @if($images->isEmpty())
                        <li data-thumb="https://dulichdanangxanh.com/data/tour/500/hoi-an8-1467928142.jpg" class="clone left" style="width: 499px; margin-right: 0px;">
                            <img title="hoi-an8-1467928142.jpg" alt="hoi-an8-1467928142.jpg" src="https://dulichdanangxanh.com/data/tour/500/hoi-an8-1467928142.jpg">
                        </li>
                        <li data-thumb="https://dulichdanangxanh.com/data/tour/500/hoi-an5-1467928141.jpg" class="lslide" style="width: 499px; margin-right: 0px;">
                            <img title="hoi-an5-1467928141.jpg" alt="hoi-an5-1467928141.jpg" src="https://dulichdanangxanh.com/data/tour/500/hoi-an5-1467928141.jpg">
                        </li>
                    @else
                    @foreach($images as $image)
                        <li data-thumb="{{ asset($image->hinh_anh) }}" class="lslide" style="width: 499px; margin-right: 0px;">
                            <img title="hoi-an5-1467928141.jpg" alt="hoi-an5-1467928141.jpg" src="{{ asset($image->hinh_anh) }}">
                        </li>
                    @endforeach
                    @endif
                </ul>
                <div class="lSAction">
                    <a class="lSPrev"></a>
                    <a class="lSNext"></a>
                </div>
            </div>
            <ul class="lSPager lSGallery" style="margin-top: 5px; transition-duration: 500ms; width: 202.1px; transform: translate3d(0px, 0px, 0px);">
                @if($images->isEmpty())
                    <li style="width:100%;width:95.8px;margin-right:5px" class="">
                        <a href="javascript:void(0)"><img src="https://dulichdanangxanh.com/data/tour/500/hoi-an5-1467928141.jpg"></a>
                    </li>
                    <li style="width:100%;width:95.8px;margin-right:5px" class="active">
                        <a href="javascript:void(0)"><img src="https://dulichdanangxanh.com/data/tour/500/hoi-an8-1467928142.jpg"></a>
                    </li>
                @else
                @foreach($images as $image)
                    <li style="width:100%;width:95.8px;margin-right:5px" class="active">
                        <a href="javascript:void(0)"><img src="{{ asset($image->hinh_anh) }}"></a>
                    </li>
                @endforeach
                @endif
            </ul>
        </div>
    </div>
</div>
