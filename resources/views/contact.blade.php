@extends('layouts.master')
@section('Content')
<div class="tour">
    <div class="contact white_bg">

        <div class="col-lg-12 map">

            <div id="map-canvas-1" style="height: 300px;">

            </div>
        </div>
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpiYmEMsrVksFhKxDOmLNod-X7K3ewK4Y&amp;callback=initMap"></script>
        <script src="https://dulichdanangxanh.com/templates/js/jquery.gmap.min9c3a.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $('#map-canvas-1').gMap({
                    zoom: 15,
                    markers: [
                        {
                            address: "376 Nguyễn Tri Phương, Quận Thanh Khê, Thành phố Nẵng",
                            html: "CÔNG TY CỔ PHẦN THƯƠNG MẠI &amp; DV DU LỊCH ĐÀ NẴNG XANH",
                            popup: true
                        }
                    ]
                });
            });
        </script>

        <div class="col-lg-6 col-md-6 info_left" >
            <h2 class="title_c">
                <span>Liên hệ</span>
            </h2>

            <h1>CÔNG TY CỔ PHẦN THƯƠNG MẠI &amp; DV DU LỊCH ĐÀ NẴNG XANH</h1>

            <ul>
                                <li>
                    <i  style="float: left" class="glyphicon glyphicon-map-marker"></i>
                    <span><div style="padding-left: 33px">376 Nguyễn Tri Phương, Quận Thanh Khê, Thành phố Nẵng</div></span>
                </li>
                                                                <li>
                    <i  style="float: left" class="glyphicon glyphicon-earphone"></i>
                    <span><div style="padding-left: 33px">(+84-236) 247.5555</div></span>
                </li>
                                                <li>
                    <i  style="float: left" class="fa fa-fax"></i>
                    <span><div style="padding-left: 33px">(+84-236) 3 917.854</div></span>
                </li>
                                                <li>
                    <i class="glyphicon glyphicon-phone"></i>
                    <span>(+84) 974 818 106</span>
                </li>
                                                <li>
                    <i class="fa fa-envelope-o"></i>
                    <span><a href="mailto:kinhdoanh@danangxanh.com">kinhdoanh@danangxanh.com</a></span>
                </li>
                            </ul>
        </div>
        <div class="col-lg-6 col-md-6">
            <h2 class="title_c">
                <span>Gửi thông tin cho chúng tôi</span>
            </h2>

            <form action="#" method="post" accept-charset="utf-8" class="form_contact" id="form_contact">
<div class="hidden">
<input type="hidden" name="token" value="2c9d6440eb024c398a6c45a5aaa5a5e7" />
</div>                                    <div class="form-contact">
                <div class="row">
                    <div class="form-group col-md-5 col-sm-6 col-xs-12">
                        <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Họ tên *">
                    </div>
                    <div class="form-group col-md-7 col-sm-6 col-xs-12">
                        <input type="text" name="email" id="email" placeholder="Email *" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" name="title" id="title" placeholder="Tiêu đề *" class="form-control" >
                </div>
                <div class="form-group">
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="Nội dung"></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit"  class="btn_send">Gửi thông tin</button>
                </div>

            </div>

            </form>             
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endsection
