@extends('admin.layouts.master')
@section('Content')
<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Chi tiết danh mục</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="#" method="POST">
					@csrf
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Tên Danh Mục</label>
							<p class="form-control-static">  {{$danh_muc_a->ten_danh_muc}}  </p>
						</div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<a href="{{route('danhmuc.index')}}" class="btn btn-default btn-flat">Quay lại</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>
@endsection