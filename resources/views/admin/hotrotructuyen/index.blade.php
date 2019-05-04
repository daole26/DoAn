@extends('admin.layouts.master')
@section('custom-css')
    <link rel="stylesheet" href="{{asset('admin/css/hotro.css')}}">
@endsection
@section('Content')
<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Người Dùng</h3>
				</div>

				<div id="bx-header" class="box-header">
					<div class="box-title">
						<div class="form-group">
                            <input type="file" class="mx-5 hidden" id="fl-image">
                            <input type="text" class="mx-5" id="txt-url" placeholder="Nhập đường dẫn">
                            <input type="text" class="mx-5" id="txt-ten" placeholder="Nhập tên">
                            <a href="{{route('hotro.store')}}" id="btn-them" data-token="{{csrf_token()}}" class="mx-5 btn btn-info btn-flat">
                                <i class="fa fa-plus"></i>
                            </a>
						</div>
                    </div>
                    <div id="image" class="text-center">
                        <label for="fl-image" id="lbl-upload" class="mx-5 fa fa-upload"></label>
                    </div>   
				</div>

				<!-- /.box-header -->
				<div class="box-body">
					<table id="table-hotro" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Số thứ tự</th>
                                <th>Avatar</th>
                                <th>Tên</th>
								<th>Link</th>
								<th>Hành Động</th>
							</tr>
						</thead>
						<tbody>
                            @php($i=0)
							@foreach ($hotro as $hotro)
                            <tr id="row{{$hotro->id}}" class="gradeX">
								<td> {{++$i}} </td>
                                <td> <img src="{{asset('images/hotro/'.$hotro->hinh_anh)}}" width ="100" alt="{{$hotro->ten}}"> </td>
                                <td>{{$hotro->ten}}</td>
								<td> {{$hotro->url}} </td>
								

								<td>
									<a class="btn btn-danger btn-flat btn-del" href="{{route('hotro.destroy', $hotro->id)}}">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->
@endsection
@section('script')
    <script src="{{asset('admin/js/hotro_upload.js')}}"></script>
@endsection