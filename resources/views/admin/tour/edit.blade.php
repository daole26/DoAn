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
							<input type="text" name="ma_tour" value="{{$tour1->ma_tour}}" placeholder="Mã tour" class="form-control" />
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
									<option value="{{$danh_mucs->id}}" 
										@if($danh_mucs->id == $tour1->id_danh_muc) selected="" 
										@endif >{{$danh_mucs->ten_danh_muc}}
									</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="sel-khuyenmai">Khuyến mãi</label>
							<div>
								<select class="form-control" id="sel-khuyenmai"  name="id_khuyen_mai">
									@foreach ($khuyenmai as $khuyenmai)
									<option value="{{$khuyenmai->id}}" 
										@if($khuyenmai->id == $tour1->id_khuyen_mai) selected="" 
										@endif >{{$khuyenmai->khuyen_mai}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="sel-hinhthuc">Hình thức tour</label>
							<div>
								<select class="form-control" id="sel-hinhthuc"  name="id_hinh_thuc">
									@foreach ($hinhthuc as $hinhthuc)
									<option value="{{$hinhthuc->id}}" 
										@if($hinhthuc->id == $tour1->id_hinh_thuc_tour) selected="" 
										@endif >{{$hinhthuc->hinh_thuc}}</option>
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
							<textarea id="editor1" name="chuong_trinh" rows="10" cols="80">{{$tour1->chuong_trinh}}</textarea>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Điều Kiện</label>
							<textarea id="editor2" name="dieu_kien" rows="10" cols="80">{{$tour1->dieu_kien}}</textarea>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Phụ Lục</label>
							<textarea id="editor3" name="phu_luc" rows="10" cols="80">{{$tour1->phu_luc}}</textarea>
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
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('editor3');
    // $('textarea').ckeditor();
    $('.textarea').wysihtml5()
</script>
@append
