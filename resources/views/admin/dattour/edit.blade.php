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
					<h3 class="box-title">Sửa đơn đặt tour</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="{{route('dattour.update',['id'=>$dattour->id])}}" method="POST">
					@csrf
					<input type="hidden" name="_method" value="PUT">
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Ngày</label>
							<div>
								<select name="day" id="ngay" class="form-control">
									<option value="">Ngày khởi hành</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Tháng</label>
							<div>
								<select name="month" id="thang" class="form-control">
									<option value="">Tháng</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Năm</label>
							<div>
								<select name="year" id="nam" class="form-control">
									<option value="">Năm</option>
									@for($i=date('Y')-5;$i<date('Y')+5;$i++)
									<option value="{{$i}}">{{$i}}</option>
									@endfor
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Số Người Lớn</label>
							<div>
								<select name="adults" id="nl" class="form-control">
									<option value="">Số người lớn</option>
									@for ($i = 1; $i < 11; $i++)
									<option value="{{$i}}" @if ($dattour->nguoi_lon==$i)
											{{'selected=""'}}
										@endif>{{$i}}</option>
									@endfor
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Trẻ em</label>
							<div>
								<select name="children" id="trnho" class="form-control">
									<option value="">Trẻ em</option>
									@for ($i = 1; $i < 11; $i++)
									<option value="{{$i}}" @if ($dattour->tre_em==$i)
											{{'selected=""'}}
										@endif>{{$i}}</option>
									@endfor
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Em Bé</label>
							<div>
								<select name="baby" id="baby" class="form-control">
									<option value="">Em bé</option>
									@for ($i = 1; $i < 11; $i++)
									<option value="{{$i}}" @if ($dattour->em_be==$i)
											{{'selected=""'}}
										@endif>{{$i}}</option>
									@endfor
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Ghi Chú</label>
							<input type="text" name="notes"class="form-control" value="{{$dattour->ghi_chu}}" />
						</div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<button type="submit" class="btn btn-info btn-flat">Thêm</button>
						<a href="{{route('dattour.index')}}" class="btn btn-default btn-flat">Quay lại</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>
@endsection
@section('script')
<script src="{{asset('js/dulich_detail.js')}}"></script>	
@endsection