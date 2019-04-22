@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Họ tên</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control{{ $errors->has('ten_hien_thi') ? ' is-invalid' : '' }}" name="ten_hien_thi"
                                    value="{{ old('ten_hien_thi') }}" required autofocus>

                                @if ($errors->has('ten_hien_thi'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('ten_hien_thi') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Địa chỉ email</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                    value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Số điện thoại</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control{{ $errors->has('so_dien_thoai') ? ' is-invalid' : '' }}" name="so_dien_thoai"
                                    value="{{ old('so_dien_thoai') }}" required autofocus>

                                @if ($errors->has('so_dien_thoai'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('so_dien_thoai') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Địa chỉ</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control{{ $errors->has('dia_chi') ? ' is-invalid' : '' }}" name="dia_chi"
                                    value="{{ old('dia_chi') }}" required autofocus>

                                @if ($errors->has('dia_chi'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('dia_chi') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Mật khẩu</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Xác nhận mật
                                khẩu</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Đăng ký
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
