@extends('admin.layouts.master')
@section('Content')
<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Người Dùng</h3>
				</div>

				<div class="box-header">
					<div class="box-title">
						<div class="btn-group">
							<a href="{{route('user.create')}}" id="sample_editable_1_new" class="btn btn-info btn-flat"> Thêm mới
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
								<!-- <th>ID</th> -->
								<th>Tên Người Dùng</th>
								<th>Email</th>
								<th>Số Điện Thoại</th>
								<th>Địa Chỉ</th>
								<th>Vai Trò</th>
								<th>Kích Hoạt</th>
								<th>Hành Động</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($users as $user)
							<tr class="odd gradeX">
								<td> {{$user-> ten_hien_thi}} </td>
								<td> {{$user-> email}} </td>
								<td> {{$user-> so_dien_thoai}} </td>
								<td> {{$user-> dia_chi}} </td>

								<td> 
									@if($user->level == 1) Admin
									@else User
									@endif
								</td>

								<td> 
									@if($user->active == 1) Đã kích hoạt
									@else Ngừng kích hoạt
									@endif
								</td>

								<td>
									<a href="{{route('user.edit', $user->id)}}" class="btn btn-info btn-flat">
										<i class="fa fa-pencil"></i>
									</a>
									<a href="{{route('user.show', $user->id)}}" class="btn btn-default btn-flat">
										<i class="fa fa-eye"></i>
									</a>
									<a class="btn btn-danger btn-flat" data-toggle="confirmation" data-popout="true" data-original-title="Bạn có chắc không ?" href="{{route('user.destroy', $user->id)}}">
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