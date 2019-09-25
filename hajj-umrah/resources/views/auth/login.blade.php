@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-right">{{ __('تسجيل دخول') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div dir="rtl" class="form-group row">
                                <div class="col-3"></div>
                            <div class="col-md-6">
                                <input id="username" placeholder="اكتب اسم المستخدم" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-3"></div>
                        </div>

                        <div dir="rtl" class="form-group row">
                            <div class="col-3"></div>
                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="اكتب كلمة المرور" class=" float-right form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-3"></div>
                        </div>

                        <div class="form-group row mb-0">
                                <div class="col-3"></div>
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" style="margin-left: 25px;" class="btn btn-primary">
                                    {{ __('تسجيل الدخول') }}
                                </button>
                        </div>
                        <div class="col-3"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
