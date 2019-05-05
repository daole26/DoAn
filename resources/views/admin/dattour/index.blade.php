@extends('admin.layouts.master')
@section('Content')
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Đơn đặt tour</h3>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Mã Tour</th>
                <th>Khách Hàng</th>
                <th>Thời Gian</th>
                <th>Địa Chỉ</th>
                <th>Ghi Chú</th>
                <th>Hành Động</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dattours as $dattour)
              
              <tr class="odd gradeX">
                <td> {{$dattour->id}} </td>
                <td> {{$dattour->ma_dat_tour}} </td>
                <td> {{$dattour->users->ten_hien_thi}} </td>
                <td> {{$dattour->ngay_khoi_hanh}} </td>
                <td> {{$dattour->diachi}} </td>
              <td>  {{$dattour->ghi_chu}}</td>
                <td>
                  <a href="{{route('dattour.edit', $dattour->id)}}" class="btn btn-info btn-flat">
                    <i class="fa fa-pencil"></i>
                  </a>
                  <a href="{{route('dattour.show', $dattour->id)}}" class="btn btn-default btn-flat">
                    <i class="fa fa-eye"></i>
                  </a>
                  <a class="btn btn-danger btn-flat" data-toggle="confirmation" data-popout="true" data-original-title="Bạn có chắc không ?" href="{{route('dattour.destroy', $dattour->id)}}">
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