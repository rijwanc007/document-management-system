<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('myasset/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('myasset/vendors/bower_components/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('myasset/css/app.min.css')}}">
</head>
<body data-sa-theme="1">
<div class="login">
    <!-- Login -->
    <div class="login__block active" id="l-login">
        <div class="login__block__header">
            <i class="zmdi zmdi-account-circle"></i>
            Create Permission
        </div>
        {!! Form::open(['route'=>'permission.store','method'=>'POST']) !!}
        <div class="login__block__body">
            <div class="form-group">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Permission Name" name="permission_name" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                @endif
            </div>
            <div class="form-group">
                <select name='permission_for' class="form-control" style="color:black">
                    <option value="mail">mail</option>
                    <option value="project_management">project management</option>
                    <option value="supplier_management">supplier management</option>
                    <option value="contact_management">contact management</option>
                    <option value="employee_management">employee management</option>
                    <option value="setting">setting</option>
                    <option value="security">security</option>
                    <option value="super">super</option>
                </select>
            </div>
            <div class="form-group">
                <button  id ='submit' class="btn btn--icon login__block__btn"><i class="zmdi zmdi-long-arrow-right"></i>
                    {{ __('') }}
                </button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
<script src="{{asset('myasset/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('myasset/vendors/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('myasset/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- App functions and actions -->
<script src="{{asset('myasset/js/app.min.js')}}"></script>
</body>
</html>
