@extends('Admin.thirdmaster')
@section('security_management','navigation__active')
@section('status','Security | Management')
@section('mycontent')
    <div class="card">
        <div class="card-body">
            <h2 class="text-center">Role Management</h2>
            {!! Form::open(['url'=>'security_management/update','method'=>'POST']) !!}
                   <div class="form-group">
                        <label>Select Employee :</label>
                            <select class="select2" name="employee_id" id="employee_id">
                                 @foreach($employees as $employee)
                                    <option value="{{$employee->id}}">{{$employee->first_name}} {{$employee->last_name}}</option>
                                 @endforeach
                            </select>
                   </div>
            <div id="role_status">Roll Assign : <span id="role_name"></span></div>
            <br>
                   <div class="form-group">
                        <label>Select Role :</label>
                            <select class="select2" name="role_id" id="role_id" data-minimum-results-for-search="Infinity">
                                @if(count($role_selected)==0)
                                    <option>No Role Selected Yet</option>
                                @endif
                                @foreach($roles as $role)
                                   <option value="{{$role->id}}"
                                    @foreach($role_selected as $selected)
                                            @if($role->id == $selected->id)
                                               selected="selected"
                                            @endif
                                    @endforeach
                                   >{{$role->role_name}}</option>
                                @endforeach
                            </select>
                   </div>
            <div class="col-md-12 text-right">
                <input class="btn btn-light text-uppercase" type="submit" value="Update Role"/>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <script>
        var role_status = document.getElementById('role_status');
        var role_name = document.getElementById('role_name');
        role_status.style.display = 'none';
        $(document).ready(function(){
          $('#employee_id').change(function(){
              var employee_id = $(this).val();
             $.ajax({
                 url:'/management/employee/role/'+employee_id,
                 method:'GET',
                 success:function(data){
                    role_status.style.display = 'block';
                    role_name.innerHTML = data;
                 }
             })
          })
      })
    </script>
    <script>
        $('employee_id').select2({ width: '100%' });
    </script>
@endsection