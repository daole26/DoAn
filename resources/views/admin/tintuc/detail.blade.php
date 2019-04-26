@extends('admin.layouts.master')
@section('Content')
<section class="content">
    <h2 class="text-uppercase">{{$tintuc->tieu_de}}</h2>
    <h4>{{mb_substr(strip_tags($tintuc->noi_dung),0,20)}}</h4>
    <p class="text-center"><img src="{{asset('images/'.$tintuc->hinh_anh->hinh_anh)}}" alt="{{$tintuc->tieu_de}}"></p>
    <p>{!!$tintuc->noi_dung!!}</p>
</section>
@endsection
@section('script')
<!-- CK Editor -->
<script src="{{asset('admin/bower_components/ckeditor/ckeditor.js')}}"></script>
<script>
	$(function () {
	    CKEDITOR.replace('txt-noidung');
    })
</script>
@endsection