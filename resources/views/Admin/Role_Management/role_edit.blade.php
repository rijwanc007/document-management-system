@extends('Admin.thirdmaster')
@section('status','Role | Edit')
@section('mycontent')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>['role.update',$role_data->id],'method'=>'PUT']) !!}
            <div class="form-group">
                <input type="text" class="form-control" name="role_name" placeholder="Create Roll" value="{{$role_data->role_name}}" required>
                <i class="form-group__bar"></i>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <label class="form-control text-info">PROJECT MANAGEMENT</label>
                    @foreach($permissions as $permission)
                        @if($permission->permission_for =='project_management')
                            <div class="checkbox">
                                <input class="styled-checkbox" type="checkbox" id="styled-checkbox-{{$permission->id}}" name="permission[]" value="{{$permission->id}}"
                                        @foreach($role as $permit)
                                        @if($permit->id==$permission->id)
                                        checked
                                        @endif
                                        @endforeach
                                >
                                <label for="styled-checkbox-{{$permission->id}}"></label>
                                <span class="check-label-name">{{$permission->permission_name}}</span>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="col-lg-4">
                    <label class="form-control text-info">SUPPLIER MANAGEMENT</label>
                    @foreach($permissions as $permission)
                        @if($permission->permission_for =='supplier_management')
                            <div class="checkbox">
                                <input class="styled-checkbox" type="checkbox" id="styled-checkbox-{{$permission->id}}" name="permission[]" value="{{$permission->id}}"
                                        @foreach($role as $permit)
                                        @if($permit->id==$permission->id)
                                        checked
                                        @endif
                                        @endforeach
                                >
                                <label for="styled-checkbox-{{$permission->id}}"></label>
                                <span class="check-label-name">{{$permission->permission_name}}</span>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="col-lg-4">
                    <label class="form-control text-info">CONTACT MANAGEMENT</label>
                    @foreach($permissions as $permission)
                        @if($permission->permission_for =='contact_management')
                            <div class="checkbox">
                                <input class="styled-checkbox" type="checkbox" id="styled-checkbox-{{$permission->id}}" name="permission[]" value="{{$permission->id}}"
                                        @foreach($role as $permit)
                                        @if($permit->id==$permission->id)
                                        checked
                                        @endif
                                        @endforeach
                                >
                                <label for="styled-checkbox-{{$permission->id}}"></label>
                                <span class="check-label-name">{{$permission->permission_name}}</span>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <label class="form-control text-info">EMPLOYEE MANAGEMENT</label>
                    @foreach($permissions as $permission)
                        @if($permission->permission_for =='employee_management')
                            <div class="checkbox">
                                <input class="styled-checkbox" type="checkbox" id="styled-checkbox-{{$permission->id}}" name="permission[]" value="{{$permission->id}}"
                                        @foreach($role as $permit)
                                        @if($permit->id==$permission->id)
                                        checked
                                        @endif
                                        @endforeach
                                >
                                <label for="styled-checkbox-{{$permission->id}}"></label>
                                <span class="check-label-name">{{$permission->permission_name}}</span>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="col-lg-4">
                    <label class="form-control text-info">SETTING</label>
                    @foreach($permissions as $permission)
                        @if($permission->permission_for =='setting')
                            <div class="checkbox">
                                <input class="styled-checkbox" type="checkbox" id="styled-checkbox-{{$permission->id}}" name="permission[]" value="{{$permission->id}}"
                                        @foreach($role as $permit)
                                        @if($permit->id==$permission->id)
                                        checked
                                        @endif
                                        @endforeach
                                >
                                <label for="styled-checkbox-{{$permission->id}}"></label>
                                <span class="check-label-name">{{$permission->permission_name}}</span>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="col-lg-4">
                    <label class="form-control text-info">SECURITY</label>
                    @foreach($permissions as $permission)
                        @if($permission->permission_for =='security')
                            <div class="checkbox">
                                <input class="styled-checkbox" type="checkbox" id="styled-checkbox-{{$permission->id}}" name="permission[]" value="{{$permission->id}}"
                                        @foreach($role as $permit)
                                        @if($permit->id==$permission->id)
                                        checked
                                        @endif
                                        @endforeach
                                >
                                <label for="styled-checkbox-{{$permission->id}}"></label>
                                <span class="check-label-name">{{$permission->permission_name}}</span>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-danger btn-lg btn-block blockbtn">Update Roll</button>
        {!! Form::close() !!}
    </div>
@endsection