@extends('admin.layouts.master')
@section('css-page-level-plugin')
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
@endsection
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
					<h3 class="box-title">Thêm mới tin tức</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="{{route('tour.store')}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Tiêu đề</label>
							<input type="text" name="tieu_de" placeholder="Tiêu đề" class="form-control" />
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Nội dung</label>
							<textarea id="editor" name="noi_dung" placeholder="Nội dung" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label for="avt">Hình Ảnh</label>
							<input type="file" name="hinh_anh" id="avt"/>
						</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<button type="submit" class="btn btn-info btn-flat">Thêm</button>
						<a href="{{route('tour.index')}}" class="btn btn-default btn-flat">Quay lại</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>
@endsection
@section('script')
<!-- CK Editor -->
<script src="{{asset('admin/bower_components/ckeditor/ckeditor.js')}}"></script>
<script>
	$(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
	CKEDITOR.replace('editor');
    //bootstrap WYSIHTML5 - text editor
    //$('.textarea').wysihtml5()
})
</script>
@endsection
