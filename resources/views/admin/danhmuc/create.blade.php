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
					<h3 class="box-title">Thêm mới danh mục</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="{{route('danhmuc.store')}}" method="POST">
					@csrf
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Tên Danh Mục</label>
							<input type="text" name="ten_danh_muc" placeholder="Tên danh mục" class="form-control" />
						</div>
						<div class="form-group">
							<label for="sel-parent">Danh mục cha</label>
							<select name="parent_id" id="sel-parent">
								<option value="0">Không có</option>
								@foreach($danhmuc as $danhmuc)
								<option value="{{$danhmuc->id}}">{{$danhmuc->ten_danh_muc}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<button type="submit" class="btn btn-info btn-flat">Thêm</button>
						<a href="{{route('danhmuc.index')}}" class="btn btn-default btn-flat">Quay lại</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>
@endsection