@extends('admin.layouts.master')
@section('Content')
<section class="content">
    <h2 class="text-uppercase">{{$tintuc->tieu_de}}</h2>
    <h4 class="elipsis">{!!strip_tags($tintuc->noi_dung)!!}</h4>
    <p class="text-center"><img width="300" src="{{asset('images/'.$tintuc->hinh_anh->hinh_anh)}}" alt="{{$tintuc->tieu_de}}"></p>
    <p>{!!$tintuc->noi_dung!!}</p>
    <a href="{{route('tintuc.index')}}" class="btn btn-default btn-flat">Quay lại</a>
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