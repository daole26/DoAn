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
					<h3 class="box-title">Thêm mới tour</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="{{route('tour.store')}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Tên Tour</label>
							<input type="text" name="ten_tour" placeholder="Tên tour" class="form-control" />
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Mã Tour</label>
							<input type="text" name="ma_tour" placeholder="Mã tour" class="form-control" />
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Hình Ảnh</label>
							<input type="file" name="hinh_anh" id="exampleInputFile"/>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Danh Mục</label>
							<div>
								<select class="form-control" name="id_danh_muc">
									@foreach ($danhmuc as $danh_mucs)
									<option value="{{$danh_mucs->id}}">{{$danh_mucs->ten_danh_muc}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="sel-khuyenmai">Khuyến mãi</label>
							<div>
								<select class="form-control" id="sel-khuyenmai"  name="id_khuyen_mai">
									@foreach ($khuyenmai as $khuyenmai)
									<option value="{{$khuyenmai->id}}">{{$khuyenmai->khuyen_mai}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="sel-hinhthuc">Hình thức tour</label>
							<div>
								<select class="form-control" id="sel-hinhthuc"  name="id_hinh_thuc">
									@foreach ($hinhthuc as $hinhthuc)
									<option value="{{$hinhthuc->id}}">{{$hinhthuc->hinh_thuc}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Thời Gian</label>
							<input type="text" name="thoi_gian" placeholder="Thời gian" class="form-control" />
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Điểm Khởi Hành</label>
							<input type="text" name="diem_khoi_hanh"class="form-control" />
						</div>
						<div class="form-group">
							<label for="editor0">Lịch Trình</label>
							<textarea id="editor0" class="form-control" name="lich_trinh" rows="3" placeholder="Lịch Trình ..."></textarea>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Phương Tiện</label>
							<input type="text" name="phuong_tien" class="form-control" />
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Giá Tour</label>
							<input type="text" name="gia_tour" placeholder="Giá tour" class="form-control" />
						</div>
						<div class="form-group">
							<label for="editor1">Chương Trình</label>
							<textarea id="editor1" name="chuong_trinh" rows="10" cols="80"></textarea>
						</div>
						<div class="form-group">
							<label for="editor2">Điều Kiện</label>
							<input type="text" name="dieu_kien" class="form-control" />
							<textarea id="editor2" name="dieu_kien" rows="10" cols="80"></textarea>
						</div>
						<div class="form-group">
							<label for="editor3">Phụ Lục</label>
							<input type="text" name="phu_luc" class="form-control" />
							<textarea id="editor3" name="phu_luc" rows="10" cols="80"></textarea>
						</div>
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
	CKEDITOR.replace('editor0');
	CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('editor3');
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
})
</script>
@endsection
