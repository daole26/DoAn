@extends('admin.layouts.master')
@section('Content')
<!-- Main content -->
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
        </div>

        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tên Danh Mục</th>
                <th>Hành Động</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($danhmuc as $danh_mucs)
              <tr class="odd gradeX">
                <td> {{$danh_mucs-> id}} </td>
                <td> {{$danh_mucs-> ten_danh_muc}} </td>
                <td>
                  <a href="{{route('danhmuc.edit', $danh_mucs->slug)}}" class="btn btn-info btn-flat">
                    <i class="fa fa-pencil"></i>
                  </a>
                  <a href="{{route('danhmuc.show', $danh_mucs->slug)}}" class="btn btn-default btn-flat">
                    <i class="fa fa-eye"></i>
                  </a>
                  <a class="btn btn-danger btn-flat" data-toggle="confirmation" data-popout="true" data-original-title="Bạn có chắc không ?" href="{{route('danhmuc.destroy', $danh_mucs->slug)}}">
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
<!-- /.content -->
@endsection
