@extends('admin.layouts.master')
@section('Content')
<section class="content">
	<div class="row">
		<!-- left column -->
		@if ($errors->any())
		<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<ul>
				@foreach ($errors->all() as $error)
				<i class="icon fa fa-warning"> {{ $error }}</i>
				@endforeach
			</ul>
		</div>
		@endif
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Thêm mới người dùng</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="{{route('user.store')}}" method="POST">
					@csrf
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" name="email" class="form-control" />
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Mật Khẩu</label>
							<input type="text" name="password" class="form-control" />
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Tên Đầy Đủ</label>
							<input type="text" name="ten_hien_thi" class="form-control" />
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Số Điện Thoại</label>
							<input type="text" name="so_dien_thoai" class="form-control" />
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Địa Chỉ</label>
							<input type="text" name="dia_chi" class="form-control" />
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Phân Quyền</label>
							<div>
								<select class="form-control" name="level">
									<option value="1">Admin</option>
									<option value="2">User</option>
								</select>
							</div>
						</div>
						
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<button type="submit" class="btn btn-info btn-flat">Thêm</button>
						<a href="{{route('user.index')}}" class="btn btn-default btn-flat">Quay lại</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>
@endsection
