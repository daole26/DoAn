@extends('admin.layouts.master')
@section('custom-css')
    <link rel="stylesheet" href="{{asset('admin/css/tintuc.css')}}">
@endsection
@section('Content')
<section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tin tức</h3>
            </div>
          
            <div class="box-header">
                <div class="box-title">
                    <div class="btn-group">
                    <a href="{{route('tintuc.insert')}}" id="sample_editable_1_new" class="btn btn-info btn-flat"> Thêm mới
                        <i class="fa fa-plus"></i>
                    </a>
                    </div>
                </div>
            </div><!-- /.box-header -->
          <div class="box-body">
            <table id="tintuc-table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>STT</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Loại tin tức</th>
                    <th>Hình ảnh</th>
                    <th>Hành Động</th>
                    </tr>
                </thead>
                @php($i=1)
                @php($loaitintuc=['','Du lịch','Ẩm thực'])
                <tbody>
                    @foreach($tintucs as $tintuc)
                    <tr>
                        <td> {{$i++}} </td>
                        <td> {{$tintuc->tieu_de}} </td>
                        <td>{{mb_substr(strip_tags($tintuc->noi_dung),0,50)}}...</td>
                        <td>{{$loaitintuc[$tintuc->loai_tin_tuc]}}</td>
                        <td><img width="100px" src="{{asset('images/'.$tintuc->hinh_anh->hinh_anh)}}"></td>
                        <td>
                            <a href="{{route('tintuc.edit',['id'=>$tintuc->id])}}" class="btn btn-info btn-flat">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="{{route('tintuc.detail',['id'=>$tintuc->id])}}" class="btn btn-default btn-flat">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{route('tintuc.delete',['id'=>$tintuc->id])}}" class="btn btn-danger btn-flat" data-toggle="confirmation" data-popout="true" data-original-title="Bạn có chắc không ?">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
@endsection