@extends('layouts.master')
@section('style')
    <link rel="stylesheet prefetch" href="{{ asset('templates/css/bootstrap-datetimepicker.css') }} ">
@endsection
@section('Content')
<div class="tour" >
    <form action="#" method="post" accept-charset="utf-8" id="book_tour">
        @csrf
        <div class="">
            <div style="border-bottom: #ccc dotted 1px; padding: 15px 0; margin-bottom: 20px; background: #fff">
                <div class="col-lg-6 col-md-6 col-sm-6" style="border-right: #ccc dotted 1px;">
                    <h2 class="title"><span>Thông tin đặt Tour</span></h2>
                    <br>
                    <div class="form-group col-lg-12">
                        <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Họ tên *" value="{{ $user->ten_hien_thi }}" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Điện thoại *" value="{{ $user->so_dien_thoai }}" disabled>
                    </div>
                    <div class="form-group col-md-6 ">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email *" value="{{ $user->email }}" disabled>
                    </div>
                    <div class="form-group col-lg-12">
                        <input type="text" name="address" id="address" class="form-control" placeholder="Địa chỉ *" value="{{ $user->dia_chi }}" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            <input class="form-control" readonly="" type="text" name="ngay_dat" placeholder="Ngày khởi hành *" value="{{ \Carbon\Carbon::now()->addDays(1)->format('d-m-Y') }}">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group col-md-4">
                        <select name="nguoi_lon" id="nl" class="form-control">
                            <option value="">Số người lớn</option>
                            <?php for($i = 0; $i < 11; $i ++) { ?>
                                <option value="{{ $i }}">{{ $i }}</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <select name="tre_em" id="trnho" class="form-control" >
                            <option value="0">Trẻ em</option>
                            <?php for($i = 1; $i < 11; $i ++) { ?>
                                <option value="{{ $i }}">{{ $i }}</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <textarea name="ghi_chu" id="notes" class="form-control" placeholder="Ghi chú"></textarea>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2 class="title"><span>Thông tin chi tiết Tour</span></h2>
                    <br>
                    <div class="info_book_tour col-lg-12">
                        <p><strong>Tên tour:&nbsp;</strong>{{ $tour->ten_tour }}</p>
                        <p class="code"><strong>Mã tour:&nbsp;</strong>{{ $tour->ma_tour }}</p>
                        <p><strong>Thời gian:&nbsp;</strong>{{ $tour->thoi_gian }}</p>
                        <p><strong>Lịch trình:&nbsp;</strong>{{ $tour->lich_trinh }}</p>
                        <p><strong>Phương tiện:&nbsp;</strong>{{ $tour->phuong_tien }}</p>
                        <p><strong>Hình thức tour:&nbsp;</strong>{{ $tour->hinhThucTour->hinh_thuc }}</p>
                        <p><strong>Khuyến mãi:&nbsp;</strong>{{ $tour->khuyenMai->khuyen_mai }}</p>
                        <div><strong>Giá tour:</strong><span class="tour_price"> {{ $tour->gia_tour }} vnd/ </span><strong>người lớn</strong></div>
                        <input type="hidden" name="tour_price" value="{{ $tour->gia_tour }}">
                        <div><strong>Tổng thanh toán: <span id="total_payment" class="tour_price">0.00 vnd</span></strong> </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row" style="text-align: center">
                <h4 class="response h4" style="text-align: center; display: none">
                </h4>
                <h2 class="preloader" style="text-align: center; display: none">
                    <img src="https://dulichdanangxanh.com/templates/images/ajax-load.gif">
                </h2>
                <input type="button" class="btn_booking" value="Đặt tour">
            </div>
            <input type="hidden" name="slug" value="{{ $tour->slug }}">
            <input type="hidden" name="id_users" value="{{ $user->id }}">
        </div>
    </form>
</div>
@endsection
@section('script')
<script src="{{ asset('templates/js/bootstrap-datetimepicker.js') }}"></script>
<script src="{{ asset('js/booking.js') }}"></script>
@endsection
