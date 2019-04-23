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
					<h3 class="box-title">Sửa danh mục</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="{{route('danhmuc.update', $danh_muc_a->slug)}}" method="POST">
					<input name="_method" type="hidden" value="PUT">
					@csrf
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Tên Danh Mục</label>
							<input type="text" name="ten_danh_muc" value="{{$danh_muc_a->ten_danh_muc}}" placeholder="Tên danh mục" class="form-control" />
						</div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<button type="submit" class="btn btn-info btn-flat">Sửa</button>
						<a href="{{route('danhmuc.index')}}" class="btn btn-default btn-flat">Quay lại</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>
@endsection