@extends('layouts.login.index')

@section('content')

    <div class="col-lg-6 d-flex align-items-center justify-content-center">
        <div class="auth-form-transparent text-left p-3">
            <div class="brand-logo">
                <img src="{{asset("assets/backend/images/logo.jpg")}}" alt="logo">
            </div>
            <h4>Tekrar Hoşgeldin!</h4>
            <h6 class="font-weight-light">Seni Tekrar Görmekten Çok Memnunuz!</h6>
            <form class="pt-3"  method="POST" action="{{ route('login') }}">
                <div class="form-group">
                    @csrf
                    <label for="exampleInputEmail">{{ __('Kullanıcı Adı') }}</label>
                    <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                        </div>
                        <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-lg border-left-0" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword">Şifre</label>
                    <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                        </div>
                        <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-lg border-left-0" id="password" placeholder="Şifre" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="my-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">{{ __('Giriş') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection