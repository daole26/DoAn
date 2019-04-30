@extends('admin.layouts.master')
@section('Content')
<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Chi tiết khuyến mãi</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="#" method="POST">
					@csrf
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Khuyến mãi</label>
							<p class="form-control-static">  {{$khuyenmai->khuyen_mai}}  </p>
						</div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<a href="{{route('khuyenmai.index')}}" class="btn btn-default btn-flat">Quay lại</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>
@endsection