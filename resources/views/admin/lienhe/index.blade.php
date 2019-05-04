@extends('admin.layouts.master')
@section('Content')
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Khuyến mãi</h3>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Tiêu đề</th>
                <th>Nội dung</th>
                <th>Hành Động</th>
              </tr>
            </thead>
            <tbody>
              @php($stt=1)
              @foreach ($lienhe as $lienhe)
              <tr class="odd gradeX">
                <td> {{$stt++}} </td>
                <td> {{$lienhe-> ho_ten}} </td>
                <td> {{$lienhe-> email}} </td>
                <td> {{$lienhe-> tieu_de}} </td>
                <td> {{mb_substr(strip_tags($lienhe-> tieu_de),0,20)}} </td>
                <td>
                <a href="{{route('lienhe.show', $lienhe->id)}}" class="btn btn-default btn-flat">
                    <i class="fa fa-eye"></i>
                </a>
                  <a class="btn btn-danger btn-flat" data-toggle="confirmation" data-popout="true" data-original-title="Bạn có chắc không ?" href="{{route('lienhe.destroy', $lienhe->id)}}">
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