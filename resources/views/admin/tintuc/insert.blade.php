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
					<h3 class="box-title">Thêm mới tin tức</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="{{route('tintuc.insert')}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="box-body">
						<div class="form-group">
							<label for="sel-loaitintuc">Loại tin tức</label>
							<select name="loai_tin_tuc" id="sel-loaitintuc" class="form-control">
								<option value="1">Tin tức du lịch</option>
								<option value="2">Tin tức ẩm thực</option>
							</select>
						</div>
						<div class="form-group">
							<label for="text-title">Tiêu đề</label>
							<input type="text" name="tieu_de" placeholder="Tiêu đề" class="form-control" />
                        </div>
                        <div class="form-group">
							<label for="txt-noidung">Nội dung</label>
							<textarea name="noi_dung" class="form-control" id="txt-noidung" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
							<label for="fl-hinhanh">Hình Ảnh</label>
							<input type="file" name="hinh_anh" id="fl-hinhanh"/>
						</div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<button type="submit" class="btn btn-info btn-flat">Thêm</button>
						<a href="{{route('tintuc.index')}}" class="btn btn-default btn-flat">Quay lại</a>
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
	    CKEDITOR.replace('txt-noidung');
    })
</script>
@endsection