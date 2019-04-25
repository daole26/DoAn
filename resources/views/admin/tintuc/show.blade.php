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
                <h3 class="box-title">Danh Mục</h3>
            </div>
          
            <div class="box-header">
                <div class="box-title">
                    <div class="btn-group">
                    <a href="{{route('danhmuc.create')}}" id="sample_editable_1_new" class="btn btn-info btn-flat"> Thêm mới
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
                    <th>Hành Động</th>
                    </tr>
                </thead>
                @php($i=0)
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> Tour trong nước </td>
                        <td>{{mb_substr('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem nihil corporis eius accusamus soluta in aliquid ad voluptatem omnis alias, consequatur natus, officia aspernatur? Quas fuga recusandae veniam facilis cumque',0,50)}}...</td>
                        <td>
                            <a href="{{url('admincp/edit')}}" class="btn btn-info btn-flat">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="{{url('admincp/show')}}" class="btn btn-default btn-flat">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{url('admincp/delete')}}" class="btn btn-danger btn-flat" data-toggle="confirmation" data-popout="true" data-original-title="Bạn có chắc không ?">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
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