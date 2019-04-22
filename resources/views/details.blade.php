@extends('layouts.master')
@section('Content')
<div class="tour" >
    <form action="#" method="post" accept-charset="utf-8" id="book_tour">
<div class="hidden">
<input type="hidden" name="token" value="2c9d6440eb024c398a6c45a5aaa5a5e7" />
</div>    <div class="">

        <h1 style="display: none" class="title"><span>Tour Bà Nà từ Đà Nẵng</span></h1>
        
                        
        <div style="border-bottom: #ccc dotted 1px; padding: 15px 0; margin-bottom: 20px; background: #fff">
            <div class="col-lg-6 col-md-6 col-sm-6" style="border-right: #ccc dotted 1px;">
                
                <h2 class="title"><span>Thông tin đặt Tour</span></h2>
                <br>
                <div class="form-group col-lg-12">
                    <input type="hidden" name="tour_id" id="tour_id" value="136">
                    <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Họ tên *" >
                </div>
                <div class="form-group col-md-6">
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Điện thoại *">
                </div>
                <div class="form-group col-md-6 ">
                    <input type="text" name="email" id="email" class="form-control" placeholder="Email *">
                </div>
                <div class="form-group col-lg-12">
                    <input type="text" name="address" id="address" class="form-control" placeholder="Địa chỉ *">
                </div>


                <div class="col-lg-12 no_padding_l no_padding_r">
                    <div class="form-group col-md-4">
                        <select name="day" id="ngay" class="form-control" >
                            <option value="">Ngày khởi hành</option>
                                                        <option value="1" >1</option>
                                                        <option value="2" >2</option>
                                                        <option value="3" >3</option>
                                                        <option value="4" >4</option>
                                                        <option value="5" >5</option>
                                                        <option value="6" >6</option>
                                                        <option value="7" >7</option>
                                                        <option value="8" >8</option>
                                                        <option value="9" >9</option>
                                                        <option value="10" >10</option>
                                                        <option value="11" >11</option>
                                                        <option value="12" >12</option>
                                                        <option value="13" >13</option>
                                                        <option value="14" >14</option>
                                                        <option value="15" >15</option>
                                                        <option value="16" >16</option>
                                                        <option value="17" >17</option>
                                                        <option value="18" >18</option>
                                                        <option value="19" >19</option>
                                                        <option value="20" >20</option>
                                                        <option value="21" >21</option>
                                                        <option value="22" >22</option>
                                                        <option value="23" >23</option>
                                                        <option value="24" >24</option>
                                                        <option value="25" >25</option>
                                                        <option value="26" >26</option>
                                                        <option value="27" >27</option>
                                                        <option value="28" >28</option>
                                                        <option value="29" >29</option>
                                                        <option value="30" >30</option>
                                                        <option value="31" >31</option>
                                                    </select>
                    </div>
                    <div class="form-group col-md-4">
                        <select name="month" id="thang" class="form-control" >
                            <option value="">Tháng</option>
                                                        <option value="1" >1</option>
                                                        <option value="2" >2</option>
                                                        <option value="3" >3</option>
                                                        <option value="4" >4</option>
                                                        <option value="5" >5</option>
                                                        <option value="6" >6</option>
                                                        <option value="7" >7</option>
                                                        <option value="8" >8</option>
                                                        <option value="9" >9</option>
                                                        <option value="10" >10</option>
                                                        <option value="11" >11</option>
                                                        <option value="12" >12</option>
                                                    </select>
                    </div>
                    <div class="form-group col-md-4">
                        <select name="year" id="nam" class="form-control" >
                            <option value="">Năm</option>
                                                        @for($i=date('Y');$i<=date('Y')+100;$i++)
                                                        <option value="{{$i}}" >{{$i}}</option>
                                                        @endfor
                                                    </select>
                    </div>
                    <div class="clearfix"></div>
                </div>


                <div class="form-group col-md-4">
                    <select name="adults" id="nl" class="form-control" >
                        <option value="">Số người lớn</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                </div>
                <div class="form-group col-md-4">
                    <select name="children" id="trnho" class="form-control" >
                        <option value="">Trẻ em</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                </div>
                <div class="form-group col-md-4">
                    <select name="baby" id="baby" class="form-control" >
                        <option value="">Em bé</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                </div>
                <div class="form-group col-md-12">
                    <textarea name="notes" id="notes" class="form-control" placeholder="Ghi chú"></textarea>
                </div>
                <!-- <div class="form-group col-lg-12">
                    <input style="width: 25%; float: left" class="form-control" type="text"  autocomplete="off" name="captcha" placeholder="Mã bảo vệ">
                    <span style="float: left; margin-left:10px; "><img height="34" id="captcha" src="../api/captcha.png"></span>   
                    <div class="clearfix"></div>
                    <div for="captcha" generated="true" class="error" style="display: none;clear: both;">Vui lòng nhập mã bảo vệ</div>
                </div> -->

            </div>


            <div class="col-lg-6 col-md-6 col-sm-6">
                <h2 class="title"><span>Thông tin chi tiết Tour</span></h2>
                <br>
                <div class="info_book_tour col-lg-12">
                    <p><strong>Tên tour:&nbsp;</strong>Tour Bà Nà từ Đà Nẵng</p>
                    <p class="code"><strong>Mã tour:&nbsp;</strong>DLDNX-BN02</p>
                    <p><strong>Thời gian:&nbsp;</strong>1 ngày 0 đêm</p>
                    <p><strong>Lịch trình:&nbsp;</strong>Cầu Bàn Tay - Vườn hoa - Fantasy Park - Làng Pháp - Máng trượt</p>
                    <p><strong>Phương tiện:&nbsp;</strong>Ôtô, Cáp treo</p>
                    <p><strong>Hình thức:&nbsp;</strong>Tour ghép tiêu chuẩn</p>
                    <div><strong>Giá tour:</strong><span class="tour_price"> 980.000vnđ / </span><strong>người lớn</strong></div>
                                        <div><strong>Tổng thanh toán: <span id="total_payment" class="tour_price">1.960.000 </span></strong> vnđ</div>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="row" style="text-align: center">
            <h3></h3>
            <h4>
                            </h4>
            <button type="submit" class=" btn_booking">Đặt tour</button>
        </div>
        <input type="hidden" name="payment" id="payment_id" value="VP">
    </div>
    </form>     

</div>
@endsection
@section('script')
<script src="{{url('js/dulich_detail.js')}}"></script>
@endsection