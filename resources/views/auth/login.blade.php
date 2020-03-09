<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('aegis_files/myasset/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('aegis_files/myasset/vendors/bower_components/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('aegis_files/myasset/css/app.min.css')}}">
</head>
<body data-sa-theme="1">
<div class="login">
    <div class="login__block active" id="l-login">
        <div class="login__block__header">
            <i class="zmdi zmdi-account-circle"></i>
            Hi there! Please Sign in
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="login__block__body">
                <div class="form-group">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} text-center" placeholder="Email Address" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                    @endif
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} text-center" placeholder="Password" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
                <button type="submit" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-long-arrow-right"></i>
                    {{ __('') }}
                </button>
            </div>
        </form>
    </div>
</div>
<script src="{{asset('aegis_files/myasset/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('aegis_files/myasset/vendors/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('aegis_files/myasset/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('aegis_files/admin/js/app.min.js')}}"></script>
</body>
</html>

