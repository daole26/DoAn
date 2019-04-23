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
					<h3 class="box-title">Thông Tin</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="#" method="POST">
					@csrf
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<p class="form-control-static">  {{$user->email}}</p>
						</div>
						<!-- <div class="form-group">
							<label for="exampleInputEmail1">Mật Khẩu</label>
							<p class="form-control-static">  {{$user->password}}</p>
						</div> -->
						<div class="form-group">
							<label for="exampleInputEmail1">Tên Đầy Đủ</label>
							<p class="form-control-static">  {{$user->ten_hien_thi}}</p>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Số Điện Thoại</label>
							<p class="form-control-static">  {{$user->so_dien_thoai}}</p>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Địa Chỉ</label>
							<p class="form-control-static">  {{$user->dia_chi}}</p>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Phân Quyền</label>
							<div>
								@if ($user->level == 1) 
								<p class="form-control-static">  Admin  </p>
								@else
								<p class="form-control-static">  User  </p>
								@endif
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Trạng Thái</label>
							<div>
								@if ($user->active == 1) 
								<p class="form-control-static">  Kích Hoạt  </p>
								@else
								<p class="form-control-static">  Ngừng kích hoạt  </p>
								@endif
							</div>
						</div>
						
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<a href="{{route('user.index')}}" class="btn btn-default btn-flat">Quay lại</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>
@endsection
