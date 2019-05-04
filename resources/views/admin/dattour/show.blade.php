@extends('admin.layouts.master')
@section('Content')
<section class="content">
    <p><strong>Tên: </strong>{{$dattour->users->ten_hien_thi}}</p>
    <p><strong>Tour: </strong>{{$tour->ten_tour}}</p>
    <p><strong>Ngày đặt: </strong>{{$dattour->ngay_dat}}</p>
    <p><strong>Ngày khởi hành: </strong>{{$dattour->ngay_khoi_hanh}}</p>
    <p><strong>Số lượng: </strong>{{$dattour->nguoi_lon}} người lớn, {{$dattour->tre_em}} trẻ em, {{$dattour->em_be}} em bé</p>
    <p><strong>Giá: </strong>{{number_format($tour->chi_tiet_dat_tour[0]->gia_tien*1000,0,',','.')}}</p>
</section>
@endsection
@section('script')  	
@endsection