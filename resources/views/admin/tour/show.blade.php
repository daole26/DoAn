@extends('admin.layouts.master')
@section('Content')
<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Chi tiết tour</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="#" method="POST">
					@csrf
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Tên Tour</label>
							<p class="form-control-static">  {{$tour1->ten_tour}}  </p>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Hình Ảnh</label>
							<p class="form-control-static">
							<img height="150" width="240" src="{{asset('images') .'/' . $tour1->hinh_anh}}" />
							</p>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Mã Tour</label>
							<p class="form-control-static">  {{$tour1->ma_dat_tour}}  </p>
						</div>
						<!-- category -->
						<div class="form-group">
							<label for="exampleInputEmail1">Thời Gian</label>
							<p class="form-control-static">  {{$tour1->thoi_gian}}  </p>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Điểm Khởi Hành</label>
							<p class="form-control-static">  {{$tour1->diem_khoi_hanh}}  </p>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Lịch Trình</label>
							<p class="form-control-static">  {{$tour1->lich_trinh}}  </p>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Phương Tiện</label>
							<p class="form-control-static">  {{$tour1->phuong_tien}}  </p>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Giá Tour</label>
							<p class="form-control-static">  {{$tour1->gia_tour}}  </p>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Chương Trình</label>
							<p class="form-control-static">  {{$tour1->chuong_trinh}}  </p>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Điều Kiện</label>
							<p class="form-control-static">  {{$tour1->dieu_kien}}  </p>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Phụ Lục</label>
							<p class="form-control-static">  {{$tour1->phu_luc}}  </p>
						</div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<a href="{{route('tour.index')}}" class="btn btn-default btn-flat">Quay lại</a>
						<a href="{{route('tour.comment.index', $tour1->slug)}}" class="btn btn-default btn-flat">Xem bình luận</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>
@endsection
