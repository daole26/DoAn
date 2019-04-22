@extends('admin.layouts.master')
@section('Content')
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tour</h3>
        </div>

        <div class="box-header">
          <div class="box-title">
            <div class="btn-group">
              <a href="{{route('tour.create')}}" id="sample_editable_1_new" class="btn btn-info btn-flat"> Thêm mới
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
                <th>Hình Ảnh</th>
                <th>Tên Tour</th>
                <th>Mã Tour</th>
                <th>Thời Gian</th>
                <th>Giá Tour</th>
                <th>Hành Động</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($tours as $tours)
              <tr class="odd gradeX">
                <td> {{$tours-> id}} </td>
                <td> <img src="{{asset('images') .  '/' .$tours->hinh_anh}}" width="80" height="50" /> </td>
                <td> {{$tours-> ten_tour}} </td>
                <td> {{$tours-> ma_dat_tour}} </td>
                <td> {{$tours-> thoi_gian}} </td>
                <td> {{$tours-> gia_tour}} </td>
                <td>
                  <a href="{{route('tour.edit', $tours->slug)}}" class="btn btn-info btn-flat">
                    <i class="fa fa-pencil"></i>
                  </a>
                  <a href="{{route('tour.show', $tours->slug)}}" class="btn btn-default btn-flat">
                    <i class="fa fa-eye"></i>
                  </a>
                  <a class="btn btn-danger btn-flat" data-toggle="confirmation" data-popout="true" data-original-title="Bạn có chắc không ?" href="{{route('tour.destroy', $tours->slug)}}">
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