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
					<h3 class="box-title">Chỉnh sửa người dùng</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="{{route('user.update',$user->id)}}" method="POST">
					<input name="_method" type="hidden" value="PUT">
					@csrf
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" name="email" value="{{$user->email}}" class="form-control" />
						</div>
						<!-- <div class="form-group">
							<label for="exampleInputEmail1">Mật Khẩu</label>
							<input type="text" name="password" value="{{$user->password}}" class="form-control" />
						</div> -->
						<div class="form-group">
							<label for="exampleInputEmail1">Tên Đầy Đủ</label>
							<input type="text" name="ten_hien_thi" value="{{$user->ten_hien_thi}}" class="form-control" />
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Số Điện Thoại</label>
							<input type="text" name="so_dien_thoai" value="{{$user->so_dien_thoai}}" class="form-control" />
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Địa Chỉ</label>
							<input type="text" name="dia_chi" value="{{$user->dia_chi}}" class="form-control" />
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Phân Quyền</label>
							<div>
								<select class="form-control" name="level">
									@if ($user->level == 1)
									<option value="1" selected >Admin</option>
									<option value="2">User</option>
									@else
									<option value="1" >Admin</option>
									<option value="2" selected >User</option>
									@endif
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Trạng Thái</label>
							<div>
								<select class="form-control" name="active">
									@if ($user->active == 1)
									<option value="1" selected >Kích hoạt</option>
									<option value="0">Ngừng kích hoạt</option>
									@else
									<option value="1" >Kích hoạt</option>
									<option value="0" selected >Ngừng kích hoạt</option>
									@endif
								</select>
							</div>
						</div>
						
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<button type="submit" class="btn btn-info btn-flat">Sửa</button>
						<a href="{{route('user.index')}}" class="btn btn-default btn-flat">Quay lại</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>
@endsection
