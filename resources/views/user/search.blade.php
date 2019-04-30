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
                            <img title="" alt="" src="data/tour/500/lang-phap-bana-hills-1467951715.jpg"/>
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
            <div class="col-lg-3 no_padding_l no_padding_r tour_hot">
                <div class="title_product_1">
                    <h2>
                        <a href="du-lich-da-nang-3-ngay-2-dem.html">Nổi bật</a>
                    </h2>
                </div>
                <ul>
                    <li>
                        <div class="col-lg-5">
                            <a href="142-tour-ghep-da-nang-3-ngay-2-dem.html">
                                <img width="100%" src="data/tour/500/lang-phap-bana-hills-1467951715.jpg" />
                            </a>
                        </div> 
                        <div class="col-lg-7">
                            <a href="142-tour-ghep-da-nang-3-ngay-2-dem.html">
                                Tour ghép Đà Nẵng 3 ngày 2 đêm  
                            </a>
                            <span class="product_price">
                                3.300.000 ₫      
                            </span>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <div class="col-lg-5">
                            <a href="174-tour-ba-na-hue-ngu-hanh-son-3-ngay.html">
                                <img width="100%" src="data/tour/500/ngu-hanh-son2-1468619023.jpg" />
                            </a>
                        </div> 
                        <div class="col-lg-7">
                            <a href="174-tour-ba-na-hue-ngu-hanh-son-3-ngay.html">
                                Tour Bà Nà Huế Ngũ Hành Sơn 3 ngày 
                            </a>
                            <span class="product_price">
                                3.150.000 ₫      
                            </span>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <div class="col-lg-5">
                            <a href="183-tour-du-lich-da-nang-3-ngay-gia-re.html">
                                <img width="100%" src="data/tour/500/hue8-1470341509.jpg" />
                            </a>
                        </div> 
                        <div class="col-lg-7">
                            <a href="183-tour-du-lich-da-nang-3-ngay-gia-re.html">
                                Tour du lịch Đà Nẵng 3 ngày giá rẻ 
                            </a>
                            <span class="product_price">
                                2.350.000 ₫      
                            </span>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <div class="col-lg-5">
                            <a href="202-tour-ha-noi-da-nang-3-ngay-2-dem-bang-may-bay.html">
                                <img width="100%" src="data/tour/500/ba-na-1512209400.jpg" />
                            </a>
                        </div> 
                        <div class="col-lg-7">
                            <a href="202-tour-ha-noi-da-nang-3-ngay-2-dem-bang-may-bay.html">
                                Tour Hà Nội Đà Nẵng 3 ngày 2 đêm bằng máy bay 
                            </a>
                            <span class="product_price">
                                5.600.000 ₫      
                            </span>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- end product -->

    <div class="title_news">
        <a href="tin-tuc.html">Tin tức</a>
    </div>
    <div class="news_grid">
        <div class="news_items col-lg-20 col-md-3 col-sm-4 col-xs-6 col-xs1-12 n_padding_l_r">
            <div class="img_n">
                <a  title="Định vị Đấu trường La Mã tại Việt Nam" href="tin-tuc/dinh-vi-dau-truong-la-ma-tai-viet-nam-1198.html">
                    <img alt="Định vị Đấu trường La Mã tại Việt Nam" src="data/news/500/dinh-vi-dau-truong-la-ma-tai-viet-nam.jpg"/>
                </a>
            </div>
            <div class="content_n">
                <span class="title_n">
                    <a class="n_title" title="Định vị Đấu trường La Mã tại Việt Nam" href="tin-tuc/dinh-vi-dau-truong-la-ma-tai-viet-nam-1198.html">Định vị Đấu trường La Mã tại Việt Nam</a>
                </span>
                <p class="des_n">
                Đấu trường La Mã luôn được xem là công trình tiêu biểu, đại diện cho nền kiến trúc phương Tây. Trong đó, những cái tên như: đấu trường Verona, Colosseum hay Parthenon luôn là những nơi mà ai cũng ao ước được một lần đặt chân đến. Nhưng ước ao thế thôi chứ đi du lịch châu Âu vừa xa, vừa tốn nhiều kinh phí nên không phải bạn trẻ nào cũng có túi tiền rủng rỉnh để làm một chuyến đâu.            </p>
            </div>
        </div>
        <div class="news_items col-lg-20 col-md-3 col-sm-4 col-xs-6 col-xs1-12 n_padding_l_r">
            <div class="content_n">
                <span class="title_n">
                    <a class="n_title" title="Bãi biển Việt Nam mà check in cứ ngỡ ở Bali" href="tin-tuc/bai-bien-viet-nam-ma-check-in-cu-ngo-o-bali-1197.html">Bãi biển Việt Nam mà check in cứ ngỡ ở Bali</a>
                </span>
                <p class="des_n">
                Chẳng cần đi Bali hay Hawaii, bạn vẫn có thể chụp được vô vàn ảnh sống ảo cực thần thái tại khu nghỉ dưỡng này            </p>
            </div>
            <div class="img_n">
                <a  title="Bãi biển Việt Nam mà check in cứ ngỡ ở Bali" href="tin-tuc/bai-bien-viet-nam-ma-check-in-cu-ngo-o-bali-1197.html">
                    <img alt="Bãi biển Việt Nam mà check in cứ ngỡ ở Bali" src="data/news/500/bai-bien-viet-nam-ma-check-in-cu-ngo-o-bali1.jpg"/>
                </a>
            </div>
        </div>
        <div class="news_items col-lg-20 col-md-3 col-sm-4 col-xs-6 col-xs1-12 n_padding_l_r">
            <div class="img_n">
                <a  title="Ngắm vườn Tulip lớn nhất Việt Nam tại Bà Nà hills" href="tin-tuc/ngam-vuon-tulip-lon-nhat-viet-nam-tai-ba-na-hills-1196.html">
                    <img alt="Ngắm vườn Tulip lớn nhất Việt Nam tại Bà Nà hills" src="data/news/500/ngam-vuon-tulip-lon-nhat-viet-nam-tai-ba-na-hills.jpg"/>
                </a>
            </div>
            <div class="content_n">
                <span class="title_n">
                    <a class="n_title" title="Ngắm vườn Tulip lớn nhất Việt Nam tại Bà Nà hills" href="tin-tuc/ngam-vuon-tulip-lon-nhat-viet-nam-tai-ba-na-hills-1196.html">Ngắm vườn Tulip lớn nhất Việt Nam tại Bà Nà hills</a>
                </span>
                <p class="des_n">
                Diễn ra từ 14/2 tới 31/3, Lễ hội hoa tulip lớn nhất Việt Nam sẽ là trải nghiệm khó quên của du khách trên đỉnh núi Chúa, tại Sun World Ba Na Hills (Đà Nẵng).            </p>
            </div>
        </div>
        <div class="news_items col-lg-20 col-md-3 col-sm-4 col-xs-6 col-xs1-12 n_padding_l_r">
            <div class="content_n">
                <span class="title_n">
                    <a class="n_title" title="Đà Nẵng sắp có tuyến &quot;Phố đi bộ-Chợ đêm Bạch Đằng&quot;" href="tin-tuc/da-nang-sap-co-tuyen-pho-di-bo-cho-dem-bach-dang-1195.html">Đà Nẵng sắp có tuyến &quot;Phố đi bộ-Chợ đêm Bạch Đằng&quot;</a>
                </span>
                <p class="des_n">
                Tuyến đường Bạch Đằng tuyệt đẹp nằm giữa 2 cây cầu nổi tiếng là cầu Trần Thị Lý và cầu Rồng được dự kiến sẽ thành tuyến phố đi bộ và chợ đêm tại Đà Nẵng. Phố đi bộ – Chợ đêm Bạch Đằng có quy mô 3,29 ha, phía Bắc giáp đường Bình Minh 5, phía Tây giáp khu dân cư của Cty 319, phía Nam giáp đường Trần Thị Lý, phía Đông giáp sông Hàn.            </p>
            </div>
            <div class="img_n">
                <a  title="Đà Nẵng sắp có tuyến &quot;Phố đi bộ-Chợ đêm Bạch Đằng&quot;" href="tin-tuc/da-nang-sap-co-tuyen-pho-di-bo-cho-dem-bach-dang-1195.html">
                    <img alt="Đà Nẵng sắp có tuyến &quot;Phố đi bộ-Chợ đêm Bạch Đằng&quot;" src="data/news/500/da-nang-sap-co-tuyen-pho-di-bo-cho-dem-bach-dang.jpg"/>
                </a>
            </div>
        </div>
        <div class="news_items col-lg-20 col-md-3 col-sm-4 col-xs-6 col-xs1-12 n_padding_l_r">
            <div class="img_n">
                <a  title="Mách bạn địa điểm chụp hình ma mị tại Đà Lạt" href="tin-tuc/mach-ban-dia-diem-chup-hinh-ma-mi-tai-da-lat-1194.html">
                    <img alt="Mách bạn địa điểm chụp hình ma mị tại Đà Lạt" src="data/news/500/mach-ban-dia-diem-chup-hinh-ma-mi-tai-da-lat.jpg"/>
                </a>
            </div>
            <div class="content_n">
                <span class="title_n">
                    <a class="n_title" title="Mách bạn địa điểm chụp hình ma mị tại Đà Lạt" href="tin-tuc/mach-ban-dia-diem-chup-hinh-ma-mi-tai-da-lat-1194.html">Mách bạn địa điểm chụp hình ma mị tại Đà Lạt</a>
                </span>
                <p class="des_n">
                Cùng nhau ghi dấu vẻ đẹp kỳ bí của Phân viện sinh học Đà Lạt, bạn sẽ có bộ ảnh mang đậm chất riêng vô cùng đặc sắc.            </p>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
</div>
@endsection
