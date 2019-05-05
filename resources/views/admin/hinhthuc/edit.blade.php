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
					<h3 class="box-title">Cập nhật hình thức tour</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="{{route('hinhthuc.update',$hinhthuc->id)}}" method="POST">
					<input type="hidden" name="_method" value="PUT">
					@csrf
					<div class="box-body">
						<div class="form-group">
							<label for="txt-hinhthuc">Hình thức tour</label>
							<input id="txt-hinhthuc" type="text" name="hinh_thuc" placeholder="Hình thức" class="form-control" value="{{$hinhthuc->hinh_thuc}}" />
						</div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<button type="submit" class="btn btn-info btn-flat">Sửa</button>
						<a href="{{route('hinhthuc.index')}}" class="btn btn-default btn-flat">Quay lại</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>
@endsection