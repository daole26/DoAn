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
					<h3 class="box-title">Sửa tour</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="{{route('tour.update', $tour1->slug)}}" method="POST" enctype="multipart/form-data">
					<input name="_method" type="hidden" value="PUT">
					@csrf
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Tên Tour</label>
							<input type="text" name="ten_tour" value="{{$tour1->ten_tour}}" placeholder="Tên tour" class="form-control" />
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Mã Tour</label>
							<input type="text" name="ma_dat_tour" value="{{$tour1->ma_dat_tour}}" placeholder="Mã tour" class="form-control" />
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Hình Ảnh</label>
							<input type="file" name="hinh_anh" id="exampleInputFile"/>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Danh Mục</label>
							<div>
								<select class="form-control" name="danh_muc_id">
									@foreach ($danhmuc as $danh_mucs)
									<option value="{{$danh_mucs->id}}" 
										@if($danh_mucs->id == $tour1->danh_muc_id) selected="" 
										@endif >{{$danh_mucs->ten_danh_muc}}
									</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Thời Gian</label>
							<input type="text" name="thoi_gian" value="{{$tour1->thoi_gian}}" placeholder="Thời gian" class="form-control" />
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Điểm Khởi Hành</label>
							<input type="text" value="{{$tour1->diem_khoi_hanh}}" name="diem_khoi_hanh"class="form-control" />
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Lịch Trình</label>
							<input type="text" value="{{$tour1->lich_trinh}}" name="lich_trinh" class="form-control" />
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Phương Tiện</label>
							<input type="text" value="{{$tour1->phuong_tien}}" name="phuong_tien" class="form-control" />
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Giá Tour</label>
							<input type="text" value="{{$tour1->gia_tour}}" name="gia_tour" placeholder="Giá tour" class="form-control" />
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Chương Trình</label>
							<input type="text" value="{{$tour1->chuong_trinh}}" name="chuong_trinh" class="form-control" />
							<!-- <form>
								<textarea id="editor1" name="chuong_trinh" rows="10" cols="80">{{$tour1->chuong_trinh}}</textarea>
							</form> -->
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Điều Kiện</label>
							<textarea name="dieu_kien" class="form-control">{{$tour1->dieu_kien}}</textarea>
							<!-- <form>
								<textarea id="editor2" name="dieu_kien" rows="10" cols="80">{{$tour1->dieu_kien}}</textarea>
							</form> -->
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Phụ Lục</label>
							<input type="text" value="{{$tour1->phu_luc}}" name="phu_luc" class="form-control" />
							<!-- <form>
								<textarea id="editor3" name="phu_luc" rows="10" cols="80">{{$tour1->phu_luc}}</textarea>
							</form> -->
						</div>
						<!-- <div class="form-group">
							<label for="exampleInputEmail1">Hình Ảnh</label>
						</div> -->
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<button type="submit" class="btn btn-info btn-flat">Sửa</button>
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
<script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js')}}"></script>
<script>
    CKEDITOR.replace('editor1');
    // CKEDITOR.replaceAll('editor2');
    // CKEDITOR.replace('editor3');
    // $('textarea').ckeditor();
    $('.textarea').wysihtml5()
</script>
@append
