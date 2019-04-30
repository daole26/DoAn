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
              @foreach ($dattour as $dat_tours)
              <tr class="odd gradeX">
                <td> {{$dattour-> id}} </td>
                <td> {{$dattour-> tour->ma_dat_tour}} </td>
                <td> {{$dattour-> ho_ten_KH}} </td>
                <td> {{$dattour-> ngay_dat}} / {{$dattour-> thang}} / {{$dattour-> nam}} </td>
                <td> {{$dattour-> dia_chi}} </td>
                <td>
                  <a href="{{route('tour.edit', $dattour->id)}}" class="btn btn-info btn-flat">
                    <i class="fa fa-pencil"></i>
                  </a>
                  <a href="{{route('tour.show', $dattour->id)}}" class="btn btn-default btn-flat">
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