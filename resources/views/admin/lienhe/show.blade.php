@extends('admin.layouts.master')
@section('Content')
<p><strong>Từ: </strong>{{$lienhe->ho_ten}}</p>
<p><strong>Email: </strong>{{$lienhe->email}}</p>
<p><strong>Tiêu đề: </strong>{{$lienhe->tieu_de}}</p>
<p><strong>Nội dung: </strong></p>
<p>{{$lienhe->noi_dung}}</p>

<a href="{{route('lienhe.index')}}" class="btn btn-default btn-flat">Quay lại</a>
@endsection