@extends('layouts.master')
@section('Content')
<div class="tour" >
    <form action="{{route('dattour.dattour')}}" method="post" accept-charset="utf-8" id="book_tour">
        @csrf
        <h1 style="display: none" class="title"><span>{{$tour->ten_tour}}</span></h1>
        
                        
        <div style="border-bottom: #ccc dotted 1px; padding: 15px 0; margin-bottom: 20px; background: #fff">
            <div class="col-lg-6 col-md-6 col-sm-6" style="border-right: #ccc dotted 1px;">
                
                <h2 class="title"><span>Thông tin đặt Tour</span></h2>
                <br>
                <div class="form-group col-lg-12">
                    <input type="hidden" name="id_tour" value="{{$tour->id}}">
                    <input type="hidden" name="ma_tour"  value="{{$tour->ma_tour}}">
                    <input type="text" name="fullname" id="fullname" class="form-control" value="{{Auth::user()->ten_hien_thi}}" disabled="" placeholder="Họ tên *" >
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
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <select name="month" id="thang" class="form-control" >
                            <option value="">Tháng</option>
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
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <select name="year" id="nam" class="form-control" >
                            <option value="">Năm</option>
                                @for($i=date('Y');$i<=date('Y')+2;$i++)
                                <option value="{{$i}}" >{{$i}}</option>
                                @endfor
                            </select>
                    </div>
                    <div class="clearfix"></div>
                </div>


                <div class="form-group col-md-4">
                    <select name="adults" id="nl" class="form-control" >
                        <option value="">Số người lớn</option>
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
                    <p><strong>Tên tour:&nbsp;</strong>{{$tour->ten_tour}}</p>
                    <p class="code"><strong>Mã tour:&nbsp;</strong>{{$tour->ma_tour}}</p>
                    <p><strong>Thời gian:&nbsp;</strong>{{$tour->thoi_gian}}</p>
                    <p><strong>Lịch trình:&nbsp;</strong>{!!$tour->lich_trinh!!}</p>
                    <p><strong>Phương tiện:&nbsp;</strong>{{$tour->phuong_tien}}</p>
                    <p><strong>Hình thức:&nbsp;</strong>{{$tour->hinhThucTour->hinh_thuc}}</p>
                    <div><strong>Giá tour:</strong><span class="tour_price"> {{number_format($tour->gia_tour*1000,0,',','.')}}vnđ / </span><strong>người lớn</strong></div>
                    <input type="hidden" name="gia_tour" value="{{$tour->gia_tour}}">
                    <div><strong>Tổng thanh toán: <span id="total_payment" class="tour_price">0 </span></strong> vnđ</div>

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